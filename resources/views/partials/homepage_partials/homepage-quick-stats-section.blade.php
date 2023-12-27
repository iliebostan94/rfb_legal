<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();

    $quick_stats_main_title            = get_sub_field('quick_stats_main_title');
    $quick_stats_main_subtitle         = get_sub_field('quick_stats_main_subtitle');

?>

<section class="bg-white z-10 relative">
  <div class="py-8 mx-auto  text-center md:py-16">
    <div class="flex flex-col justify-center items-center px-4">
      <h2 class="mb-8 text-3xl font-medium tracking-tight leading-none text-brandBlue md:text-4xl">
        <?php echo $quick_stats_main_title ?>
      </h2>
      <div class="flex justify-center w-full my-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <div class="mb-8 text-base font-light text-utilityGrey md:text-2xl md:px-16 max-w-screen-xl">
        <?php echo $quick_stats_main_subtitle ?>
      </div>
    </div>


    <div class="bg-cloudGrey p-8 relative z-10">
      <div class='z-10 relative '>
        <h4 class="mb-8 text-xl font-medium tracking-tight leading-none text-brandBlue ">QUICK STATS</h4>
        <div class="flex flex-wrap gap-8 flex-row md:flex-row justify-center md:flex-nowrap text-brandBlue">
          <?php
      if ( have_rows('quick_stats_fields') ):
        $statCount = 1;
      while( have_rows('quick_stats_fields') ) : the_row();

        $quick_stats_title            = get_sub_field('quick_stats_title');
        $quick_stats_subtitle         = get_sub_field('quick_stats_subtitle');
        $quick_stats_icon             = get_sub_field('quick_stats_icon');
        ?>

          <div
            class="stat-unit-<?php echo $statCount++ ?> flex flex-col items-center basis-1/2 py-4 md:py-0 md:basis-full max-w-[155px]">
            <div class="stat-custom-icon h-10 w-10 bg-cover bg-center" style="background-image: url(<?php echo $quick_stats_icon ?>)">
            </div>
            <p class="text-4xl font-medium mb-2">
              <?php echo $quick_stats_title ?>
            </p>
            <p class="text-xl font-medium">
              <?php echo $quick_stats_subtitle ?>
            </p>
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
endwhile;
endif;
?>