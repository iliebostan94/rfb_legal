
<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
while( have_rows('above_the_fold_section') ) : the_row();

$hero_main_title            = get_sub_field('hero_main_title');
$hero_main_subtitle         = get_sub_field('hero_main_subtitle');
$hero_main_button_text      = get_sub_field('hero_main_button_text');
$hero_main_button_link      = get_sub_field('hero_main_button_link');
$hero_second_button_text    = get_sub_field('hero_second_button_text');
$hero_second_button_link    = get_sub_field('hero_second_button_link');
$hero_main_image            = get_sub_field('hero_main_image');
?>

<section class="relative h-700">

  <div class="relative md:absolute w-full h-80 md:h-full bg-cover bg-center rounded-b-56" style="background-image: url(<?php echo $hero_main_image ?>)"></div>
  <div class="mx-auto p-6 lg:p-0 max-w-7xl h-96 md:h-full bg-black md:bg-transparent flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">
      <div class="max-w-full md:max-w-3xl text-left flex flex-col justify-center items-start">
        <h1 class="mb-2 md:mb-4 text-3xl tracking-tight leading-none text-white md:text-5xl"><?php echo $hero_main_title; ?></h1>
        <p class="mb-2 md:mb-8 text-base font-normal text-white lg:text-lg"><?php echo $hero_main_subtitle; ?></p>
        <div class="w-full flex flex-row justify-center md:justify-start space-y-0 space-x-4">
          <a href="<?php echo $hero_main_button_link; ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg border border-gray-300 bg-gray-100 hover:bg-gray-200 hover:border-gray-200 focus:ring-4 focus:ring-gray-100">
              <?php echo $hero_main_button_text; ?>
          </a>
          <a href="<?php echo $hero_second_button_link; ?>" class="text-white text-base font-medium text-center bg-transparent border py-3 px-5 border-gray-300 focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-lg ">
              <?php echo $hero_second_button_text; ?>
          </a>
      </div>

      </div>
  </div>

</section>

  <?php
endwhile;
endif;
  ?>
