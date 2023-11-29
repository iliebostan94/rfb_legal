
<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();

    $quick_stats_main_title            = get_sub_field('quick_stats_main_title');
    $quick_stats_main_subtitle         = get_sub_field('quick_stats_main_subtitle');

?>

<section class="bg-white">
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center md:py-16">
    <h2 class="mb-8 text-3xl font-medium tracking-tight leading-none text-black md:text-4xl"><?php echo $quick_stats_main_title ?></h2>
    <p class="mb-8 text-base font-light text-black md:text-2xl md:px-16 "><?php echo $quick_stats_main_subtitle ?></p>
    <div class="bg-gray-200 p-8 md:p-12 rounded-lg">
      <h4 class="mb-8 text-xl font-medium tracking-tight leading-none text-black">QUICK STATS</h4>
      <div class="flex flex-wrap flex-row md:flex-row md:justify-around md:flex-nowrap" >
      <?php
      if ( have_rows('quick_stats_fields') ):
      while( have_rows('quick_stats_fields') ) : the_row();

        $quick_stats_title            = get_sub_field('quick_stats_title');
        $quick_stats_subtitle         = get_sub_field('quick_stats_subtitle');
        ?>

        <div class="basis-1/2 py-4 md:py-0 md:basis-full ">
          <p class="text-4xl font-medium mb-2"><?php echo $quick_stats_title ?></p>
          <p class="text-xl font-medium"><?php echo $quick_stats_subtitle ?></p>
        </div>

      <?php
      endwhile;
      endif
      ?>
      </div>

    </div>
  </div>
</section>

<?php
endwhile;
endif;
?>
