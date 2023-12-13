
<?php
$above_the_fold_section = get_field('tier_1_template_group');

if ( have_rows('tier_1_template_group') ):
while( have_rows('tier_1_template_group') ) : the_row();

  $tier_1_main_services_title               = get_sub_field('tier_1_main_services_title');
  $tier_1_main_services_subtitle            = get_sub_field('tier_1_main_services_subtitle');

  $tier_1_main_services_grid_repeater       = get_sub_field('tier_1_main_services_grid_repeater');
  ?>

<section class="relative bg-customGrey-400">

  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center md:py-16">
    <h2 class="mb-8 text-3xl font-medium tracking-tight leading-none text-black md:text-4xl"><?php echo $tier_1_main_services_title ?></h2>
    <p class="mb-8 text-base font-light text-black md:text-2xl md:px-16 "><?php echo $tier_1_main_services_subtitle ?></p>
    <div class="p-8 md:p-12">
      <div class="flex flex-wrap flex-row md:flex-row md:justify-around basis-1/4" >
          <?php
        if ( have_rows('tier_1_main_services_grid_repeater') ):
          $serviceCount = 1;
        while( have_rows('tier_1_main_services_grid_repeater') ) : the_row();

          $service_image            = get_sub_field('service_image');
          $service_title            = get_sub_field('service_title');
          $service_description      = get_sub_field('service_description');
          $service_link             = get_sub_field('service_link');
          ?>

        <a href="<?php echo $service_link; ?>" class="service-unit service-unit-<?php echo $serviceCount ?> flex flex-col items-center py-4 md:py-0 " >
          <div id="service-unit-box service-unit-box-<?php echo $serviceCount++ ?>">
            <img src="<?php echo $service_image ?>"  alt="image"  class="h-3/5 w-full object-cover"/>
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
