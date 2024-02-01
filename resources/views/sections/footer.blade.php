{{--<footer class="content-info">--}}
{{--  @php(dynamic_sidebar('sidebar-footer'))--}}
{{--</footer>--}}

<?php

   $group = acf_get_field_group('group_65782389a5f9e'); // your field group key
   if ($group['active']) {

   $theme_footer_cta_title                          = get_field('theme_footer_cta_title', 'options');
   $give_us_a_call_text                             = get_field('give_us_a_call_text', 'options');
   $give_us_a_call_phone                            = get_field('give_us_a_call_phone', 'options');
   $send_us_email_text                              = get_field('send_us_email_text', 'options');
   $send_us_email_address                           = get_field('send_us_email_address', 'options');
   $contact_enquiry_form_text                       = get_field('contact_enquiry_form_text', 'options');

   $theme_footer_first_office                       = get_field('theme_footer_first_office', 'options');
   $theme_footer_second_office                      = get_field('theme_footer_second_office', 'options');
   $theme_footer_third_office                       = get_field('theme_footer_third_office', 'options');
   $theme_footer_forth_office                       = get_field('theme_footer_forth_office', 'options');

   $theme_footer_contact_first_statement            = get_field('theme_footer_contact_first_statement', 'options');
   $theme_footer_sra_logo                           = get_field('theme_footer_solicitors_regulation_authority_logo', 'options');
   $theme_footer_contact_second_statement           = get_field('theme_footer_contact_second_statement', 'options');
   $theme_footer_socials_title                      = get_field('theme_footer_socials_title', 'options');

   ?>

  <footer class="theme-main-footer footerCustomBackgroundStyle">

    <div class="footer-cta-row bg-[#071A3A] footer-cta-wrapper flex flex-col lg:flex-row justify-center items-center py-10 px-6 md:p-6 lg:p-12 text-white">
      <div class="footer-cta-left-col mb-8 lg:mb-0 lg:mr-16">
        <h4 class="text-lightGrey text-2xl font-bold"><?php echo $theme_footer_cta_title ?></h4>
      </div>
      <div class="footer-cta-right-col flex flex-col lg:flex-row gap-8">
        <div class="footer-cta-unit flex flex-col justify-center text-center gap-2 md:gap-3">
          <p class="text-base font-normal"><?php echo $give_us_a_call_text ?></p>
          <button onclick="location.href='tel:<?php echo str_replace(' ', '', $give_us_a_call_phone); ?>'" class="inline-flex justify-center items-center py-3 px-12 text-xl font-bold leading-8 text-center text-white rounded-full getInTouch hover:bg-gray-900">
            <img src="/wp-content/themes/rfb-legal/resources/images/footer-call-gold-icon.svg" class="mr-2.5" alt="footer cta call icon">
            <a href="tel:<?php echo str_replace(' ', '', $give_us_a_call_phone); ?>"
               class="">
                <?php echo $give_us_a_call_phone; ?>
            </a>
          </button>

        </div>
        <div class="footer-cta-unit flex flex-col justify-center text-center gap-2 md:gap-3">
          <p class="text-base font-normal"><?php echo $send_us_email_text ?></p>
          <button onclick="location.href='mailto:<?php echo str_replace(' ', '', $send_us_email_address); ?>'" class="inline-flex justify-center items-center py-3 px-12 text-xl font-bold leading-8 text-center text-white rounded-full getInTouch hover:bg-gray-900">
            <img src="/wp-content/themes/rfb-legal/resources/images/footer-mail-gold-icon.svg" class="mr-2.5" alt="footer cta mail icon">
            <a href="mailto:<?php echo str_replace(' ', '', $send_us_email_address); ?>"
               class="">
                <?php echo $send_us_email_address; ?>
            </a>
          </button>
        </div>
        <div class="footer-cta-unit flex flex-col justify-center text-center gap-2 md:gap-3">
          <p class="text-base font-normal"><?php echo $contact_enquiry_form_text ?></p>
          <button onclick="location.href='/contact-us/'" class="inline-flex justify-center items-center py-3 px-12 text-xl font-bold leading-8 text-center text-white rounded-full getInTouch hover:bg-gray-900">
            <img src="/wp-content/themes/rfb-legal/resources/images/footer-chat-gold-icon.svg" class="mr-2.5" alt="footer cta submit request icon">
            <a href="/contact-us/"
               class="">Submit Request
            </a>
          </button>
        </div>
      </div>
    </div>

    <div class="footer-main-row w-full 2xl:w-1440px p-0 mx-auto text-white">

      <div class="footer-offices-wrapper flex flex-row flex-wrap lg:flex-row justify-center 2xl:justify-around p-6 lg:p-4">
        <div class="footer-office-unit w-36 md:w-56 xl:w-72 flex flex-col justify-center items-center p-0 lg:px-8 lg:py-4 gap-3.5">
          <img class="w-6 h-6" src="/wp-content/themes/rfb-legal/resources/images/footer-location-gold-icon.svg" alt="testimonials">
            <?php echo $theme_footer_first_office ?>
        </div>

        <div class="footer-location-separation-bar-1 border-r-2 border-white opacity-15 "></div>

        <div class="footer-office-unit w-36 md:w-56 xl:w-72 flex flex-col justify-center items-center p-0 lg:px-8 lg:py-4 gap-3.5">
          <img class="w-6 h-6" src="/wp-content/themes/rfb-legal/resources/images/footer-location-gold-icon.svg" alt="testimonials">

            <?php echo $theme_footer_second_office ?>
        </div>

        <div class="footer-location-separation-bar-2 hidden lg:flex border-r-2 border-white opacity-15"></div>

        <div class="footer-office-unit w-36 md:w-56 xl:w-72 flex flex-col justify-center items-center p-0 lg:px-8 lg:py-4 gap-3.5">
          <img class="w-6 h-6" src="/wp-content/themes/rfb-legal/resources/images/footer-location-gold-icon.svg" alt="testimonials">
            <?php echo $theme_footer_third_office ?>
        </div>

        <div class="footer-location-separation-bar-3 border-r-2 border-white opacity-15 mt-11 lg:mt-0"></div>

        <div class="footer-office-unit w-36 md:w-56 xl:w-72 flex flex-col justify-center items-center mt-11 lg:mt-0 p-0 lg:px-8 lg:py-4 gap-3.5">
          <img class="w-6 h-6" src="/wp-content/themes/rfb-legal/resources/images/footer-location-gold-icon.svg" alt="testimonials">
            <?php echo $theme_footer_forth_office ?>
        </div>
      </div>

      <div class="footer-logos-wrapper max-w-full lg:max-w-3xl flex flex-row justify-center m-auto flex-wrap px-10 lg:px-0 gap-8 lg:gap-16">
          <?php
          if ( have_rows( 'theme_footer_logos_repeater' , 'options' ) ):
            $theme_footer_logos_count = 1;
            while( have_rows( 'theme_footer_logos_repeater' , 'options' ) ) : the_row();
              $theme_footer_logo_image             = get_sub_field('theme_footer_logo_image' , 'options');
              ?>
              <div class="footer-logo-unit-<?php echo $theme_footer_logos_count++ ?> flex ">
                <img class="footer-logo-unit-image h-14 w-14" src="<?php echo $theme_footer_logo_image ?>" alt="footer-logo-unit-image">
              </div>
              <?php
            endwhile;
            endif;
              ?>
      </div>

      <div class="footer-statement-wrapper max-w-screen-lg mx-auto text-center p-4">
        <div class="footer-first-statement">
            <?php echo $theme_footer_contact_first_statement ?>
        </div>
        <div class="footer-statement-sra-img-wrapper flex justify-center p-4">
          <img class="footer-logo-unit-image h-14 w-24" src="<?php echo $theme_footer_sra_logo ?>" alt="footer-statement-sra-img">
        </div>
        <div class="footer-second-statement max-w-screen-md mx-auto">
            <?php echo $theme_footer_contact_second_statement ?>
        </div>

        <div class="footer-statement-redirect-wrapper max-w-screen-md mx-auto flex flex-row justify-center flex-wrap p-4 gap-y-3 md:gap-0">
        <?php
          if ( have_rows( 'theme_footer_redirection_pages' , 'options' ) ):
            $theme_footer_redirection_pages_count = 1;
            while( have_rows( 'theme_footer_redirection_pages' , 'options' ) ) : the_row();
              $theme_footer_redirection_page_name             = get_sub_field('theme_footer_redirection_page_name' , 'options' );
              $theme_footer_redirection_page_link             = get_sub_field('theme_footer_redirection_page_link' , 'options' );
              ?>

              <div class="footer-bottom-redirect-page-<?php echo $theme_footer_redirection_pages_count++ ?> footer-bottom-redirect-page flex flex-col items-center uppercase mr-4 height-3 leading-3 pr-2 md:pr-4 border-r-2 border-r-white">
                <a href="<?php echo $theme_footer_redirection_page_link ?>"><?php echo $theme_footer_redirection_page_name ?></a>
              </div>

            <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>

      <hr class="custom-gray-h-bar bg-customGrey-200 opacity-10">

      <div class="footer-bottom-socials-wrapper max-w-screen-md mx-auto flex flex-col lg:flex-row justify-center items-center pt-4 pb-12">
        <h6 class="footer-bottom-socials-title font-semibold p-0 md:pr-6 mb-8 md:mb-0"><?php echo $theme_footer_socials_title ?></h6>
        <div class="footer-bottom-socials-wrapper flex">
            <?php
          if ( have_rows( 'theme_footer_socials_repeater' , 'options' ) ):
          while( have_rows( 'theme_footer_socials_repeater' , 'options' ) ) : the_row();
            $theme_footer_socials_image             = get_sub_field('theme_footer_socials_image' , 'options' );
            $theme_footer_socials_link              = get_sub_field('theme_footer_socials_link' , 'options' );
            ?>
          <div class="footer-bottom-socials-unit flex flex-col items-center">
            <a class="px-4" href="<?php echo $theme_footer_socials_link ?>"><img class="footer-bottom-socials-image h-5 w-5" src="<?php echo $theme_footer_socials_image ?>" alt="footer-bottom-socials-image"></a>
          </div>
          <?php
          endwhile;
          endif;
            ?>
        </div>

      </div>

    </div>
  </footer>
   <?php
   }  // your field group key


