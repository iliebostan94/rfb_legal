
<section class="people_individual_testimonials_section bg-cloudGrey w-full text-brandBlue relative z-0">
  <div class="max-w-5xl px-5 py-12 mx-auto overflow-hidden">

    <section class="w-full text-black rounded-lg">
      <div class="max-w-5xl max-h-full mx-auto overflow-hidden">

        <div id="people_individual_testimonials_carousel" class="slider glide glide--swipeable glide--carousel glide--ltr glide--slider">
          <div data-glide-el="track" class="slider__track glide__track">
            <ul class="glide__slides flex">
                    <?php
                    $group = acf_get_field_group('group_659ebf3a61638'); // your field group key
                    if ($group['active']) {

                      $team_member_name               = get_field('team_member_name');
                      $team_member_position           = get_field('team_member_position');
                      $team_member_quote_repeater     = get_field('team_member_quote_repeater');

                    if ( have_rows('team_member_quote_repeater') ):
                      $testimonial_count = 1;
                    while( have_rows('team_member_quote_repeater') ) : the_row();

                      $team_member_quote          = get_sub_field('team_member_quote');

                      ?>
              <div class="glide__slide testimonial_count_<?php echo $testimonial_count++ ?> flex flex-col justify-center duration-200 ease-linear px-6 md:px-12 lg:px-16 text-brandBlue text-center">

                   <div class="flex justify-center">
                     <img class="w-16 h-12" src="/wp-content/themes/rfb-legal/resources/images/quote_brand_blue.svg" alt="testimonials">
                   </div>
                   <p class="text-xl md:text-2xl lg:text-2xl font-bold">
                       <?php echo $team_member_quote ?>
                   </p>
                   <div class="w-full flex justify-center my-6 ">
                     <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
                   </div>
                   <p class="text-black text-xl font-extrabold title-font tracking-wider">
                       <?php echo $team_member_name ?>
                   </p>
                   <p class="text-black text-base font-normal title-font tracking-wider mb-14 lg:mb-0">
                       <?php echo $team_member_position ?>
                   </p>

              </div>

              <?php
              endwhile;
              endif;
              }  // your field group key
              ?>

            </ul>
            <div class="glide__bullets flex justify-center lg:hidden relative" data-glide-el="controls[nav]">
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=0"></button>
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=1"></button>
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=2"></button>
              <button class="testimonials_sidebar_glide_unit glide__bullet" data-glide-dir="=3"></button>
            </div>
            <div class="glide__arrows hidden lg:flex" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left left-0 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-lightGrey" data-glide-dir="<">
                <img class="w-8 h-8" src="/wp-content/themes/rfb-legal/resources/images/grey_arrow_forward.svg" alt="back arrow svg">
              </button>
              <button class="glide__arrow glide__arrow--right right-0 rounded-full bg-transparent group-hover:bg-white/50 group-focus:ring-lightGrey" data-glide-dir=">">
                <img class="w-8 h-8 rotate-180" src="/wp-content/themes/rfb-legal/resources/images/grey_arrow_forward.svg" alt="next arrow svg">
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

