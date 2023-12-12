
<?php

$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

  $theme_contact_form_section_title                 = get_field('theme_contact_form_section_title', 'options');
  $theme_contact_form_section_subtitle              = get_field('theme_contact_form_section_subtitle', 'options');

  $theme_contact_form_section_first_button          = get_field('theme_contact_form_section_first_button', 'options');
  $theme_contact_form_section_first_button_link     = get_field('theme_contact_form_section_first_button_link', 'options');
  $theme_contact_form_section_second_button         = get_field('theme_contact_form_section_second_button', 'options');
  $theme_contact_form_section_second_button_link    = get_field('theme_contact_form_section_second_button_link', 'options');
  $theme_contact_form_shortcode                     = get_field('theme_contact_form_shortcode', 'options');
  ?>
<section class="bg-customGrey-200 body-font text-black">
  <div class="max-w-5xl px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:max-w-3/5 md:w-1/2 w-full md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900"><?php echo $theme_contact_form_section_title ?></h1>
      <p class="leading-relaxed my-6"><?php echo $theme_contact_form_section_subtitle ?></p>
      <div class="w-full flex flex-row justify-center md:justify-start space-x-4">
        <a href="<?php echo $theme_contact_form_section_first_button_link; ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border bg-customGrey-700 hover:bg-gray-900 rounded-lg ">
            <?php echo $theme_contact_form_section_first_button; ?>
        </a>
        <a href="<?php echo $theme_contact_form_section_second_button_link; ?>" class="text-customGrey-700 text-base font-medium text-center bg-transparent border py-3 px-5 border-customGrey-700 focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 rounded-lg">
            <?php echo $theme_contact_form_section_second_button; ?>
        </a>
      </div>
    </div>
    <div class="lg:w-2/5 md:w-1/2 w-full bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto mt-10 md:mt-0">

{{--      FORM SHORTCODE GOES HERE >>>--}}
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>
      <div class="relative mb-4">
        <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
        <input type="text" id="full-name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
      <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
      <?php echo $theme_contact_form_shortcode; ?>
    </div>
  </div>
</section>
  <?php
}  // your field group key
?>
