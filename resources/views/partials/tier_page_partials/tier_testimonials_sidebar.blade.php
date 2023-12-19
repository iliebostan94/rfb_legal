
<section class="bg-customGrey-400 w-full text-black rounded-lg">
  <div class="max-w-5xl px-5 py-12 max-h-full mx-auto overflow-hidden">

    <div id="animation-carousel" class="relative w-full text-center h-96" data-carousel="static">

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
      <div class="hidden flex flex-col justify-center duration-200 ease-linear px-2 lg:px-4 text-center" data-carousel-item>
        <svg width="19" height="14" class="ml-auto mr-auto mb-6" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.84838 0.0039978L8.48838 2.116C6.95238 2.932 5.17638 4.948 4.74438 6.676C4.88838 6.58 5.32037 6.532 5.70438 6.532C7.52838 6.532 8.96838 7.924 8.96838 9.988C8.96838 12.052 7.24038 13.78 5.17638 13.78C2.92038 13.78 0.904375 12.004 0.904375 8.884C0.904375 5.284 2.87238 2.068 5.84838 0.0039978ZM15.5924 0.0039978L18.2804 2.116C16.7444 2.932 14.9204 4.948 14.5364 6.676C14.6804 6.58 15.1124 6.532 15.4964 6.532C17.2724 6.532 18.7124 7.924 18.7124 9.988C18.7124 12.052 17.0324 13.78 14.9204 13.78C12.6644 13.78 10.6964 12.004 10.6964 8.884C10.6964 5.284 12.6164 2.068 15.5924 0.0039978Z" fill="#131313"/>
        </svg>
        <p class="text-base md:text-lg lg:text-xl font-bold mb-8"><?php echo $testimonial_content ?></p>
        <p class="text-sm font-medium title-font tracking-wider"><?php echo $testimonial_author ?></p>
        <p class="text-sm font-medium title-font tracking-wider mb-6"><?php echo $testimonial_author_position ?></p>
      </div>

      <?php
      endwhile;
      endif;
      }  // your field group key
      ?>


        <!-- Slider indicators -->
      <div class="tier_testimonials_sidebar_slider_stepper absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2 ">
        <button type="button" class="line-step-slider w-3 h-1 " aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="line-step-slider w-3 h-1 " aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="line-step-slider w-3 h-1 " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="line-step-slider w-3 h-1 " aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="line-step-slider w-3 h-1 " aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>

    </div>


  </div>
</section>
