
<?php
$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

      $top_title                = get_field('top_title', 'options');
      $top_subtitle             = get_field('top_subtitle', 'options');
      $company_phone_number     = get_field('company_phone_number', 'options');
      $company_email            = get_field('company_email', 'options');
      ?>

<section class="py-8 md:py-20">
  <div class="max-w-7xl p-6 md:p-16 mx-auto flex justify-between md:flex-row flex-col bg-black rounded-lg">
    <div class="flex flex-col max-w-lg md:pr-10 md:mb-0 mb-6 pr-0 text-left">
      <h2 class="md:text-4xl text-2xl font-medium title-font text-gray-300 mb-4"><?php echo $top_title ?></h2>
      <p class="text-base text-gray-300 font-medium"><?php echo $top_subtitle ?></p>
    </div>
    <div class="flex md:ml-auto md:mr-0 mx-auto items-end flex-shrink-0 space-x-4">
      <div class="gen-quest">
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal">General Questions</p>
        <a href="tel:<?php echo $company_phone_number ?>" class=" flex justify-center items-center text-sm md:text-lg lg:text-2xl leading-relaxed text-gray-300"><img src="http://localhost:10043/wp-content/uploads/2023/12/call.svg" alt="call-svg"><?php echo $company_phone_number ?></a>
      </div>
      <div>
        <p class="leading-relaxed text-gray-300 text-base md:text-lg font-normal">Send Us Email</p>
        <a href="mailto:<?php echo $company_email ?>" class="flex justify-center items-center text-sm md:text-lg lg:text-2xl leading-relaxed text-gray-300"><img src="http://localhost:10043/wp-content/uploads/2023/12/mail.svg" alt="mail-svg"><?php echo $company_email ?></a>
      </div>
    </div>
  </div>
</section>

<?php
}  // your field group key
?>
