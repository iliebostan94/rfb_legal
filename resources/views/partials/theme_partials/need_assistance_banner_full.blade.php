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
  $need_legal_assistance_full_form_subtitle        = get_field('need_legal_assistance_full_form_subtitle', 'options');
  $need_legal_assistance_full_form_address         = get_field('need_legal_assistance_full_form_address', 'options');

  ?>

<section class="need_assistance_banner_full flex justify-center gradientBlueBackground py-12 lg:py-16">
  <div class="p-0 flex lg:flex-row flex-col max-w-screen-xl gap-3 lg:gap-10 items-center">
    <div class="flex flex-col mb-0 lg:mb-6 text-left lg:w-1/3 w-full">
      <h2 class="md:text-4xl text-2xl font-medium title-font text-white w-full">
        <?php echo $need_legal_assistance_full_title ?>
      </h2>
      <div class="w-full my-6 ">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
    </div>

    <div class=" flex lg:flex-row flex-col gap-6  lg:w-2/3 w-full">
      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl p-4 flex flex-col items-center lg:w-1/3 w-full">
        <img class="w-6 mb-2" src="<?php echo $need_legal_assistance_full_phone_icon ?>" alt="call-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2  text-center">
          <?php echo $need_legal_assistance_full_phone_title ?>
        </p>
        <a href="tel:<?php echo str_replace(' ', '', $need_legal_assistance_full_phone_number); ?>"
          class=" flex justify-center items-center font-bold text-lg md:text-2xl lg:text-lg xl:text-2xl leading-relaxed text-white text-center">
          <?php echo $need_legal_assistance_full_phone_number ?>
        </a>
      </div>

      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl p-4 flex flex-col items-center lg:w-1/3">
        <img class="w-6 mb-2" src="<?php echo $need_legal_assistance_full_email_icon ?>" alt="email-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2  text-center">
          <?php echo $need_legal_assistance_full_email_title ?>
        </p>
        <a href="mailto:<?php echo str_replace(' ', '', $need_legal_assistance_full_phone_number); ?>"
          class=" flex justify-center items-center font-bold text-lg md:text-2xl lg:text-lg xl:text-2xl leading-relaxed text-white text-center ">
          <?php echo $need_legal_assistance_full_email_address ?>
        </a>
      </div>

      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl p-4 flex flex-col items-center lg:w-1/3">
        <img class="w-6 mb-2" src="<?php echo $need_legal_assistance_full_form_icon ?>" alt="contact-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2  text-center">
          <?php echo $need_legal_assistance_full_form_title ?>
        </p>
        <a href="<?php echo $need_legal_assistance_full_form_address ?>"
          class=" flex justify-center items-center font-bold text-lg md:text-2xl lg:text-lg xl:text-2xl leading-relaxed text-white text-center">
          <?php echo $need_legal_assistance_full_form_subtitle ?>
        </a>
      </div>

    </div>
  </div>
</section>

<?php
}  // your field group key
?>
