
<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
while( have_rows('above_the_fold_section') ) : the_row();

$hero_main_title          = get_sub_field('hero_main_title');
$hero_main_subtitle       = get_sub_field('hero_main_subtitle');
$hero_main_button_text    = get_sub_field('hero_main_button_text');
$hero_main_button_link    = get_sub_field('hero_main_button_link');
$hero_main_image          = get_sub_field('hero_main_image');
?>

<section class="relative h-screen mb-12">

  <div class="absolute w-full h-full bg-cover bg-center rounded-b-56" style="background-image: url(<?php echo $hero_main_image ?>)"></div>
  <div class="mx-auto p-6 lg:p-0 max-w-7xl h-full text-left flex flex-col justify-center items-start relative animate-fade animate-delay-300 animation-duration-1000 animate-once">
      <h1 class="mb-4 max-w-3xl text-2xl tracking-tight leading-none text-white md:text-4xl"><?php echo $hero_main_title; ?></h1>
      <p class="mb-8 max-w-xl text-base font-normal text-white lg:text-lg"><?php echo $hero_main_subtitle; ?></p>
      <div class="flex flex-col space-y-2 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <a href="<?php echo $hero_main_button_link; ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-blue-900 rounded-lg border border-gray-300 bg-gray-100 hover:bg-gray-200 hover:border-gray-200 focus:ring-4 focus:ring-gray-100">
            <?php echo $hero_main_button_text; ?>
        </a>
      </div>
  </div>

</section>

  <?php
endwhile;
endif;
  ?>
