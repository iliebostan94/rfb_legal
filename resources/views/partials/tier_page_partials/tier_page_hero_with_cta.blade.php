<?php
$above_the_fold_section = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

  $hero_main_category_name    = get_sub_field('hero_main_category_name');
  $hero_main_title            = get_sub_field('hero_main_title');
  $hero_main_subtitle         = get_sub_field('hero_main_subtitle');
  $hero_main_image            = get_sub_field('hero_main_image');
  $first_cta_button_text      = get_sub_field('first_cta_button_text');
  $first_cta_button_link      = get_sub_field('first_cta_button_link');
  $second_cta_button_text     = get_sub_field('second_cta_button_text');
  $second_cta_button_link     = get_sub_field('second_cta_button_link');

  ?>

<section class="tier_main_hero_cta_section relative h-auto md:h-700">
  <div class="relative md:absolute w-full h-80 md:h-full bg-cover bg-center"
    style="background-image: url(<?php echo $hero_main_image ?>)"></div>
  <div class="mx-auto p-6 lg:p-0 h-auto md:h-full bg-gradient-to-r md:from-brandBlue md:to-transparent  from-[#1b355dee] to-brandBlue  flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">
    <div class="lg:ml-15% xl:ml-20% lg:max-w-xl text-left flex flex-col justify-center items-start text-customGrey-100">
      <h5 class="text-xl font-semibold mb-4 xl:mb-6">
        <?php echo $hero_main_category_name; ?>
      </h5>

      <h1 class="text-3xl tracking-tight leading-none md:text-5xl">
        <?php echo $hero_main_title; ?>
      </h1>
      <div class="w-full py-4 xl:py-6 flex justify-start">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="mb-4 md:mb-6 text-base font-normal lg:text-lg">
        <?php echo $hero_main_subtitle; ?>
      </p>
      <div class="w-full flex flex-row justify-start gap-4 xl:gap-6">
          <?php if(!empty($first_cta_button_text) )  { ?>
        <a href="<?php echo $first_cta_button_link; ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg border border-gray-300 bg-gray-100 hover:bg-gray-200 hover:border-gray-200 focus:ring-4 focus:ring-gray-100">
            <?php echo $first_cta_button_text; ?>
        </a>
        <?php } ?>

          <?php if(!empty($second_cta_button_text) )  { ?>
        <a href="<?php echo $second_cta_button_link; ?>" class="text-white text-base font-medium text-center bg-transparent border py-3 px-5 border-gray-300 focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-lg ">
            <?php echo $second_cta_button_text; ?>
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
