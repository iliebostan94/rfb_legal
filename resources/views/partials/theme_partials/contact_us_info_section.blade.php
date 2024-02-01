
<?php
$group = acf_get_field_group('group_65a130fb9caed'); // your field group key
if ($group['active']) {

  $contact_information_title                 = get_field('contact_information_title');
  $contact_information_subtitle              = get_field('contact_information_subtitle');
  $contact_call_block_icon_first             = get_field('contact_call_block_icon_first');
  $contact_call_block_name_first             = get_field('contact_call_block_name_first');
  $contact_call_block_phone_first            = get_field('contact_call_block_phone_first');
  $contact_call_block_icon_second            = get_field('contact_call_block_icon_second');
  $contact_call_block_name_second            = get_field('contact_call_block_name_second');
  $contact_call_block_phone_second           = get_field('contact_call_block_phone_second');
  $contact_mail_block_icon                   = get_field('contact_mail_block_icon');
  $contact_mail_block_name                   = get_field('contact_mail_block_name');
  $contact_mail_block_title                  = get_field('contact_mail_block_title');

  ?>

<section class="contact_info_fullrow_section flex justify-center gradientBlueBackground py-12 lg:py-16">
  <div class="px-6 md:px-0 flex lg:flex-row lg:flex-wrap flex-col w-full lg:w-904px gap-3 lg:gap-6 items-center">
    <div class="flex flex-col mb-0 text-left w-full">
      <h2 class="md:text-4xl text-2xl font-semibold text-white w-full">
          <?php echo $contact_information_title ?>
      </h2>
      <div class="w-full my-6">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2 text-left"><?php echo $contact_information_subtitle ?></p>
    </div>

    <div class="flex lg:flex-row flex-col gap-6 md:gap-8 w-full">
      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl py-4 px-8 lg:py-6 flex flex-col items-center lg:w-1/3 w-full">
        <img class="w-6 mb-2" src="<?php echo $contact_call_block_icon_first ?>" alt="call-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2 text-center">
            <?php echo $contact_call_block_name_first ?>
        </p>
        <a href="tel:<?php echo $contact_call_block_phone_first ?>"
           class=" flex justify-center items-center font-bold text-lg md:text-2xl lg:text-lg xl:text-2xl leading-relaxed text-white text-center">
            <?php echo $contact_call_block_phone_first ?>
        </a>
      </div>

      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl py-4 px-8 lg:py-6 flex flex-col items-center lg:w-1/3">
        <img class="w-6 mb-2" src="<?php echo $contact_call_block_icon_second ?>" alt="email-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2  text-center">
            <?php echo $contact_call_block_name_second ?>
        </p>
        <a href="mailto:<?php echo $contact_call_block_phone_second ?>"
           class=" flex justify-center items-center font-bold text-lg md:text-2xl lg:text-lg xl:text-2xl leading-relaxed text-white text-center ">
            <?php echo $contact_call_block_phone_second ?>
        </a>
      </div>

      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl py-4 px-8 lg:py-6 flex flex-col items-center lg:w-1/3">
        <img class="w-6 mb-2" src="<?php echo $contact_mail_block_icon ?>" alt="contact-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2  text-center">
            <?php echo $contact_mail_block_name ?>
        </p>
        <a href="#"
           class=" flex justify-center items-center font-bold text-lg md:text-2xl lg:text-lg xl:text-2xl leading-relaxed text-white text-center">
            <?php echo $contact_mail_block_title ?>
        </a>
      </div>

    </div>
  </div>
</section>

  <?php
}
?>


