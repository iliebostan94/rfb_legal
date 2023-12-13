
<?php

$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

  $insights_section_title           = get_field('insights_section_title', 'options');
  $insights_section_subtitle        = get_field('insights_section_subtitle', 'options');
  ?>

<section class="bg-white w-full text-black ">
  <div class="max-w-7xl px-5 py-12 max-h-full mx-auto">

    <div class="meet-team-carousel-title max-w-4xl py-4 px-3 md:px-3 md:py-14 mx-auto text-center">
      <h2 class="text-4xl mb-5 md:mb-10 font-semibold text-black"><?php echo $insights_section_title ?></h2>
      <p class="meet-team-carousel-subtitle text-lg font-normal text-black"><?php echo $insights_section_subtitle ?></p>
    </div>

    <div id="insights-carousel" class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider h-72">
      <div data-glide-el="track" class="slider__track glide__track">
        <ul class="glide__slides">
            <?php
            $insight_item_order = 1;

            $selected_insights_posts = get_field('selected_insights_posts', 'options');
            if ($selected_insights_posts && is_array($selected_insights_posts)):
              foreach( $selected_insights_posts as $post ):
                  $permalink = get_permalink( $post->ID );
                  $title = get_the_title( $post->ID );
                  $post_thumbnail = get_the_post_thumbnail_url( $post->ID );
                  $post_date = get_the_date('j-m-Y', $post->ID);
                  ?>
{{--    <pre><?php print_r($post) ?></pre>--}}

            <a href="<?php echo $permalink; ?>" class="test-unit insight-unit-<?php echo $insight_item_order ?>" >
              <div id="insight-unit-<?php echo $insight_item_order++ ?>" class="glide__slide h-72 ">
                <img src="<?php echo $post_thumbnail ?>"  alt="image"  class="h-3/5 w-full object-cover"/>
                <div class="insight-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4">
                  <p class="text-base font-semibold title-font tracking-wider"><?php echo $title ?></p>
                  <p class="text-base font-semibold title-font tracking-wider"><?php echo $post_date ?></p>
                </div>
              </div>
            </a>

          <?php endforeach;
          endif;
            ?>


        </ul>
        <div class="glide__arrows" data-glide-el="controls">
          <button type="button" class="glide__arrow glide__arrow--left bg-white p-0 rounded-full -left-14" data-glide-dir="<">
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                  <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>
          <button type="button" class="glide__arrow glide__arrow--right bg-white p-0 rounded-full -right-14" data-glide-dir=">">
              <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                  <svg class="w-4 h-4 text-black rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>
        </div>
      </div>
    </div>

    <div class="meet-team-link-wrapper text-center pt-6 md:pt-12">
      <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-semibold text-center text-black rounded-lg bg-customGrey-100 hover:bg-customGrey-300">
        Visit Insights Section <svg class="w-4 h-4 ml-2 text-dark dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
      </a>
    </div>

  </div>
</section>

  <?php
}  // your field group key


