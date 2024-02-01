<?php
$above_the_fold_section = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

  $tier_main_services_title               = get_sub_field('tier_main_services_title');
  $tier_main_services_subtitle            = get_sub_field('tier_main_services_subtitle');

  $tier_main_services_grid_repeater       = get_sub_field('tier_main_services_grid_repeater');
  ?>

<section class="tier_services_grid_section relative bg-customGrey-400">

  <div class="py-8 md:py-16 mx-auto max-w-screen-xl text-center ">
    <h2
      class="mb-8 mx-auto text-3xl md:text-4xl max-w-screen-lg font-medium tracking-tight leading-none text-brandBlue ">
      <?php echo $tier_main_services_title ?>
    </h2>
    <div class="flex justify-center w-full mb-6">
      <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
    </div>
    <p class="mb-8 mx-auto text-base md:text-2xl max-w-screen-lg font-light text-darkGrey md:px-12 px-6">
      <?php echo $tier_main_services_subtitle ?>
    </p>
    <!-- FOR DESKTOP OR TABLET -->
    <div class="py-4 md:py-12  hidden md:block">
      <div class="flex flex-wrap flex-row">
        <?php
        if ( have_rows('tier_main_services_grid_repeater') ):
          $serviceCount = 1;
        while( have_rows('tier_main_services_grid_repeater') ) : the_row();

          $service_image            = get_sub_field('service_image');
          $service_title            = get_sub_field('service_title');
          $service_description      = get_sub_field('service_description');
          $service_link             = get_sub_field('service_link');
          ?>

        <a href="<?php echo $service_link; ?>"
          class="service-unit service-unit-<?php echo $serviceCount ?> flex flex-col w-1/4 items-center py-4 md:py-0 h-72">
          <div class="service-unit-box service-unit-box-<?php echo $serviceCount++ ?> w-full h-full p-2">
            <div class="h-3/5 w-full bg-center bg-cover rounded-t-xl"
              style="background-image: url(<?php echo $service_image ?>)">
            </div>
            <div class="insight-desc flex flex-col justify-center w-full bg-white rounded-b-xl  text-left p-4 h-2/5">
              <p class="text-xl font-semibold text-brandBlue">
                <?php echo $service_title ?>
              </p>
              <p class="text-base font-normal text-utilityGrey">
                <?php echo $service_description ?>
              </p>
            </div>
          </div>
        </a>


        <?php
        endwhile;
        endif
          ?>
      </div>

    </div>

    <!-- FOR MOBILE -->
    <div class="p-4 md:hidden">
      <div class="flex flex-col ">
        <?php
        if ( have_rows('tier_main_services_grid_repeater') ):
          $serviceCount = 1;
        while( have_rows('tier_main_services_grid_repeater') ) : the_row();

          $service_image            = get_sub_field('service_image');
          $service_title            = get_sub_field('service_title');
          $service_description      = get_sub_field('service_description');
          $service_link             = get_sub_field('service_link');
          ?>

        <a href="<?php echo $service_link; ?>" class="mobile_service_link_wrapper">
          <div class="py-5 border-y border-lightGrey">
            <p class="text-xl font-medium text-brandBlue text-left mb-2 flex" id="tierServiceMobileTitle">
              <?php echo $service_title ?><img class=" h-6 w-6 ml-2.5 mt-0.5"
                src="/wp-content/themes/rfb-legal/resources/images/gold_arrow_forward.svg" alt="gold arrow">
            </p>
            <p class="text-sm font-normal text-utilityGrey text-left" id="tierServiceMobileDescription">
              <?php echo $service_description ?>
            </p>
          </div>
        </a>


        <?php
        endwhile;
        endif
          ?>
      </div>

    </div>



  </div>

</section>

<?php
endwhile;
endif;
?>
