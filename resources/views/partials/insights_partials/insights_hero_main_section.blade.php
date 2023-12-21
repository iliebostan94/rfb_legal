
<?php
$above_the_fold_section = get_field('insights_template_group');

if ( have_rows('insights_template_group') ):
while( have_rows('insights_template_group') ) : the_row();

  $featured_insight_title        = get_sub_field('featured_insight_title');
  $featured_insight_link         = get_sub_field('featured_insight_link');
  $featured_insight_image        = get_sub_field('featured_insight_image');
  ?>

<section class="relative h-700">

  <div class="relative md:absolute w-full h-80 md:h-full bg-cover bg-center" style="background-image: url(<?php echo $featured_insight_image ?>)"></div>
  <div class="mx-auto p-6 lg:p-0 max-w-7xl h-96 md:h-full bg-black md:bg-transparent flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">
    <div class="max-w-full md:max-w-3xl text-left flex flex-col justify-center items-start">
      <p class="mb-2 md:mb-8 text-base font-normal text-white lg:text-lg">Featured Insight</p>
      <h1 class="mb-2 md:mb-4 text-3xl tracking-tight leading-none text-white md:text-5xl"><?php echo $featured_insight_title; ?></h1>
      <div class="w-full flex flex-row justify-center md:justify-start space-y-0 space-x-4">
        <a href="<?php echo $featured_insight_link; ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-black rounded-lg border border-gray-300 bg-gray-100 hover:bg-gray-200 hover:border-gray-200 focus:ring-4 focus:ring-gray-100">
            Continue Reading
        </a>
      </div>

    </div>
  </div>

</section>

<?php
endwhile;
endif;
?>
