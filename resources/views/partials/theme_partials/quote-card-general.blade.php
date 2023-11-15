

<?php
$group = acf_get_field_group('group_654deb926289b'); // your field group key
if ($group['active']) {

  $quote_section = get_field('quote_section', 'options');

if ( have_rows('quote_section', 'options') ):
while( have_rows('quote_section', 'options') ) : the_row();

  $quote_text           = get_sub_field('quote_text', 'options');
  $quote_author_name    = get_sub_field('quote_author_name', 'options');
  $quote_author_image   = get_sub_field('quote_author_image', 'options');

  ?>
<section class="flex flex-row justify-center bg-gradient-to-b from-sky-900 to-cyan-800 dark:bg-gray-900 py-16 lg:py-32">
  <svg class="w-8 h-8 text-blue-900 dark:text-blue-900 mt-2 -mr-12 z-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
    <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
  </svg>
  <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row max-w-xs md:max-w-4xl dark:border-gray-700 dark:bg-gray-800 p-6 md:p-10">
    <div class="flex flex-col justify-between p-4 leading-normal">
      <p class="mb-3 text-base md:text-xl italic font-semibold text-gray-900 dark:text-white"><?php echo $quote_text; ?></p>
      <cite class="pl-3 text-sm text-gray-500 dark:text-gray-400">— <?php echo $quote_author_name; ?></cite>
    </div>
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-54 md:rounded-full " src="<?php echo $quote_author_image; ?>" alt="">
  </div>

</section>


<?php
endwhile;
endif;
}  // your field group key
?>

