<?php
$group = acf_get_field_group('group_65a01b651cf75'); // your field group key
if ($group['active']) {
  ?>


    <div id="custom_related_insights" class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider my-6 lg:my-10 px-8 lg:px-0">
      <div data-glide-el="track" class="slider__track glide__track">
        <ul class="glide__slides gap-6">
            <?php
            $custom_related_insights_order = 1;

            $custom_related_insights        = get_field('custom_related_insights');

          if ($custom_related_insights && is_array($custom_related_insights)):
          foreach( $custom_related_insights as $post ):
            $insight_main_title              = get_field('insight_main_title', $post->ID);
            $insight_main_image              = get_field('insight_main_image' , $post->ID);
            $insight_permalink               = get_permalink( $post->ID );
            $insight_date                    = get_the_date('j-m-Y', $post->ID);
            ?>


          <a href="<?php echo $insight_permalink; ?>" class="custom_related_insight_unit custom_related_insight_unit-<?php echo $custom_related_insights_order ?>">
            <div id="custom_related_insight_unit-<?php echo $custom_related_insights_order++ ?>" class="glide__slide h-72 ">
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
          <?php endforeach;
          endif;
            ?>
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
}  // your field group key
