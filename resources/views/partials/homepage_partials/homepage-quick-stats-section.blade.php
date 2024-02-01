<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();

    $quick_stats_main_title            = get_sub_field('quick_stats_main_title');
    $quick_stats_main_subtitle         = get_sub_field('quick_stats_main_subtitle');

?>

<<<<<<< HEAD
<section class="experience-stats-section bg-white z-10 relative">
  <div class="mx-auto text-center ">
    <div class="flex flex-col justify-center items-center px-6 py-10 m-auto max-w-1050px xl:py-72px xl:px-0">
      <h2 class="text-3xl font-medium tracking-tight leading-none text-brandBlue md:text-4xl">
=======
<section class="bg-white z-10 relative">
  <div class="py-8 mx-auto  text-center md:py-16">
    <div class="flex flex-col justify-center items-center px-4">
      <h2 class="mb-8 text-3xl font-medium tracking-tight leading-none text-brandBlue md:text-4xl">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
        <?php echo $quick_stats_main_title ?>
      </h2>
      <div class="flex justify-center w-full my-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
<<<<<<< HEAD
      <div class="text-base font-light text-utilityGrey md:text-2xl">
=======
      <div class="mb-8 text-base font-light text-utilityGrey md:text-2xl md:px-16 max-w-screen-xl">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
        <?php echo $quick_stats_main_subtitle ?>
      </div>
    </div>


    <div class="bg-cloudGrey p-8 relative z-10">
      <div class='z-10 relative '>
<<<<<<< HEAD
        <h4 class="mb-8 text-lg font-bold tracking-widest text-brandBlue ">QUICK STATS</h4>
        <div class="flex flex-wrap gap-6 md:gap-11 w-full xl:w-858px mx-auto flex-row md:flex-row xl:flex-nowrap text-brandBlue">
=======
        <h4 class="mb-8 text-xl font-medium tracking-tight leading-none text-brandBlue ">QUICK STATS</h4>
        <div class="flex flex-wrap gap-8 flex-row md:flex-row justify-center md:flex-nowrap text-brandBlue">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
          <?php
      if ( have_rows('quick_stats_fields') ):
        $statCount = 1;
      while( have_rows('quick_stats_fields') ) : the_row();

        $quick_stats_title            = get_sub_field('quick_stats_title');
        $quick_stats_subtitle         = get_sub_field('quick_stats_subtitle');
        $quick_stats_icon             = get_sub_field('quick_stats_icon');
        ?>

          <div
<<<<<<< HEAD
            class="stat-unit-<?php echo $statCount++ ?> flex flex-col items-center py-4 md:py-0 w-[130px] md:w-40% xl:w-[155px]">
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
=======
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
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26

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