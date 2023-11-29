
<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();

    ?>

<section class="timeline-section max-w-7xl flex flex-col justify-center text-center mx-auto mb-6">

  <h2 class="mb-8 text-3xl font-medium tracking-tight leading-none text-black md:text-4xl">History of company</h2>
  <ol class="timeline-wrapper relative flex pb-3 flex-row mb-4 overflow-x-scroll scrollbar-thin cursor-move select-none ">
      <?php
      if ( have_rows('history_repeater') ):
        while( have_rows('history_repeater') ) : the_row();

          $history_title            = get_sub_field('history_title');
          $history_subtitle         = get_sub_field('history_subtitle');
          $history_date             = get_sub_field('history_date');

          ?>
    <div class="timeline-unit-wrapper">
      <li class="timeline-unit text-left mb-8 pr-36 relative border-b border-black">
        <p class="timeline-unit-text text-lg font-semibold text-gray-900 pl-6"><?php echo $history_title ?></p>
        <p class="mb-4 text-sm font-normal text-gray-500 pl-6"><?php echo $history_subtitle ?></p>
        <div class="timeline-e-1 absolute w-3 h-3 bg-blue-700 rounded-full border border-white"></div>
      </li>
      <p class="timeline-unit-text text-lg text-left font-semibold text-gray-900 pl-6"><?php echo $history_date ?></p>
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

