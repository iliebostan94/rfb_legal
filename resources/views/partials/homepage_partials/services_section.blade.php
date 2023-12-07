
<?php

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();


    $services_title             = get_sub_field('services_title');
    $services_subtitle          = get_sub_field('services_subtitle');

    $personal_title             = get_sub_field('personal_title');
    $personal_subtitle          = get_sub_field('personal_subtitle');
    $personal_services_image    = get_sub_field('personal_services_image');

    $business_title             = get_sub_field('business_title');
    $business_subtitle          = get_sub_field('business_subtitle');
    $business_services_image    = get_sub_field('business_services_image');
?>


<section class="bg-gray-200 text-gray-600 body-font">
  <div class="max-w-4xl py-4 px-3 md:px-3 md:pt-14 mx-auto text-center">
    <h2 class="text-4xl mb-5 font-semibold text-black"><?php echo $services_title ?></h2>
    <p class="text-xl text-black"><?php echo $services_subtitle ?></p>
  </div>

{{--      PERSONAL BLOCK  --}}
  <div class="max-w-7xl px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex flex-wrap mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
      <div class="w-full sm:p-4 px-4 mb-6">
        <h2 class="title-font font-medium text-4xl mb-2 text-black"><?php echo $personal_title ?></h2>
        <div class="leading-relaxed text-lg text-black"><?php echo $personal_subtitle ?></div>
      </div>

{{--      PERSONAL BLOCK REPEATER ---------------------}}
      <div class="w-full flex flex-wrap justify-between">
          <?php
          if (have_rows('personal_services_repeater') ):
          $personal_services_repeater_count = 0;
          while( have_rows('personal_services_repeater') ) : the_row();

            $personal_service_name = get_sub_field('personal_service_name');
            $personal_service_link = get_sub_field('personal_service_link');
          ?>
              <div class="p-4 lg:w-1/2 w-1/2 personal-services-unit-<?php echo $personal_services_repeater_count ?>">
                <a href="<?php echo $personal_service_link ?>" class="flex text-lg text-black font-medium services-link"><?php echo $personal_service_name ?></a>
              </div>
            <?php
            $personal_services_repeater_count++;
          endwhile;
          endif;
          ?>
      </div>
      {{--      ---------------------}}

      <div class="service-cta-btn mt-5">
        <button class=" px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-black hover:bg-gray-700 rounded-lg">
          Explore Personal Law Services
        </button>
      </div>
    </div>
    <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
      <img class="object-cover object-center w-full h-full" width="644" height="482" src="<?php echo $personal_services_image ?>" alt="personal services image">
    </div>
  </div>

  {{--      BUSINESS BLOCK--}}
  <div class="max-w-7xl px-5 pt-12 pb-24 mx-auto flex flex-wrap">
    <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
      <img class="object-cover object-center w-full h-full" width="644" height="482" src="<?php echo $business_services_image ?>" alt="personal services image">
    </div>
    <div class="flex flex-wrap mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pl-10">
      <div class="w-full sm:p-4 px-4 mb-6">
        <h2 class="title-font font-medium text-4xl mb-2 text-black"><?php echo $business_title ?></h2>
        <div class="leading-relaxed text-lg text-black"><?php echo $business_subtitle ?></div>
      </div>

      {{--      BUSINESS BLOCK REPEATER ---------------------}}
      <div class="w-full flex flex-wrap justify-between">
          <?php
            if (have_rows('business_services_repeater') ):
              $business_services_repeater_count = 0;
            while( have_rows('business_services_repeater') ) : the_row();

              $business_service_name = get_sub_field('business_service_name');
              $business_service_link = get_sub_field('business_service_link');
              ?>
                <div class="p-4 lg:w-1/2 w-1/2 business-services-unit-<?php echo $business_services_repeater_count ?>">
                  <a href="<?php echo $business_service_link ?>" class="flex text-lg text-black font-medium services-link"><?php echo $business_service_name ?></a>
                </div>
              <?php
              $business_services_repeater_count++;
            endwhile;
            endif;
          ?>
      </div>
      {{--      ---------------------}}

      <div class="service-cta-btn mt-5">
        <button class=" px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-black hover:bg-gray-700 rounded-lg">
          Explore Business Law Service
        </button>
      </div>
    </div>
  </div>

</section>

<?php
endwhile;
endif;
?>
