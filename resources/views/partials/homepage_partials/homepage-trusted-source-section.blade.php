
<?php
    $above_the_fold_section = get_field('above_the_fold_section');

    if ( have_rows('above_the_fold_section') ):
    while( have_rows('above_the_fold_section') ) : the_row();

    $trusted_source_background = get_sub_field('trusted_source_content');
    $trusted_source_title      = get_sub_field('trusted_source_title');
    $trusted_source_subtitle   = get_sub_field('trusted_source_subtitle');
    $trusted_source_link       = get_sub_field('trusted_source_link');

?>



<section class="bg-center bg-no-repeat bg-gray-600 bg-blend-multiply" style="background-image: url(<?php echo esc_url( $above_the_fold_section['trusted_source_background'] ); ?>)">
  <div class="mx-auto max-w-screen-xl text-center py-24 lg:py-52">


    <div class="w-full md:w-1/2 overflow-y-auto rounded-2xl m-auto p-8 md:p-10 md:bg-white">

      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none  md:text-2xl lg:text-5xl dark:text-white text-white md:text-gray-900"><?php echo $trusted_source_title; ?></h1>
      <p class="mb-8 text-lg font-normal lg:text-xl sm:px-8 lg:px-10 dark:text-gray-400 text-white md:text-gray-500"><?php echo $trusted_source_subtitle; ?></p>
      <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
        <a href="<?php echo $trusted_source_link; ?>" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white md:text-gray-600 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
          See our past selections
        </a>
      </div>

    </div>

  </div>
</section>
<?php
endwhile;
endif;
?>


