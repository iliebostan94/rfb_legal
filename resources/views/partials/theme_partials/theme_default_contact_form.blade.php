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
<<<<<<< HEAD
<section class="theme_default_contact_form_section bg-cloudGrey body-font text-black">
=======
<section class="bg-customGrey-200 body-font text-black">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
  <style>
    .getInTouch {
      background-image: linear-gradient(45deg, #142C50 0%, #00317E 90%, #00317E 100%)
    }
  </style>
<<<<<<< HEAD
  <div class="max-w-5xl px-4 py-10 lg:py-72px mx-auto flex flex-wrap items-center">
    <div class="content_wrapper lg:max-w-3/5 md:w-1/2 w-full md:pr-16 lg:pr-0 pr-0">
      <h2 class="font-semibold text-32px lg:text-40px text-brandBlue">
        <?php echo $theme_contact_form_section_title ?>
      </h2>
      <div class="w-full my-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="leading-relaxed mb-6 lg:mb-10 text-darkGrey">
        <?php echo $theme_contact_form_section_subtitle ?>
      </p>
      <div class="w-full flex lg:flex-row flex-col justify-center md:justify-start gap-4 md:gap-6">
        <a href="<?php echo $theme_contact_form_section_first_button_link; ?>"
          class="inline-flex lg:w-56 justify-center items-center py-2 lg:py-3 px-4 font-medium text-lg text-center text-white rounded-full border bg-gradient-to-r getInTouch hover:bg-gray-900">
          <?php echo $theme_contact_form_section_first_button; ?>
        </a>
        <a href="<?php echo $theme_contact_form_section_second_button_link; ?>"
          class="text-customGrey-700 lg:w-56 text-center font-medium text-lg border py-2 lg:py-3 px-4 border-brandBlue focus:outline-none hover:bg-lightBlue rounded-full">
=======
  <div class="max-w-5xl px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:max-w-3/5 md:w-1/2 w-full md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-brandBlue">
        <?php echo $theme_contact_form_section_title ?>
      </h1>
      <div class="w-full my-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="leading-relaxed my-6 text-darkGrey">
        <?php echo $theme_contact_form_section_subtitle ?>
      </p>
      <div class="w-full flex lg:flex-row flex-col justify-center md:justify-start gap-4 lg:gap-6 md:gap-6">
        <a href="<?php echo $theme_contact_form_section_first_button_link; ?>"
          class="inline-flex justify-center items-center py-3 px-12 font-medium text-lg leading-8 text-center text-white rounded-full border bg-gradient-to-r getInTouch hover:bg-gray-900">
          <?php echo $theme_contact_form_section_first_button; ?>
        </a>
        <a href="<?php echo $theme_contact_form_section_second_button_link; ?>"
          class="text-customGrey-700 text-center font-medium text-lg leading-8 border py-3 px-9 border-brandBlue focus:outline-none  hover:bg-lightBlue rounded-full">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
          <?php echo $theme_contact_form_section_second_button; ?>
        </a>
      </div>
    </div>

<<<<<<< HEAD
    <div class="form_wrapper lg:w-2/5 md:w-1/2 w-full bg-white rounded-lg p-8 flex flex-col md:ml-auto mt-10 md:mt-0">

=======
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
      {{-- FORM SHORTCODE GOES HERE >>>--}}
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>
      <div class="relative mb-4">
        <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
        <input type="text" id="full-name" name="full-name"
          class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email"
          class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button
        class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
      <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p>
      <?php echo $theme_contact_form_shortcode; ?>
    </div>
  </div>
</section>
<?php
}  // your field group key
?>