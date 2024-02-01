<?php

  $tier_1_template_group = get_field('tier_1_template_group');

  if ( have_rows('tier_1_template_group') ):
    while( have_rows('tier_1_template_group') ) : the_row();

      $key_people_title              = get_sub_field('key_people_title');
      $display_full_width_team_slider       = get_sub_field('display_full_width_team_slider');

      if ($display_full_width_team_slider) {
      ?>

    <section class="key_people_fullwidth_section bg-cloudGrey w-full py-10 xl:py-72px">

      <div class="max-w-screen-2xl max-h-full mx-auto">

        <div class="meet-team-carousel-title max-w-4xl mx-auto text-center">
          <h2 class="text-4xl font-semibold text-brandBlue">
              <?php echo $key_people_title ?>
          </h2>
          <div class="w-full py-8 flex justify-center">
            <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
          </div>
        </div>

        <div id="tier-template-key-people-carousel"
             class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider min-h-340 py-6 xl:py-16">
          <div data-glide-el="track" class="slider__track glide__track">
            <ul class="glide__slides">
              <?php
                $key_people_tier_repeater_fullwidth    = get_sub_field('key_people_tier_repeater_fullwidth');

              if ( have_rows('key_people_tier_repeater_fullwidth') ):
                $key_people_tier_repeater_fullwidth_count = 1;
              while( have_rows('key_people_tier_repeater_fullwidth') ) : the_row();

                $key_person_name          = get_sub_field('key_person_name');
                $key_person_subtitle      = get_sub_field('key_person_subtitle');
                $key_person_image         = get_sub_field('key_person_image');
                ?>

              <div id="member-unit-<?php echo $key_people_tier_repeater_fullwidth_count++ ?>" class="glide__slide h-80 relative">
                <div class="member-team-desc h-1/5 w-full bg-white pt-3 rounded-xl absolute bottom-0">
                  <p class="text-base font-semibold pl-4 title-font tracking-wider text-brandBlue ">
                      <?php echo $key_person_name ?>
                  </p>
                  <p class="text-sm text-left pl-4 font-medium title-font tracking-wider text-utilityGrey">
                      <?php echo $key_person_subtitle ?>
                  </p>
                </div>
                <img src="<?php echo $key_person_image ?>" alt="image"
                     class="h-full w-full object-cover rounded-t-xl rounded-b-2xl" />

              </div>
              <?php
              endwhile;
              endif;
                ?>
            </ul>
            <div class="glide__arrows" data-glide-el="controls">
              <button type="button" class="glide__arrow glide__arrow--left bg-white p-0 rounded-full" data-glide-dir="<">
            <span
              class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 1 1 5l4 4" />
              </svg>
              <span class="sr-only">Previous</span>
            </span>
              </button>
              <button type="button" class="glide__arrow glide__arrow--right bg-white p-0 rounded-full" data-glide-dir=">">
            <span
              class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                   fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 9 4-4-4-4" />
              </svg>
              <span class="sr-only">Next</span>
            </span>
              </button>
            </div>
          </div>

        </div>

        <div class="meet-team-link-wrapper text-center">
          <a href="#"
             class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-brandBlue bg-transparent border border-brandBlue hover:bg-lightBlue rounded-full">
            Visit People Section <svg class="w-4 h-4 ml-2 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
          </a>
        </div>

      </div>

    </section>

    <?php
    }
    endwhile;
  endif;
?>
