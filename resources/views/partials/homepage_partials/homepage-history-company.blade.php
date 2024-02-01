<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();

    ?>

<section class="timeline-section max-w-7xl flex flex-col justify-center text-center mx-auto mt-10 md:mt-72px">
  <style>
    #repetitive:last-child #timelineBlock #timelineLine {
      display: none;
    }
  </style>

  <h2 class="text-3xl font-medium tracking-tight leading-none text-brandBlue md:text-4xl">
    History of Ronald Fletcher Baker
  </h2>
  <div class="w-full flex justify-center my-8 ">
    <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
  </div>
  <ol
    class="timeline-wrapper relative flex pb-3 flex-row overflow-x-scroll scrollbar-thin cursor-grab select-none">
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

</section>

<?php
endwhile;
endif;
?>
