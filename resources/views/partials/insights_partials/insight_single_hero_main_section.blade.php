
<?php
$group = acf_get_field_group('group_65a01b651cf75'); // your field group key
if ($group['active']) {

  $insight_main_title                 = get_field('insight_main_title');
  $insight_main_image                 = get_field('insight_main_image');

  ?>

<section class="single_insight_hero_main_section relative md:h-480 h-auto">
  <div class="relative md:absolute w-full h-80 md:h-full bg-cover bg-center"
       style="background-image: url(<?php echo $insight_main_image ?>)"></div>

  <div class="p-6 lg:p-0 h-auto md:h-full bg-gradient-to-r md:from-brandBlue md:to-transparent  from-[#1b355dee] to-brandBlue  flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">

    <div class="w-full lg:w-1280px mx-auto ">
      <div class="max-w-3xl lg:ml-4 mx-auto text-left flex flex-col justify-center items-start text-customGrey-100">
        <h5 class="text-xl font-semibold mb-4">Featured Insight</h5>
        <h1 class="mb-2 text-3xl tracking-tight leading-none md:text-5xl">
            <?php echo $insight_main_title; ?>
        </h1>
        <div class="w-20 bg-accentGold h-1 rounded-full my-6"> </div>
        <p class="text-base font-normal md:font-semibold"><?php echo get_the_date('j-m-Y') ?></p>
      </div>
    </div>

  </div>


</section>

<?php
}
?>


