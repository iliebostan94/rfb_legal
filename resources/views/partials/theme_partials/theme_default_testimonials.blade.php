<section class="gradientBlueBackground w-full text-white ">

  <div class="max-w-5xl px-5 py-12 mx-auto overflow-hidden">

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
      <div class="hidden duration-200 ease-linear px-6 md:px-12 lg:px-16 text-center text-lightGold" data-carousel-item>
        <div class="flex justify-center">
          <img class="w-16 h-12" src="wp-content/uploads/2023/12/testimonials_title.svg" alt="testimonials">
        </div>
        <p class="text-xl md:text-2xl lg:text-2xl font-bold mb-8">
          <?php echo $testimonial_content ?>
        </p>
        <div class="w-full flex justify-center my-8 ">
          <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
        </div>
        <p class="text-white text-xl font-extrabold title-font tracking-wider">
          <?php echo $testimonial_author ?>
        </p>
        <p class="text-white text-base font-normal title-font tracking-wider">
          <?php echo $testimonial_author_position ?>
        </p>
      </div>

      <?php
      endwhile;
      endif;
      }  // your field group key
      ?>


      <!-- Slider controls -->
      <button type="button"
        class="absolute -ml-6 md:ml-0 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <img class="w-8 h-8 rotate-180" src="wp-content/uploads/2023/12/white_arrow_forward.svg" alt="arrow-svg">
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button"
        class="absolute -mr-6 md:mr-0 top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
          class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <img class="w-8 h-8" src="wp-content/uploads/2023/12/white_arrow_forward.svg" alt="arrow-svg">
          <span class="sr-only">Next</span>
        </span>
      </button>

    </div>


  </div>
</section>
