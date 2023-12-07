

<section class="bg-gray-600 w-full text-white ">
  <div class="max-w-5xl px-5 py-12 max-h-full mx-auto overflow-hidden">

    <div id="animation-carousel" class="relative w-full text-center min-h-340" data-carousel="static">

      <?php

$group = acf_get_field_group('group_654deb926289b'); // your field group key
      if ($group['active']) {

        $general_theme_testimonials_repeater = get_field('general_theme_testimonials_repeater', 'options');

      if ( have_rows('general_theme_testimonials_repeater', 'options') ):
      while( have_rows('general_theme_testimonials_repeater', 'options') ) : the_row();

        $testimonial_content          = get_sub_field('testimonial_content', 'options');
        $testimonial_author           = get_sub_field('testimonial_author', 'options');
        $testimonial_author_position  = get_sub_field('testimonial_author_position', 'options');

        ?>
        <div class="hidden duration-200 ease-linear px-16 text-center " data-carousel-item>
          <h3 class="leading-relaxed text-4xl font-semibold mb-8">Testimonials</h3>
          <p class="text-2xl text-white font-bold mb-8"><?php echo $testimonial_content ?></p>
          <p class="text-white text-sm font-medium title-font tracking-wider"><?php echo $testimonial_author ?></p>
          <p class="text-white text-sm font-medium title-font tracking-wider"><?php echo $testimonial_author_position ?></p>
        </div>

      <?php
      endwhile;
      endif;
      }  // your field group key
      ?>


      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
      </button>

    </div>


  </div>
</section>
