<?php
$group = acf_get_field_group('group_65a12ef7d3421'); // your field group key
if ($group['active']) {

  $quick_stats_main_title            = get_field('quick_stats_main_title');
  $quick_stats_main_subtitle         = get_field('quick_stats_main_subtitle');

  ?>
<style>
  #repetitive:last-child #timelineBlock #timelineLine {
    display: none;
  }
</style>

<section class="about_us_experience_stats_section bg-white z-10 relative">
  <div class="mx-auto text-center md:pt-72px">
    <div class="flex flex-col justify-center items-center px-4">
      <h2 class="text-3xl font-medium tracking-tight leading-none text-brandBlue md:text-4xl">
          <?php echo $quick_stats_main_title ?>
      </h2>
      <div class="flex justify-center w-full my-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <div class="pb-8 md:pb-72px text-base font-light text-utilityGrey md:text-2xl md:px-16 max-w-screen-xl">
          <?php echo $quick_stats_main_subtitle ?>
      </div>
    </div>

    <div class="about_us_history_block max-w-7xl flex flex-col justify-center text-center mx-auto mt-6 md:mt-10 mb-8 md:mb-72px">

        <h2 class="text-3xl font-medium tracking-tight leading-none text-brandBlue md:text-4xl">
          History of Ronald Fletcher Baker
        </h2>
        <div class="w-full flex justify-center my-8 ">
          <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
        </div>
        <ol
          class="about-us-timeline-wrapper relative flex pb-3 flex-row overflow-x-scroll scrollbar-thin cursor-grab select-none">
            <?php
          if ( have_rows('history_repeater') ):
          while( have_rows('history_repeater') ) : the_row();

            $history_title            = get_sub_field('history_title');
            $history_subtitle         = get_sub_field('history_subtitle');
            $history_date             = get_sub_field('history_date');

            ?>
          <div class="timeline-unit-wrapper relative " id="repetitive">

            <li class="timeline-unit text-left mb-8 pr-36 relative h-auto ">
              <p class="timeline-unit-text text-lg font-semibold text-brandBlue pl-6 mb-2 ">
                  <?php echo $history_title ?>
              </p>
              <p class="mb-5 text-sm font-normal text-utilityGrey pl-6 h-auto">
                  <?php echo $history_subtitle ?>
              </p>

            </li>
            <div class="absolute w-full flex mb-5 items-center ml-6 bottom-[22px] bg-white" id="timelineBlock">
              <div class="h-3 w-7 flex justify-center items-center">
                <div class="w-3 h-3 rounded-full bg-accentGold flex justify-center items-center ">
                  <div class="w-2 h-2 rounded-full bg-white"></div>
                </div>
              </div>
              <div class="w-full h-[1px] bg-lightBlue .timeline-line" id="timelineLine"></div>
            </div>

            <p class="timeline-unit-text text-lg text-left text-black pl-6 ">
                <?php echo $history_date ?>
            </p>
          </div>


          <?php
          endwhile;
          endif
            ?>

        </ol>

    </div>

    <div class="bg-cloudGrey p-8 relative z-10">
      <div class='z-10 relative '>
        <h4 class="mb-8 text-lg font-bold tracking-widest text-brandBlue ">QUICK STATS</h4>
        <div class="flex flex-wrap gap-6 md:gap-11 w-full md:w-858px mx-auto flex-row md:flex-row md:flex-nowrap text-brandBlue">
            <?php
          if ( have_rows('quick_stats_fields') ):
            $statCount = 1;
          while( have_rows('quick_stats_fields') ) : the_row();

            $quick_stats_title            = get_sub_field('quick_stats_title');
            $quick_stats_subtitle         = get_sub_field('quick_stats_subtitle');
            $quick_stats_icon             = get_sub_field('quick_stats_icon');
            ?>

          <div
            class="stat-unit-<?php echo $statCount++ ?> flex flex-col items-center py-4 md:py-0 md:basis-full w-[130px] md:w-[155px]">
            <div class="stat-custom-icon h-10 w-10 bg-cover bg-center" style="background-image: url(<?php echo $quick_stats_icon ?>)">
            </div>
            <p class="text-4xl font-semibold mb-2">
                <?php echo $quick_stats_title ?>
            </p>
            <p class="text-xl font-semibold">
                <?php echo $quick_stats_subtitle ?>
            </p>
          </div>
          <div class="stat-unit-<?php echo $statCount++ ?> stat-separation-bar border-r-2 border-brandBlue opacity-10"></div>

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
}
?>
