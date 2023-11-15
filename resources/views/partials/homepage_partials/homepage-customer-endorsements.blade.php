
<?php
$above_the_fold_section = get_field('above_the_fold_section');

if ( have_rows('above_the_fold_section') ):
  while( have_rows('above_the_fold_section') ) : the_row();
        $endorsement_section_title = get_sub_field('endorsement_section_title');
  ?>

  <!-- component -->
<section class="sm:h-full py-12 lg:pb-28">
  <h2 class="mb-8 lg:mb-16 text-2xl font-extrabold text-gray-900 dark:text-white md:text-3xl lg:text-4xl text-center"><?php echo $endorsement_section_title; ?></h2>

    <div class="endorsement-wrapper flex flex-col lg:flex-row items-center justify-center space-y-4 lg:space-y-0 lg:space-x-4">
<?php
    if ( have_rows('customer_endorsements_section') ):
      while( have_rows('customer_endorsements_section') ) : the_row();

        $specialist_field              = get_sub_field('specialist_field');
        $endorsement_title             = get_sub_field('endorsement_title');
        $endorsement_description       = get_sub_field('endorsement_description');
        $endorsement_link_to           = get_sub_field('endorsement_link_to');
        $customer_endorsement_image    = get_sub_field('customer_endorsement_image');

    ?>
      <div class="w-5/6 lg:w-1/5 h-420 lg:h-520 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 bg-cover" style="background-image: url(<?php echo $customer_endorsement_image; ?>);">
        <div class="h-full flex flex-col justify-end bg-gradient-to-b from-transparent to-zinc-700 z-10">
          <div class="p-5">
            <h4 class="uppercase mb-2 text-base font-normal tracking-normal text-white dark:text-white"><?php echo $specialist_field; ?></h4>
            <h3 class="mb-2 text-xl xl:text-2xl font-bold tracking-tight text-white dark:text-white"><?php echo $endorsement_title; ?></h3>
            <p class="mb-3 font-normal text-white dark:text-gray-400"><?php echo $endorsement_description; ?></p>
            <a href="<?php echo $endorsement_link_to; ?>" class="cta-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Read more
              <svg class="cta-btn-arrow-right rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <?php
      endwhile;
      endif;
      ?>
        </div>
      </section>

<?php
endwhile;
endif;
?>
