<?php
$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

      $top_title                = get_field('top_title', 'options');
      $top_subtitle             = get_field('top_subtitle', 'options');
      $company_phone_number     = get_field('company_phone_number', 'options');
      $company_email            = get_field('company_email', 'options');
      ?>
<section class="flex justify-center gradientBlueBackground">
  <div class=" p-6 md:p-16 flex justify-between lg:flex-row flex-col">
    <div class="flex flex-col max-w-lg md:pr-10  mb-6  text-left w-full">
      <h2 class="md:text-4xl text-2xl font-medium title-font text-white">
        <?php echo $top_title ?>
      </h2>
      <div class="w-full my-6 ">
        <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
      </div>
      <p class="text-base text-white font-normal max-w-[400px]">
        <?php echo $top_subtitle ?>
      </p>
    </div>
    <div class="flex md:mr-0 items-center lg:flex-row flex-col flex-shrink-0 gap-6">
      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl py-6 w-80 lg:w-72 flex flex-col items-center">
        <img class="w-8 mb-4" src="wp-content/uploads/2023/12/call-1.svg" alt="call-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2  text-center">General Questions
        </p>
        <a href="tel:<?php echo $company_phone_number ?>"
          class=" flex justify-center items-center font-bold text-sm md:text-lg lg:text-2xl leading-relaxed text-white text-center">
          <?php echo $company_phone_number ?>
        </a>
      </div>
      <div class="gen-quest bg-cloudBlue bg-opacity-10 rounded-3xl py-6 w-80 lg:w-72 flex flex-col items-center">
        <img class="w-8 mb-4" src="wp-content/uploads/2023/12/mail-1.svg" alt="mail-svg">
        <p class="leading-relaxed text-white text-base md:text-lg font-normal mb-2  text-center">Send Us Email</p>
        <a href="mailto:<?php echo $company_email ?>"
          class=" flex justify-center items-center font-bold text-sm md:text-lg lg:text-2xl leading-relaxed text-white text-center">
          <?php echo $company_email ?>
        </a>
      </div>
    </div>
  </div>
</section>

<?php
}  // your field group key
?>