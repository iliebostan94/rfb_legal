

<?php
$custom_tier_related_insights_count = 1;

$related_insights_taxonomy = get_sub_field('related_insights_taxonomy');
//      var_dump($related_insights_taxonomy);

if (empty($related_insights_taxonomy)) { ?>
{{--<p class="text-center">No categories selected</p>--}}

{{--display Theme default insights slider if no Category is selected by Content Editor--}}
@include('partials.theme_partials.theme_insights_slider')

  <?php
} elseif (is_array($related_insights_taxonomy)) {

  $term_ids = array_map(function ($term) {
    return $term->term_id;
  }, $related_insights_taxonomy);

  $merged_category_ids = array_merge($term_ids);

  $insights_query = new WP_Query(array(
    'post_type'      => 'insight',
    'posts_per_page' => -1,
    'tax_query'      => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'term_id',
        'terms'    => $merged_category_ids,
      ),
    ),
  ));
  // Get the post count
  $post_count = $insights_query->found_posts;
//var_dump($post_count);
//  var_dump($insights_query);

//  Check if there are any posts found && check if the post count is greater than 3 put them in a slider
  if ($insights_query->have_posts() && $post_count > 3) {  ?>

  <div id="default_tier_related_insight" class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider my-6 lg:my-10 px-8 lg:px-0">
    <div data-glide-el="track" class="slider__track glide__track">
      <ul class="glide__slides gap-6 m-0">
        <?php

            if ($insights_query->have_posts()) {
              while ($insights_query->have_posts()) {
                $insights_query->the_post();

                $insight_main_title   = get_field('insight_main_title');
                $insight_main_image   = get_field('insight_main_image');
                $insight_permalink    = get_permalink();
                $insight_date         = get_the_date('j-m-Y'); ?>

        <a href="<?php echo $insight_permalink; ?>" class="default_tier_related_insights_unit default_tier_related_insights_unit-<?php echo $default_related_insights_order ?>">
          <div id="default_tier_related_insights_wrapper-<?php echo $default_related_insights_order++ ?>" class="glide__slide h-72 ">
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
            }  ?>

          </ul>
      <div class="glide__arrows" data-glide-el="controls">
        <button type="button" class="glide__arrow glide__arrow--left bg-white p-0 rounded-full" data-glide-dir="<">
              <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
              </span>
        </button>
        <button type="button" class="glide__arrow glide__arrow--right bg-white p-0 rounded-full" data-glide-dir=">">
              <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 6 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
              </span>
        </button>
      </div>
    </div>
  </div>
  <div class="all_insights_link_wrapper text-center p-0">
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
<?php
  // Restore the global post data
  wp_reset_postdata();
} elseif ($insights_query->have_posts() && $post_count <= 3) {  ?>
{{--  Check if there are any posts found && check if the post count is 3 or less put  each post inside a single wrapper --}}

  <div class="default_tier_related_insight_general flex flex-col justify-center items-center flex-wrap lg:flex-row gap-6 lg:gap-12 my-6 lg:my-10 px-8 lg:px-0">
      <?php
        while ($insights_query->have_posts()) {
          $insights_query->the_post();

          $insights_query_count = 1;

          $insight_main_title = get_field('insight_main_title');
          $insight_main_image = get_field('insight_main_image');
          $insight_permalink = get_permalink();
          $insight_date = get_the_date('j-m-Y');
      ?>

    <div class="default_tier_related_insight_wrapper w-72 lg:w-356px">
      <a href="<?php echo $insight_permalink; ?>" class="default_tier_related_insight_unit default_tier_related_insight_unit-<?php echo $insights_query_count ?>">
        <div id="default_tier_related_insight_unit-<?php echo $insights_query_count++ ?>" class="h-72 ">
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
    } ?>
  </div>

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
<?php
  // Restore the global post data
  wp_reset_postdata();
}
      }
      ?>



