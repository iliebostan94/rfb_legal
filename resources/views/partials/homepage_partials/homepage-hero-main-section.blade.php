<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
while( have_rows('above_the_fold_section') ) : the_row();

$hero_main_title            = get_sub_field('hero_main_title');
$hero_main_subtitle         = get_sub_field('hero_main_subtitle');
$hero_main_button_text      = get_sub_field('hero_main_button_text');
$hero_main_button_link      = get_sub_field('hero_main_button_link');
$hero_second_button_text    = get_sub_field('hero_second_button_text');
$hero_second_button_link    = get_sub_field('hero_second_button_link');
$hero_main_image            = get_sub_field('hero_main_image');
?>

<section class="relative h-700 flex md:flex-row flex-col mt-20 mainHeroGradientBlueBackground">
  <style>
    .mainHeroGradientBlueBackground {
      background: linear-gradient(270deg, #09224A 0%, rgba(8, 28, 60, 0) 57.29%),
        linear-gradient(0deg, #1B355D, #1B355D);

    }
  </style>
  <div class="relative w-full h-80 md:h-full bg-cover bg-center "
    style="background-image: url(<?php echo $hero_main_image ?>)"></div>
  <div
    class="mx-auto p-6 lg:p-0  md:h-full   flex flex-col justify-center    animate-fade animate-delay-300 animation-duration-1000 animate-once">
    <div class="flex lg:justify-end justify-center w-full">
      <div class="w-[327px] lg:w-[451px]  text-left flex flex-col justify-center items-start lg:mr-24">
        <h1 class="text-3xl tracking-tight leading-none text-white md:text-5xl">
          <?php echo $hero_main_title; ?>
        </h1>
        <div class="w-20 bg-accentGold h-1 rounded-full sm:my-4 my-6"> </div>
        <p class="text-base font-normal text-white lg:text-lg">
          <?php echo $hero_main_subtitle; ?>
        </p>

        <div class="w-full mt-4 lg:mt-6">
          <a href="<?php echo $hero_second_button_link; ?>"
            class="text-white text-base font-medium text-center bg-transparent border py-3 px-5 border-gray-300 focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-full w-[134px] lg:w-56">
            <?php echo $hero_second_button_text; ?>
          </a>
        </div>

      </div>
    </div>
  </div>

</section>

<?php
endwhile;
endif;
  ?>