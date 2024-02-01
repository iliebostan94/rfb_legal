<?php
$above_the_fold_section = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

  $hero_main_category_name    = get_sub_field('hero_main_category_name');
  $hero_main_title            = get_sub_field('hero_main_title');
  $hero_main_subtitle         = get_sub_field('hero_main_subtitle');
  $hero_main_image            = get_sub_field('hero_main_image');
  $hero_main_button_text      = get_sub_field('hero_main_button_text');
  $hero_main_button_link      = get_sub_field('hero_main_button_link');
  ?>

<section class="relative md:h-700 h-auto">
  <div class="relative md:absolute w-full h-80 md:h-full bg-cover bg-center"
    style="background-image: url(<?php echo $hero_main_image ?>)"></div>
  <div
    class="mx-auto p-6 lg:p-0 h-auto md:h-full bg-gradient-to-r md:from-brandBlue md:to-transparent  from-[#1b355dee] to-brandBlue  flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">
    <div class="md:ml-36 mx-auto max-w-md text-left flex flex-col justify-center items-start  text-customGrey-100">
      <h5 class="text-xl font-semibold mb-4">
        <?php echo $hero_main_category_name; ?>
      </h5>

      <h1 class="mb-2 md:mb-6 text-3xl tracking-tight leading-none md:text-5xl">
        <?php echo $hero_main_title; ?>
      </h1>
      <div class="w-full mb-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="mb-2 md:mb-8 text-base font-normal lg:text-lg">
        <?php echo $hero_main_subtitle; ?>
      </p>
      <div class="w-full mt-4 lg:mt-6">
          <?php if(!empty($hero_main_button_text) )  { ?>
        <a href="<?php echo $hero_main_button_link; ?>"
           class="block text-black text-base font-medium text-center bg-lightBlue border py-3 px-5 border-lightBlue focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-full w-32 md:w-56">
            <?php echo $hero_main_button_text; ?>
        </a>
        <?php } ?>
      </div>
    </div>
  </div>

</section>

<?php
endwhile;
endif;
?>
