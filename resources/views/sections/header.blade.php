<header class="banner">

  <nav class="bg-white fixed w-full z-20 top-0 left-0 border-b border-gray-200">
    <div class="w-full md:max-w-screen-xl flex flex-wrap items-center mx-auto">

            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );

            if ( has_custom_logo() ) {
              echo '<a href="'.site_url().'" class="hidden md:flex md:items-center" ><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="h-12 mr-3"></a>';
            } else {
              echo '<a href="'.site_url().'"><h1>'. get_bloginfo( 'name' ) .'</h1></a>';
            }
            ?>
      <div class="w-full md:max-w-fit flex items-center justify-between md:order-1 pt-10 pb-3 md:pt-0 md:pb-0 md:ml-auto shadow-md md:shadow-none" id="navbar-sticky">
        <?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ); ?>
        @include('components.main-menu-search-modal')
      </div>

      <div class="hidden md:flex md:order-2">
        <button onclick="location.href='/contact-us/'" class="inline-flex justify-center items-center py-3 px-6 text-base font-semibold text-center text-white rounded-full getInTouch hover:bg-gray-900">
          <a href="/contact-us/"
             class="">
            Contact Us
          </a>
          <img src="/wp-content/themes/rfb-legal/resources/images/footer-mail-gold-icon.svg" class="ml-3" alt="footer cta call icon">
        </button>
      </div>

      <div id="mobile-menu-cta-section" class="hidden md:hidden p-6 pt-14 mt-auto z-10 bg-cloudGrey shadow-inner -ml-6 -mr-6">
        <div class="flex flex-col items-center gap-5">

          <div class="mobile-menu-email-secret-wrapper">
            <span class="text-base font-normal text-black mb-0">Send Us Email</span>
            <button onclick="location.href='mailto:info@rfblegal.co.uk'" class="inline-flex justify-center items-center py-3 px-8 text-base tracking-[0.015em] font-semibold leading-5 text-center text-white rounded-full getInTouch hover:bg-gray-900">
              <img src="/wp-content/themes/rfb-legal/resources/images/footer-mail-gold-icon.svg" class="mr-2.5" alt="footer cta mail icon">
              <a href="mailto:info@rfblegal.co.uk"  class="">info@rfblegal.co.uk</a>
            </button>
          </div>

          <div class="mobile-menu-call-secret-wrapper">
            <span class="text-base font-normal text-black mb-0">Give Us a Call</span>
            <button onclick="location.href='tel:+44(0)2076131402'" class="inline-flex justify-center items-center py-3 px-8 text-base tracking-[0.015em] font-semibold leading-5 text-center text-white rounded-full getInTouch hover:bg-gray-900">
              <img src="/wp-content/themes/rfb-legal/resources/images/footer-call-gold-icon.svg" class="mr-2.5" alt="footer cta call icon">
              <a href="tel:+44(0)2076131402"  class="">+44 (0) 20 7613 1402</a>
            </button>
          </div>

          <div class="mobile-menu-socials-secret-wrapper">
            <span class="text-base font-normal text-black mb-0">Talk to us on social media</span>

            <div class="flex p-0 space-x-4">
              <a  href="https://www.linkedin.com/" class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary"
                  rel="noopener"
                  aria-label="RFB on Linkedin"
                  target="_blank"
              >
                <img src="/wp-content/themes/rfb-legal/resources/images/Linkedin_social_mobile.svg" class="" alt="mobile Linkedin social icon">
              </a>

              <a  href="https://www.instagram.com/" class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary"
                  rel="noopener"
                  aria-label="RFB Instagram"
                  target="_blank"
              >
                <img src="/wp-content/themes/rfb-legal/resources/images/Instagram_social_mobile.svg" class="" alt="mobile Instagram social icon">
              </a>

              <a href="https://www.facebook.com/" class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary"
                 rel="noopener"
                 aria-label="RFB Facebook"
                 target="_blank"
              >
                <img src="/wp-content/themes/rfb-legal/resources/images/Facebook_social_mobile.svg" class="" alt="mobile Facebook social icon">
              </a>

              <a  href="https://www.youtube.com/channel/UCVdsYGNjyt8UpeSsIAyH1fg" class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary"
                rel="noopener"
                aria-label="RFB Legal on Youtube"
                target="_blank"
              >
                <img src="/wp-content/themes/rfb-legal/resources/images/Youtube_social_mobile.svg" class="" alt="mobile Youtube social icon">
              </a>
              </div>

          </div>
        </div>
      </div>

    </div>
  </nav>

</header>
