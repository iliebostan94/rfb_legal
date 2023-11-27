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
        <div class="flex flex-col items-center">
          <span class="text-sm text-gray-500 dark:text-gray-400">+44 (0) 20 7613 1402</span>
          <div class="flex mt-3">
            <a href="#" class="inline-flex items-center px-10 py-2 text-sm font-medium text-center text-white bg-gray-600 border rounded-lg focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Get in Touch</a>
          </div>
          <p class="mt-3 text-base font-medium text-grey dark:text-white">Talk to us on social media</p>
          <div class="flex p-4 pb-0 space-x-4">

            <a href="https://www.facebook.com/" class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68128C13.6348 6.78301 13.8881 6.17085 15.2029 6.17085L16.877 6.17017V3.39424C16.5875 3.35733 15.5937 3.27273 14.437 3.27273C12.0216 3.27273 10.368 4.71881 10.368 7.37391V9.66246H7.63636V12.766H10.368V20.7273H13.6348Z" fill="currentColor"/>
                <mask id="mask0_3320_6483" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="7" y="3" width="10" height="18">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6348 20.7273V12.766H16.3582L16.7668 9.66246H13.6348V7.68128C13.6348 6.78301 13.8881 6.17085 15.2029 6.17085L16.877 6.17017V3.39424C16.5875 3.35733 15.5937 3.27273 14.437 3.27273C12.0216 3.27273 10.368 4.71881 10.368 7.37391V9.66246H7.63636V12.766H10.368V20.7273H13.6348Z" fill="white"/>
                </mask>
                <g mask="url(#mask0_3320_6483)">
                </g>
              </svg>
            </a>

            <a
              class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary"
              href="https://www.instagram.com/"
              rel="noopener"
              aria-label="RFB Instagram"
              target="_blank"
            >
              <svg class="w-6 h-6 overflow-visible fill-current" alt="" aria-hidden="true" viewBox="0 0 140 140" xmlns="http://www.w3.org/2000/svg">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M73.1735 2C89.9405 2 92.3831 2.0897 99.4487 2.414C106.79 2.7521 111.807 3.9182 116.195 5.6225C120.801 7.35353 124.973 10.0686 128.422 13.5782C131.931 17.0266 134.646 21.1993 136.378 25.805C138.082 30.1934 139.248 35.2097 139.586 42.5513C139.917 49.9136 140 52.2596 140 71V71.552C140 89.7887 139.917 92.1623 139.586 99.4487C139.248 106.79 138.082 111.807 136.378 116.195C134.646 120.801 131.931 124.973 128.422 128.422C124.973 131.931 120.801 134.646 116.195 136.378C111.807 138.082 106.79 139.248 99.4487 139.586C92.0864 139.917 89.7404 140 71 140H70.448C52.2113 140 49.8377 139.917 42.5513 139.586C35.2097 139.248 30.1934 138.082 25.805 136.378C21.1993 134.646 17.0266 131.931 13.5782 128.422C10.0686 124.973 7.35353 120.801 5.6225 116.195C3.9182 111.807 2.7521 106.79 2.414 99.4487C2.0897 92.3831 2 89.9336 2 73.1735V68.8265C2 52.0595 2.0897 49.6169 2.414 42.5513C2.7521 35.2097 3.9182 30.1934 5.6225 25.805C7.35353 21.1993 10.0686 17.0266 13.5782 13.5782C17.0266 10.0686 21.1993 7.35353 25.805 5.6225C30.1934 3.9182 35.2097 2.7521 42.5513 2.414C49.6169 2.0897 52.0664 2 68.8265 2H73.1735V2ZM72.6146 14.4338H69.3854C52.439 14.4338 50.1758 14.5097 43.1171 14.834C36.3896 15.1445 32.7395 16.2623 30.3038 17.2076C27.0815 18.4634 24.7838 19.9538 22.3688 22.3688C19.9538 24.7838 18.4634 27.0815 17.2076 30.3038C16.2623 32.7395 15.1376 36.3896 14.834 43.1171C14.5097 50.1758 14.4338 52.439 14.4338 69.3854V72.6146C14.4338 89.561 14.5097 91.8242 14.834 98.8829C15.1445 105.61 16.2623 109.261 17.2076 111.696C18.4634 114.912 19.9607 117.216 22.3688 119.631C24.7838 122.046 27.0815 123.537 30.3038 124.792C32.7395 125.738 36.3896 126.862 43.1171 127.166C50.3897 127.497 52.5701 127.566 71 127.566H71.552C89.4713 127.566 91.6793 127.497 98.876 127.166C105.61 126.855 109.261 125.738 111.696 124.792C114.912 123.537 117.216 122.046 119.631 119.631C122.046 117.216 123.537 114.919 124.792 111.696C125.738 109.261 126.862 105.61 127.166 98.8829C127.497 91.6034 127.566 89.4299 127.566 71V70.448C127.566 52.5287 127.497 50.3207 127.166 43.124C126.855 36.3896 125.738 32.7395 124.792 30.3038C123.687 27.3062 121.923 24.5947 119.631 22.3688C117.405 20.077 114.694 18.3134 111.696 17.2076C109.261 16.2623 105.61 15.1376 98.8829 14.834C91.8242 14.5097 89.561 14.4338 72.6146 14.4338ZM71 35.5685C75.6529 35.5685 80.2603 36.485 84.559 38.2656C88.8578 40.0462 92.7637 42.656 96.0539 45.9461C99.344 49.2363 101.954 53.1422 103.734 57.441C105.515 61.7397 106.432 66.3471 106.432 71C106.432 75.6529 105.515 80.2603 103.734 84.559C101.954 88.8578 99.344 92.7637 96.0539 96.0539C92.7637 99.344 88.8578 101.954 84.559 103.734C80.2603 105.515 75.6529 106.432 71 106.432C61.603 106.432 52.5908 102.699 45.9461 96.0539C39.3015 89.4092 35.5685 80.397 35.5685 71C35.5685 61.603 39.3015 52.5908 45.9461 45.9461C52.5908 39.3015 61.603 35.5685 71 35.5685V35.5685ZM71 48.0023C64.9006 48.0023 59.0511 50.4253 54.7382 54.7382C50.4253 59.0511 48.0023 64.9006 48.0023 71C48.0023 77.0994 50.4253 82.9489 54.7382 87.2618C59.0511 91.5747 64.9006 93.9977 71 93.9977C77.0994 93.9977 82.9489 91.5747 87.2618 87.2618C91.5747 82.9489 93.9977 77.0994 93.9977 71C93.9977 64.9006 91.5747 59.0511 87.2618 54.7382C82.9489 50.4253 77.0994 48.0023 71 48.0023V48.0023ZM107.832 25.8878C110.028 25.8878 112.134 26.7602 113.687 28.313C115.24 29.8658 116.112 31.9718 116.112 34.1678C116.112 36.3638 115.24 38.4698 113.687 40.0226C112.134 41.5754 110.028 42.4478 107.832 42.4478C105.636 42.4478 103.53 41.5754 101.977 40.0226C100.425 38.4698 99.5522 36.3638 99.5522 34.1678C99.5522 31.9718 100.425 29.8658 101.977 28.313C103.53 26.7602 105.636 25.8878 107.832 25.8878Z"
                ></path>
              </svg>
            </a>

              <a
                class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary"
                href="https://www.linkedin.com/in/arielcerdahernandez/"
                rel="noopener"
                aria-label="Ariel Cerda on Linkedin"
                target="_blank"
              >
                <svg class="w-6 h-6 overflow-visible fill-current" alt="" aria-hidden="true" viewBox="0 0 140 140">
                  <path
                    d="M23.4 44.59h-4.75a12.76 12.76 0 00-9.73 2.19 9.44 9.44 0 00-2.35 7.12V131a9.08 9.08 0 002.3 7 9.24 9.24 0 006.82 2c2.22 0 4.15-.21 8.24-.06a12 12 0 009.25-2 9.1 9.1 0 002.29-7V53.9a9.44 9.44 0 00-2.34-7.12 12.68 12.68 0 00-9.73-2.19zM21 0A16.19 16.19 0 005.09 15.6 16.52 16.52 0 0021 31.86 16.12 16.12 0 0037 15.6 16.18 16.18 0 0021 0zM99.74 43.63a31.09 31.09 0 00-20.93 6.3A7.25 7.25 0 0077 46.34a6.08 6.08 0 00-4.52-1.78 119.08 119.08 0 00-15 .3c-4.16.84-6.18 3.79-6.18 9V131a9.14 9.14 0 002.28 7 12.06 12.06 0 009.26 2c4.47-.17 5.74.06 8.22.06a9.26 9.26 0 006.83-2 9.12 9.12 0 002.3-7V89.88A12.48 12.48 0 0192.93 76 12.44 12.44 0 01106 89.88V131a9.1 9.1 0 002.29 7 12 12 0 009.24 2c1.83-.07 4-.07 5.8 0a12.09 12.09 0 009.26-2 9.14 9.14 0 002.28-7V78.32a33.07 33.07 0 00-35.13-34.69z"
                  ></path>
                </svg>
              </a>

              <a
                class="p-1 -m-1 text-gray-400 hover:text-amber-500 focus:outline-none focus-visible:ring-2 ring-primary"
                href="https://www.youtube.com/channel/UCWip2TrjNMXb0kg6LWbsNzw?sub_confirmation=1"
                rel="noopener"
                aria-label="Ariel Cerda on Youtube"
                target="_blank"
              >
                <svg class="w-6 h-6 overflow-visible fill-current" alt="" aria-hidden="true" viewBox="0 0 140 140">
                  <path
                    d="M115 15H25A25 25 0 000 40v60a25 25 0 0025 25h90a25 25 0 0025-25V40a25 25 0 00-25-25zM95.71 76.25L63.58 94.1A7.15 7.15 0 0153 87.85v-35.7a7.15 7.15 0 0110.6-6.26l32.11 17.86a7.15 7.15 0 010 12.5z"
                  ></path>
                </svg>
              </a>
          </div>
        </div>
      </div>

    </div>
  </nav>

</header>
