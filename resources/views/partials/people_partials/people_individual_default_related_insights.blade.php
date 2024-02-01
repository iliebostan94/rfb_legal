<?php
// Get the current member's post ID
$member_post_id = get_the_ID();

// Query the "Insights" Custom Post Type based on the selected author
$insights_query = new WP_Query(array(
  'post_type' => 'insight', // Replace with your actual Custom Post Type slug
  'meta_query' => array(
    array(
      'key' => 'selected_insight_author', // Replace with your actual field name
      'value' => '"' . $member_post_id . '"',
      'compare' => 'LIKE',
    ),
  ),
));

// Get the post count
$post_count = $insights_query->found_posts;
//var_dump($post_count);

// Check if there are any posts found
if ($insights_query->have_posts() && $post_count > 3) {
  ?>
<div id="default_related_insights" class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider my-6 lg:my-10 px-8 lg:px-0">
  <div data-glide-el="track" class="slider__track glide__track">
    <ul class="glide__slides gap-6">
        <?php
      while ($insights_query->have_posts()) {
        $insights_query->the_post();

        $default_related_insights_order = 1;

        $insight_main_title = get_field('insight_main_title');
        $insight_main_image = get_field('insight_main_image');
        $insight_permalink = get_permalink();
        $insight_date = get_the_date('j-m-Y');
        ?>

      <a href="<?php echo $insight_permalink; ?>" class="default_related_insight_unit default_related_insight_unit-<?php echo $default_related_insights_order ?>">
        <div id="default_related_insight_unit-<?php echo $default_related_insights_order++ ?>" class="glide__slide h-72 ">
          <img src="<?php echo $insight_main_image ?>" alt="image" class="h-3/5 w-full object-cover rounded-t-xl" />
          <div class="insight-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4 rounded-b-xl">
            <p class="text-base font-semibold title-font tracking-wider">
                <?php echo $insight_main_title ?>
            </p>
            <p class="text-base font-semibold title-font tracking-wider">
                <?php echo $insight_date ?>
            </p>
          </div>
        </div>
      </a>
        <?php
      }
        ?>
    </ul>
    <div class="glide__arrows" data-glide-el="controls">
      <!-- ... Your left arrow content ... -->
      <button type="button" class="glide__arrow glide__arrow--left bg-white p-0 rounded-full" data-glide-dir="<">
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"></path>
              </svg>
              <span class="sr-only">Previous</span>
            </span>
      </button>
      <button type="button" class="glide__arrow glide__arrow--right bg-white p-0 rounded-full" data-glide-dir=">">
        <!-- ... Your right arrow content ... -->
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
              <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
              </svg>
              <span class="sr-only">Next</span>
            </span>
      </button>
    </div>
  </div>
</div>
  <?php
  // Restore original post data
  wp_reset_postdata();

} elseif ($insights_query->have_posts() && $post_count <= 3) {  ?>

      <div class="default_related_insight_3_wrapper flex flex-col justify-center items-center flex-wrap lg:flex-row gap-6 lg:gap-12 my-6 lg:my-10 px-8 lg:px-0">
  <?php

        while ($insights_query->have_posts()) {
          $insights_query->the_post();

          $default_related_insights_order = 1;

          $insight_main_title = get_field('insight_main_title');
          $insight_main_image = get_field('insight_main_image');
          $insight_permalink = get_permalink();
          $insight_date = get_the_date('j-m-Y');
  ?>

        <div class="default_related_insight_unit_wrapper w-72 lg:w-356px">
          <a href="<?php echo $insight_permalink; ?>" class="default_related_insight_unit default_related_insight_unit-<?php echo $default_related_insights_order ?>">
            <div id="default_related_insight_unit-<?php echo $default_related_insights_order++ ?>" class="glide__slide h-72 ">
              <img src="<?php echo $insight_main_image ?>" alt="image" class="h-3/5 w-full object-cover rounded-t-xl" />
              <div class="insight-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4 rounded-b-xl">
                <p class="text-base font-semibold title-font tracking-wider">
                    <?php echo $insight_main_title ?>
                </p>
                <p class="text-base font-semibold title-font tracking-wider">
                    <?php echo $insight_date ?>
                </p>
              </div>
            </div>
          </a>
        </div>
  <?php
}
  ?>
      </div>

<?php
}

else {
  // No insights found for this author
  ?>
     <p class="text-center my-6">
        No insights found for this author.
     </p>

<?php
}
?>

<div class="meet-team-link-wrapper text-center">
  <a href="/insights/"
     class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-brandBlue rounded-full bg-transparent border border-brandBlue hover:bg-lightBlue">
    Visit Insights Section
    <svg class="w-4 h-4 ml-2 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
            d="m1 9 4-4-4-4" />
    </svg>
  </a>
</div>
