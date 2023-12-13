{{--<footer class="content-info">--}}
{{--  @php(dynamic_sidebar('sidebar-footer'))--}}
{{--</footer>--}}

<?php

   $group = acf_get_field_group('group_65782389a5f9e'); // your field group key
   if ($group['active']) {

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

  <footer class="bg-customDarkGrey-700">
    <div class="container p-0 mx-auto text-white">
      <div class="footer-cta-wrapper flex flex-col lg:flex-row justify-center p-4 md:p-6 lg:p-12">
          <div class="footer-cta-unit flex flex-col justify-center">
            <p><?php echo $give_us_a_call_text ?></p>
            <a href="<?php echo $give_us_a_call_phone; ?>" class="text-white text-base font-medium text-center bg-transparent border py-3 px-5 border-gray-300 focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-lg ">
                <?php echo $give_us_a_call_phone; ?>
            </a>
          </div>
        <div class="footer-cta-unit flex flex-col justify-center">
          <p><?php echo $send_us_email_text ?></p>
          <a href="<?php echo $send_us_email_address; ?>" class="text-white text-base font-medium text-center bg-transparent border py-3 px-5 border-gray-300 focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-lg ">
              <?php echo $send_us_email_address; ?>
          </a>
        </div>
        <div class="footer-cta-unit flex flex-col justify-center">
          <p><?php echo $contact_enquiry_form_text ?></p>
          <a href="/contact-us/" class="text-white text-base font-medium text-center bg-transparent border py-3 px-5 border-gray-300 focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-lg ">
              Submit Request
          </a>
        </div>
      </div>

      <hr class="custom-gray-h-bar bg-customGrey-200 opacity-10">

      <div class="footer-offices-wrapper flex flex-col lg:flex-row justify-center p-4 md:p-6 lg:p-12">
        <div class="footer-office-unit">
            <?php echo $theme_footer_first_office ?>
        </div>
        <div class="footer-office-unit">
            <?php echo $theme_footer_second_office ?>
        </div>
        <div class="footer-office-unit">
            <?php echo $theme_footer_third_office ?>
        </div>
        <div class="footer-office-unit">
            <?php echo $theme_footer_forth_office ?>
        </div>
      </div>

      <hr class="custom-gray-h-bar bg-customGrey-200 opacity-10">

      <div class="footer-logos-wrapper max-w-screen-lg mx-auto text-center flex flex-col lg:flex-row justify-center p-4 md:p-6 lg:p-12">
          <?php
          if ( have_rows( 'theme_footer_logos_repeater' , 'options' ) ):
            $theme_footer_logos_count = 1;
            while( have_rows( 'theme_footer_logos_repeater' , 'options' ) ) : the_row();
              $theme_footer_logo_image             = get_sub_field('theme_footer_logo_image' , 'options');
              ?>
              <div class="footer-logo-unit-<?php echo $theme_footer_logos_count++ ?> flex flex-col items-center basis-1/2 py-4 md:py-0 md:basis-full ">
                <img class="footer-logo-unit-image h-14 w-14" src="<?php echo $theme_footer_logo_image ?>" alt="footer-logo-unit-image">
              </div>
              <?php
            endwhile;
            endif;
              ?>
      </div>

      <hr class="custom-gray-h-bar bg-customGrey-200 opacity-10 ">

      <div class="footer-statement-wrapper max-w-screen-lg mx-auto text-center p-4 md:p-6 lg:p-6">
        <div class="footer-first-statement">
            <?php echo $theme_footer_contact_first_statement ?>
        </div>
        <div class="footer-statement-sra-img-wrapper flex justify-center p-4">
          <img class="footer-logo-unit-image h-14 w-24" src="<?php echo $theme_footer_sra_logo ?>" alt="footer-statement-sra-img">
        </div>
        <div class="footer-second-statement max-w-screen-md mx-auto">
            <?php echo $theme_footer_contact_second_statement ?>
        </div>

        <div class="footer-statement-redirect-wrapper max-w-screen-md mx-auto flex flex-col lg:flex-row justify-center p-4 md:p-6 lg:p-12">
        <?php
          if ( have_rows( 'theme_footer_redirection_pages' , 'options' ) ):
            $theme_footer_redirection_pages_count = 1;
            while( have_rows( 'theme_footer_redirection_pages' , 'options' ) ) : the_row();
              $theme_footer_redirection_page_name             = get_sub_field('theme_footer_redirection_page_name' , 'options' );
              $theme_footer_redirection_page_link             = get_sub_field('theme_footer_redirection_page_link' , 'options' );
              ?>

              <div class="footer-bottom-redirect-page-<?php echo $theme_footer_redirection_pages_count++ ?> flex flex-col items-center basis-1/2 py-4 md:py-0 md:basis-full ">
                <a href="<?php echo $theme_footer_redirection_page_link ?>"><?php echo $theme_footer_redirection_page_name ?></a>
              </div>

            <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>

      <hr class="custom-gray-h-bar bg-customGrey-200 opacity-10">

      <div class="footer-bottom-socials-wrapper max-w-screen-md mx-auto flex flex-row justify-center pt-4 pb-12">
        <p class="footer-bottom-socials-title pr-6"><?php echo $theme_footer_socials_title ?></p>
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
  </footer>
   <?php
   }  // your field group key


