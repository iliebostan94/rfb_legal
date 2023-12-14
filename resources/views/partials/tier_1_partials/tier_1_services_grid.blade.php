
<?php
$above_the_fold_section = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

  $tier_1_main_services_title               = get_sub_field('tier_1_main_services_title');
  $tier_1_main_services_subtitle            = get_sub_field('tier_1_main_services_subtitle');

  $tier_1_main_services_grid_repeater       = get_sub_field('tier_1_main_services_grid_repeater');
  ?>

<section class="relative bg-customGrey-400">

  <div class="py-8 md:py-16 mx-auto max-w-screen-xl text-center ">
    <h2 class="mb-8 mx-auto text-3xl md:text-4xl max-w-screen-lg font-medium tracking-tight leading-none text-black "><?php echo $tier_1_main_services_title ?></h2>
    <p class="mb-8 mx-auto text-base md:text-2xl max-w-screen-lg font-light text-black md:px-12 "><?php echo $tier_1_main_services_subtitle ?></p>
    <div class="py-4 md:py-12">
      <div class="flex flex-wrap flex-row md:flex-row" >
          <?php
        if ( have_rows('tier_1_main_services_grid_repeater') ):
          $serviceCount = 1;
        while( have_rows('tier_1_main_services_grid_repeater') ) : the_row();

          $service_image            = get_sub_field('service_image');
          $service_title            = get_sub_field('service_title');
          $service_description      = get_sub_field('service_description');
          $service_link             = get_sub_field('service_link');
          ?>

        <a href="<?php echo $service_link; ?>" class="service-unit service-unit-<?php echo $serviceCount ?> flex flex-col w-1/4 items-center py-4 md:py-0 h-72 " >
          <div class="service-unit-box service-unit-box-<?php echo $serviceCount++ ?> w-full h-full p-2">
            <div class="h-3/5 w-full bg-center bg-cover" style="background-image: url(<?php echo $service_image ?>)"></div>
            <div class="insight-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4">
              <p class="text-base font-semibold title-font tracking-wider"><?php echo $service_title ?></p>
              <p class="text-base font-semibold title-font tracking-wider"><?php echo $service_description ?></p>
            </div>
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
