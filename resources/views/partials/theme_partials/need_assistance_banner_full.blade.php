
<?php
$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

  $need_legal_assistance_full_title                = get_field('need_legal_assistance_full_title', 'options');
  $need_legal_assistance_full_phone_title          = get_field('need_legal_assistance_full_phone_title', 'options');
  $need_legal_assistance_full_phone_icon           = get_field('need_legal_assistance_full_phone_icon', 'options');
  $need_legal_assistance_full_phone_number         = get_field('need_legal_assistance_full_phone_number', 'options');
  $need_legal_assistance_full_email_title          = get_field('need_legal_assistance_full_email_title', 'options');
  $need_legal_assistance_full_email_icon           = get_field('need_legal_assistance_full_email_icon', 'options');
  $need_legal_assistance_full_email_address        = get_field('need_legal_assistance_full_email_address', 'options');
  $need_legal_assistance_full_form_title           = get_field('need_legal_assistance_full_form_title', 'options');
  $need_legal_assistance_full_form_icon            = get_field('need_legal_assistance_full_form_icon', 'options');
  $need_legal_assistance_full_form_address         = get_field('need_legal_assistance_full_form_address', 'options');

  ?>

<section class="py-8 md:py-20">
  <div class="max-w-7xl p-6 md:p-16 mx-auto flex justify-between flex-col bg-black rounded-lg">
    <div class="flex flex-col max-w-full md:mb-0 mb-6 text-center">
      <h2 class="md:text-4xl text-2xl font-medium title-font text-gray-300"><?php echo $need_legal_assistance_full_title ?></h2>
    </div>
    <div class="flex flex-col md:flex-row justify-center max-w-full">
      <div class="flex flex-col justify-center items-baseline content-center flex-wrap contact-info-unit md:w-1/3">
        <img class="footer-logo-unit-image h-full w-14 mr-4" src="<?php echo $need_legal_assistance_full_phone_icon ?>" alt="footer-logo-unit-image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal"><?php echo $need_legal_assistance_full_phone_title ?></p>
        <a href="tel:<?php echo $need_legal_assistance_full_phone_number ?>" class="flex justify-center items-center text-sm md:text-lg lg:text-2xl leading-relaxed text-gray-300"><?php echo $need_legal_assistance_full_phone_number ?></a>
      </div>

      <div class="flex flex-col justify-center items-baseline content-center flex-wrap contact-info-unit md:w-1/3">
        <img class="footer-logo-unit-image h-full w-14 mr-4" src="<?php echo $need_legal_assistance_full_email_icon ?>" alt="footer-logo-unit-image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal "><?php echo $need_legal_assistance_full_email_title ?></p>
        <a href="mailto:<?php echo $need_legal_assistance_full_email_address ?>" class="flex justify-center items-center  text-sm md:text-lg lg:text-2xl leading-relaxed text-gray-300"><?php echo $need_legal_assistance_full_email_address ?></a>
      </div>

      <div class="flex flex-col justify-center items-baseline content-center flex-wrap contact-info-unit md:w-1/3">
        <img class="footer-logo-unit-image h-full w-14 mr-4" src="<?php echo $need_legal_assistance_full_form_icon ?>" alt="footer-logo-unit-image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal "><?php echo $need_legal_assistance_full_form_title ?></p>
        <a href="tel:<?php echo $need_legal_assistance_full_form_address ?>" class="flex justify-center items-center  text-sm md:text-lg lg:text-2xl leading-relaxed text-gray-300">Submit Request</a>
      </div>
    </div>

  </div>
</section>

  <?php
}  // your field group key
?>
