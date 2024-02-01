
<?php
$group = acf_get_field_group('group_65a130fb9caed'); // your field group key
if ($group['active']) {

  $hero_header_title                 = get_field('hero_header_title');
  $hero_header_subtitle              = get_field('hero_header_category');
  $hero_header_background_image      = get_field('hero_header_background_image');

  ?>

<section class="contact_us_hero_main_section relative md:h-480 h-auto">
  <div class="relative md:absolute w-full h-354 md:h-full bg-cover bg-center mt-mobile-header-custom-height md:mt-0"
       style="background-image: url(<?php echo $hero_header_background_image ?>); "></div>

  <div class="p-6 lg:p-0 h-auto md:h-full bg-gradient-to-r md:from-brandBlue md:to-transparent  from-[#1b355dee] to-brandBlue  flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">

    <div class="w-full lg:w-1280px mx-auto ">
      <div class="max-w-3xl lg:ml-4 mx-auto text-left flex flex-col justify-center items-start text-customGrey-100">
        <p class="text-lg font-semibold"><?php echo $hero_header_subtitle; ?></p>
        <h1 class="my-4 md:my-6 text-2xl font-semibold md:font-bold md:text-5xl">
            <?php echo $hero_header_title; ?>
        </h1>
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
    </div>

  </div>


</section>

  <?php
}
?>


