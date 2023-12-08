
<?php

$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

        $meet_team_title           = get_field('meet_team_title', 'options');
        $meet_team_subtitle        = get_field('meet_team_subtitle', 'options');
  ?>

<section class="bg-white w-full text-black ">
  <div class="max-w-5xl px-5 py-12 max-h-full mx-auto">

    <div class="meet-team-carousel-title max-w-4xl py-4 px-3 md:px-3 md:py-14 mx-auto text-center">
      <h2 class="text-4xl mb-5 md:mb-10 font-semibold text-black"><?php echo $meet_team_title ?></h2>
      <p class="meet-team-carousel-subtitle text-lg font-normal text-black"><?php echo $meet_team_subtitle ?></p>
    </div>

    <div id="animation-team-carousel" class="flex gap-3 overflow-hidden justify-between relative w-full text-center min-h-340" data-carousel="static">

        <?php
        $meet_team_default_repeater = get_field('meet_team_default_repeater', 'options');

        if ( have_rows('meet_team_default_repeater', 'options') ):
            $carousel_item_order = 1;
        while( have_rows('meet_team_default_repeater', 'options') ) : the_row();

          $member_team_image          = get_sub_field('member_team_image', 'options');
          $member_team_name           = get_sub_field('member_team_name', 'options');
          $member_team_position       = get_sub_field('member_team_position', 'options');
        ?>

        <div id="carousel-indicator-<?php echo $carousel_item_order?>" class="carousel-item hidden flex-col duration-200 ease-linear text-center w-60 h-80 mx-12 " data-carousel-item>
            <img src="<?php echo $member_team_image ?>"  alt="image"  class="h-4/5 w-full object-cover"/>
            <div class="member-team-desc h-1/5 w-full bg-zinc-100 text-black">
              <p class="text-base font-semibold title-font tracking-wider"><?php echo $member_team_name ?></p>
              <p class="text-sm font-medium title-font tracking-wider"><?php echo $member_team_position ?></p>
            </div>
        </div>

        <?php
        $carousel_item_order++;
        endwhile;
        endif;
        ?>

        <!-- Slider controls -->
      <button type="button" class="absolute -ml-6 md:ml-0 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute -mr-6 md:mr-0 top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
      </button>

    </div>

    <div class="meet-team-link-wrapper text-center pt-6 md:pt-12">
      <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-black rounded-lg bg-customGrey-100 hover:bg-customGrey-300">
          Visit People Section <svg class="w-4 h-4 ml-2 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
      </a>
    </div>

  </div>
</section>

<?php
}  // your field group key
?>

