
<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();

?>

  <!-- component -->
<section class="sm:h-full card-wrapper lg:py-28 flex flex-col md:flex-row items-center justify-center">

  <?php

    if ( have_rows('homepage_pricing_section') ):
      while( have_rows('homepage_pricing_section') ) : the_row();

      $block_pricing_title      = get_sub_field('block_title');
      $block_pricing_price      = get_sub_field('block_price');
      $block_button_text        = get_sub_field('pricing_button_text');
      $block_button_subtitle    = get_sub_field('pricing_button_subtitle');
      $block_advantages_list    = get_sub_field('block_advantages_list');

  ?>

    <!-- Card Section -->
  <card class="w-72 pricing-card my-6 md:my-0 md:mr-12 rounded-lg border shadow-md flex flex-col p-5 bg-white animate-fade animate-delay-300 animation-duration-1000 animate-once">

    <div class="flex flex-col items-center">

      <p class="mt-10 text-2xl font-light text-gray-700"><?php echo $block_pricing_title; ?></p>
      <p class="mt-1 text-3xl font-light text-gray-700"><?php echo $block_pricing_price; ?></p>

      <button class="mt-10 rounded py-2 px-4 bg-blue-500 text-white hover:bg-blue-700 hover:text-gray-50 text-sm">
          <?php echo $block_button_text; ?>
      </button>

      <p class="mt-4 text-gray-700 text-sm font-light"><?php echo $block_button_subtitle; ?></p>

      <div class="h-0.5 bg-gray-200 w-full my-5"> </div>

    </div>

    <div class="flex flex-col px-3">

      <p class="text-gray-700 text-sm font-light"> This package includes </p>

        <?php


        if ( have_rows('block_advantages_list') ):
          while( have_rows('block_advantages_list') ) : the_row();

            $advantage_list_item      = get_sub_field('advantage_list_item');
        ?>

      <div class="grid grid-cols-5 mt-3 gap-y-2">

        <div class="pl-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="#2563eb" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <div class="col-span-4 text-sm font-light text-gray-700"><?php echo $advantage_list_item; ?></div>

      </div>

        <?php
        endwhile;
        endif;
        ?>

    </div>

  </card>



      <?php
      endwhile;
      endif;
      ?>

</section>


<?php
endwhile;
endif;
?>
