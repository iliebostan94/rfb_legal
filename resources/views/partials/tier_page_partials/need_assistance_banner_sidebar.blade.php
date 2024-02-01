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
  $need_legal_assistance_full_form_subtitle        = get_field('need_legal_assistance_full_form_subtitle', 'options');
  $need_legal_assistance_full_form_address         = get_field('need_legal_assistance_full_form_address', 'options');

  ?>

<section class="need_assistance_banner_sidebar mb-10">
  <div class="max-w-sm p-6 m-auto flex flex-col justify-between gradientBlueBackground md:rounded-lg">
    <div class="text-left mb-6">
      <h2 class="text-2xl font-medium title-font text-customGrey-200">Need Legal Assistance on
        <?php single_post_title(); ?>?
      </h2>
      <div class="w-full mt-6 ">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
    </div>
    <div class="flex flex-col justify-center max-w-full">
      <div
        class="w-full flex flex-col flex-wrap gap-2 justify-center items-center contact-info-unit mb-6 bg-cloudBlue bg-opacity-10 py-4 rounded-2xl">
        <img class="w-10 h-10 mr-2" src="<?php echo $need_legal_assistance_full_phone_icon ?>"
          alt="footer-logo-unit-image">
        <p class="leading-relaxed text-white text-base font-normal">
          <?php echo $need_legal_assistance_full_phone_title ?>
        </p>
        <a href="tel:<?php echo str_replace(' ', '', $need_legal_assistance_full_phone_number); ?>"
          class="text-lg font-semibold leading-relaxed text-white">
          <?php echo $need_legal_assistance_full_phone_number ?>
        </a>
      </div>

      <div
        class="w-full flex flex-col flex-wrap gap-2 justify-center items-center contact-info-unit mb-6 bg-cloudBlue bg-opacity-10 py-4 rounded-2xl">
        <img class="w-10 h-10 mr-2" src="<?php echo $need_legal_assistance_full_email_icon ?>"
          alt="footer-logo-unit-image">
        <p class="leading-relaxed text-white text-base font-normal">
          <?php echo $need_legal_assistance_full_email_title ?>
        </p>
        <a href="mailto:<?php echo str_replace(' ', '', $need_legal_assistance_full_email_address); ?>"
          class="text-lg font-semibold leading-relaxed text-white">
          <?php echo $need_legal_assistance_full_email_address ?>
        </a>
      </div>

      <div
        class="w-full flex flex-col flex-wrap gap-2 justify-center items-center contact-info-unit mb-6 bg-cloudBlue bg-opacity-10 py-4 rounded-2xl">
        <img class="w-10 h-10 mr-2" src="<?php echo $need_legal_assistance_full_form_icon ?>"
          alt="footer-logo-unit-image">
        <p class="leading-relaxed text-white text-base font-normal">
          <?php echo $need_legal_assistance_full_form_title ?>
        </p>
        <a href="<?php echo $need_legal_assistance_full_form_address ?>"
          class="text-lg font-semibold leading-relaxed text-white"><?php echo $need_legal_assistance_full_form_subtitle ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php
}  // your field group key
?>
