<?php

$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

        $meet_team_title           = get_field('meet_team_title', 'options');
        $meet_team_subtitle        = get_field('meet_team_subtitle', 'options');
  ?>

<section class="bg-white w-full">
  <div class="max-w-screen-2xl px-5 py-12 max-h-full mx-auto">

    <div class="meet-team-carousel-title max-w-4xl py-4 px-3 md:px-3 md:py-14 mx-auto text-center">
      <h2 class="text-4xl mb-5 md:mb-10 font-semibold text-brandBlue">
        <?php echo $meet_team_title ?>
      </h2>
      <div class="w-full flex justify-center mb-6 ">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="meet-team-carousel-subtitle text-lg font-normal text-darkGrey">
        <?php echo $meet_team_subtitle ?>
      </p>
    </div>

    <div id="animation-team-carousel"
      class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider min-h-340">
      <div data-glide-el="track" class="slider__track glide__track">
        <ul class="glide__slides">
          <?php
        $meet_team_default_repeater = get_field('meet_team_default_repeater', 'options');

        if ( have_rows('meet_team_default_repeater', 'options') ):
            $carousel_item_order = 1;
        while( have_rows('meet_team_default_repeater', 'options') ) : the_row();

          $member_team_image          = get_sub_field('member_team_image', 'options');
          $member_team_name           = get_sub_field('member_team_name', 'options');
          $member_team_position       = get_sub_field('member_team_position', 'options');
        ?>

          <div id="member-unit-<?php echo $carousel_item_order++ ?>" class="glide__slide h-80 relative">
            <div class="member-team-desc h-1/5 w-full bg-cloudGrey pt-3 rounded-xl absolute bottom-0">
              <p class="text-base font-semibold pl-4 title-font tracking-wider text-brandBlue ">
                <?php echo $member_team_name ?>
              </p>
              <p class="text-sm text-left pl-4 font-medium title-font tracking-wider text-utilityGrey">
                <?php echo $member_team_position ?>
              </p>
            </div>
            <img src="<?php echo $member_team_image ?>" alt="image"
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
              <img class="w-6 h-6 rotate-180" src="wp-content/uploads/2023/12/black_arrow_forward.svg" alt="arrow-svg">
              <span class="sr-only">Previous</span>
            </span>
          </button>
          <button type="button" class="glide__arrow glide__arrow--right bg-white p-0 rounded-full" data-glide-dir=">">
            <span
              class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <img class="w-6 h-6" src="wp-content/uploads/2023/12/black_arrow_forward.svg" alt="arrow-svg">
              <span class="sr-only">Next</span>
            </span>
          </button>
        </div>
      </div>

    </div>

    <div class="meet-team-link-wrapper text-center pt-6 md:pt-12">
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
}  // your field group key
?>
