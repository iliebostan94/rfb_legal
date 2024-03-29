<section class="w-full text-lightGold ">
  <div class="max-w-sm px-6 py-8 max-h-full mx-auto overflow-hidden m-auto gradientBlueBackground md:rounded-lg">

    <section class="w-full text-black rounded-lg">
      <div class="max-w-5xl max-h-full mx-auto overflow-hidden">

        <div id="testimonials-sidebar" class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider">
          <div data-glide-el="track" class="slider__track glide__track">
            <ul class="glide__slides flex">
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
              <div class="glide__slide flex flex-col justify-center duration-200 ease-linear px-2 lg:px-4 text-center">
                <svg width="19" height="14" class="ml-auto mr-auto mb-6" viewBox="0 0 19 14" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.84838 0.0039978L8.48838 2.116C6.95238 2.932 5.17638 4.948 4.74438 6.676C4.88838 6.58 5.32037 6.532 5.70438 6.532C7.52838 6.532 8.96838 7.924 8.96838 9.988C8.96838 12.052 7.24038 13.78 5.17638 13.78C2.92038 13.78 0.904375 12.004 0.904375 8.884C0.904375 5.284 2.87238 2.068 5.84838 0.0039978ZM15.5924 0.0039978L18.2804 2.116C16.7444 2.932 14.9204 4.948 14.5364 6.676C14.6804 6.58 15.1124 6.532 15.4964 6.532C17.2724 6.532 18.7124 7.924 18.7124 9.988C18.7124 12.052 17.0324 13.78 14.9204 13.78C12.6644 13.78 10.6964 12.004 10.6964 8.884C10.6964 5.284 12.6164 2.068 15.5924 0.0039978Z"
                    fill="#D6C180" />
                </svg>
                <p class="text-base md:text-lg lg:text-xl font-bold mb-8 text-lightGold">
                  <?php echo $testimonial_content ?>
                </p>
                <div class="flex justify-center w-full my-6">
                  <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
                </div>
                <p class="text-lg font-normal title-font tracking-wider text-white">
                  <?php echo $testimonial_author ?>
                </p>
                <p class="text-sm font-medium title-font tracking-wider mb-6 text-white">
                  <?php echo $testimonial_author_position ?>
                </p>
              </div>

              <?php
          endwhile;
          endif;
          }  // your field group key
          ?>

            </ul>
            <div class="glide__bullets relative pt-6" data-glide-el="controls[nav]">
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=0"></button>
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=1"></button>
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=2"></button>
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=3"></button>
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=4"></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>
