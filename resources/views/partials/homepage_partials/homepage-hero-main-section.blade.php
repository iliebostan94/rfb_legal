<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
while( have_rows('above_the_fold_section') ) : the_row();

$hero_main_title            = get_sub_field('hero_main_title');
$hero_main_subtitle         = get_sub_field('hero_main_subtitle');
$hero_main_button_text      = get_sub_field('hero_main_button_text');
$hero_main_button_link      = get_sub_field('hero_main_button_link');
$hero_main_video            = get_sub_field('hero_main_video');
$hero_main_image            = get_sub_field('hero_main_image');
?>

<section class="relative h-600 flex xl:flex-row flex-col mt-20 mainHeroGradientBlueBackground animate-fade-down animate-once animate-ease-linear animate-normal">
  <style>
    .mainHeroGradientBlueBackground {
      background: linear-gradient(270deg, #09224A 0%, rgba(8, 28, 60, 0) 57.29%),
      linear-gradient(90deg, #1B355D, #09224A);
      backdrop-filter: blur(100px);
    }
    .videoCustomTransparentOverlay {
      background: linear-gradient(90deg, rgba(255,255,255,1) 15%, rgba(27,53,93,1) 33%, rgba(9,34,74,0) 50%);
    }
  </style>

  <?php
    if(!empty($hero_main_video)) { ?>
  <div class="home_main_video_parent videoCustomTransparentOverlay w-full max-w-full xl:w-60% xl:max-w-60% h-full relative">
    <div class="relative main_iframe_wrapper flex md:w-100% h-full mainHeroGradientBlueBackground overflow-hidden xl:rounded-tr-56 xl:rounded-bl-56">

      <video width="100%" height="100%" class="absolute h-full aspect-16/9 object-cover xl:object-cover pointer-events-none"
              src="<?php echo $hero_main_video; ?>"
              title="75 Years of Ronald Fletcher Baker LLP"
              allowfullscreen
              allow="autoplay; fullscreen"
              controls="0"
              autoplay
              loop
              muted>
      </video>

      <div class="absolute inset-0 bg-brandBlue opacity-25"></div>
    </div>
  </div>



  <?php } else {
      ?>
        <div class="relative main_bk_wrapper flex md:w-100% xl:w-60% h-full mainHeroGradientBlueBackground overflow-hidden ">
            <div class="home_main_bk_parent relative w-full h-80 md:h-full bg-cover bg-center rounded-bl-56 rounded-br-56 md:rounded-br-none xl:rounded-tr-56 xl:rounded-bl-56"
              style="background-image: url(<?php echo $hero_main_image ?>)">
            </div>
          <div class="absolute inset-0 bg-brandBlue opacity-25"></div>
        </div>
      <?php
    }?>
  <div
    class="mx-auto xl:ml-0 p-6 xl:p-0 xl:h-full flex flex-col justify-center animate-fade animate-delay-300 animation-duration-1000 animate-once ">
    <div class="flex lg:justify-end justify-center max-w-md  w-full">
      <div class="text-left flex flex-col justify-center items-start">
        <h1 class="text-3xl tracking-tight leading-none text-white xl:text-5xl">
          <?php echo $hero_main_title; ?>
        </h1>
        <div class="w-20 bg-accentGold h-1 rounded-full my-4 xl:my-6"> </div>
        <p class="text-base font-normal text-white xl:text-lg">
          <?php echo $hero_main_subtitle; ?>
        </p>

        <div class="w-full mt-4 xl:mt-6">
            <?php if(!empty($hero_main_button_text) )  { ?>
              <a href="<?php echo $hero_main_button_link; ?>"
                 class="block text-black text-base font-medium text-center bg-lightBlue border py-3 px-5 border-lightBlue focus:outline-none hover:text-white hover:bg-gray-900 hover:border-gray-900 focus:ring-4 focus:ring-gray-200 rounded-full w-40 xl:w-56">
                  <?php echo $hero_main_button_text; ?>
              </a>
            <?php } ?>
        </div>

      </div>
    </div>
  </div>

</section>

<?php
endwhile;
endif;
  ?>
