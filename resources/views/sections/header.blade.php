<header class="banner">

  <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="w-full md:max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' );

            if ( has_custom_logo() ) {
              echo '<a href="'.site_url().'" class="hidden md:flex md:items-center" ><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="h-12 mr-3"></a>';
            } else {
              echo '<a href="'.site_url().'"><h1>'. get_bloginfo( 'name' ) .'</h1></a>';
            }
            ?>
      <div class="w-full md:max-w-fit flex items-center justify-between md:order-1" id="navbar-sticky">
        <?php wp_nav_menu( array( 'theme_location' => 'primary_navigation' ) ); ?>
      </div>

      <div class="hidden md:flex md:order-2">
        <button class="relative inline-flex items-center justify-center p-0.5 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
          <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
              Sign In
          </span>
        </button>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
      </div>

      <div id="mobile-menu-cta-section" class="hidden md:hidden p-3 mt-auto z-10 bg-white shadow-inner">
        <div class="flex flex-col items-center pb-10">
          <h5 class="mb-1 text-xl font-medium text-white dark:text-white">RFB Legal</h5>
          <span class="text-sm text-gray-500 dark:text-gray-400">Contact Us +(741) 674 322 091</span>
          <div class="flex mt-4 md:mt-6">
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Call now!</a>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700 ms-3">Request a meeting</a>
          </div>
        </div>
      </div>

    </div>
  </nav>

</header>
