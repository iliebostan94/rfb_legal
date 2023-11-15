

<?php
$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

$call_to_action_group = get_field('call_to_action_group', 'options');

    if ( have_rows('call_to_action_group', 'options') ):
    while( have_rows('call_to_action_group', 'options') ) : the_row();

        $call_to_action_title = get_sub_field('call_to_action_title', 'options');
        $call_to_action_subtitle = get_sub_field('call_to_action_subtitle', 'options');

    ?>
        <section class="bg-gradient-to-b from-sky-50 to-blue-300 dark:bg-gray-900 py-24 lg:py-36">
          <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white"><?php echo $call_to_action_title; ?></h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400"><?php echo $call_to_action_subtitle; ?></p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
              <a href="#" class="cta-btn inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 ">
                Start for free
                <svg class="cta-btn-arrow-right w-3.5 h-3.5 ml-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
              </a>
            </div>
          </div>
        </section>


<?php
endwhile;
endif;
}  // your field group key
?>

