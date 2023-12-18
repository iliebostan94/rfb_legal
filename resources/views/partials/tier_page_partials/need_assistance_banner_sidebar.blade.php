
<?php
$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

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

<section class="need_assistance_banner_sidebar">
  <div class="max-w-sm p-3 m-auto flex flex-col justify-between bg-black rounded-lg">
    <div class="text-center mb-6">
      <h2 class="text-2xl font-medium title-font text-customGrey-200">Need Legal Assistance on <?php single_post_title(); ?>?</h2>
    </div>
    <div class="flex flex-col justify-center max-w-full">
      <div class="w-full flex flex-row flex-wrap contact-info-unit mb-6">
        <img class="w-10 h-10 mr-2" src="<?php echo $need_legal_assistance_full_phone_icon ?>" alt="footer-logo-unit-image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal"><?php echo $need_legal_assistance_full_phone_title ?></p>
        <a href="tel:<?php echo $need_legal_assistance_full_phone_number ?>" class="text-sm md:text-xl leading-relaxed text-gray-300"><?php echo $need_legal_assistance_full_phone_number ?></a>
      </div>

      <div class="w-full flex flex-row flex-wrap contact-info-unit mb-6">
        <img class="w-10 h-10 mr-2" src="<?php echo $need_legal_assistance_full_email_icon ?>" alt="footer-logo-unit-image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal "><?php echo $need_legal_assistance_full_email_title ?></p>
        <a href="mailto:<?php echo $need_legal_assistance_full_email_address ?>" class="text-sm md:text-xl leading-relaxed text-gray-300"><?php echo $need_legal_assistance_full_email_address ?></a>
      </div>

      <div class="w-full flex flex-row flex-wrap contact-info-unit mb-3">
        <img class="w-10 h-10 mr-2" src="<?php echo $need_legal_assistance_full_form_icon ?>" alt="footer-logo-unit-image">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal "><?php echo $need_legal_assistance_full_form_title ?></p>
        <a href="tel:<?php echo $need_legal_assistance_full_form_address ?>" class="text-sm md:text-xl leading-relaxed text-gray-300">Submit Request</a>
      </div>
    </div>

  </div>
</section>

  <?php
}  // your field group key
?>
