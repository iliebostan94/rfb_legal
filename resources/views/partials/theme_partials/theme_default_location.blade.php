
<?php

$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

  $theme_default_locations_repeater = get_field('theme_default_locations_repeater', 'options');
  ?>


<section class="locations_theme_default_section bg-white z-10 relative">
  <div class="mx-auto text-center py-10 px-6 md:pt-72px md:pb-12">
    <div class="flex flex-col justify-center items-center px-4">
      <h2 class="text-32px font-semibold tracking-wider text-brandBlue md:text-40px">Locations</h2>
      <div class="flex justify-center w-full my-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
    </div>

    <div class="bg-white relative z-10">
      <div class='z-10 relative flex justify-center'>
        <div class="flex flex-wrap gap-6 w-full md:w-1310px flex-col md:flex-row md:flex-nowrap">
            <?php
          if ( have_rows('theme_default_locations_repeater', 'options') ):
            $locationCount = 1;
          while( have_rows('theme_default_locations_repeater', 'options') ) : the_row();

            $location_image          = get_sub_field('location_image', 'options');
            $location_name           = get_sub_field('location_name', 'options');
            $location_address        = get_sub_field('location_address', 'options');
            $location_phone_number   = get_sub_field('location_phone_number', 'options');
            $location_fax            = get_sub_field('location_fax', 'options');
            ?>

          <div
            class="location-unit-<?php echo $locationCount++ ?> flex flex-col items-center w-full py-4 md:py-0 md:w-1/4 text-brandBlue">
            <div class="location-custom-icon w-full bg-cover bg-center aspect-3/2 rounded-t-2xl" style="background-image: url(<?php echo $location_image ?>)">
            </div>
            <div class="location-unit-content-wrapper bg-cloudGrey flex flex-col items-center w-full h-72 p-6 gap-4 md:gap-6 rounded-b-2xl overflow-hidden">
              <img class="w-6 h-6" src="/wp-content/themes/rfb-legal/resources/images/location_on_default.svg" alt="testimonials">
              <p class="text-lg md:text-xl font-semibold">
                  <?php echo $location_name ?>
              </p>
              <p class="text-base font-normal">
                  <?php echo $location_address ?>
              </p>
              <p class="text-base font-normal">
                  <?php echo $location_phone_number ?>
              </p>
              <p class="text-base font-normal">
                  <?php echo $location_fax ?>
              </p>
            </div>
          </div>

          <?php
          endwhile;
          endif
            ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php
}  // your field group key
?>

