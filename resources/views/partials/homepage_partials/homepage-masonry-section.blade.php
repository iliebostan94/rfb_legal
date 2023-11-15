

<section class="bg-white dark:bg-gray-900 flex flex-col lg:flex-wrap md:flex-row">

<?php

  if ( have_rows('above_the_fold_section') ):
        while( have_rows('above_the_fold_section') ) : the_row();

        if (have_rows('masonry_features_homepage') ):
            $repeater_row_count = 0;
            while( have_rows('masonry_features_homepage') ) : the_row();

            // Load sub field value.
            $image_value = get_sub_field('row_image');
            $content_value = get_sub_field('row_content');

            ?>
              <?php
                if ($repeater_row_count % 2 == 0) { ?>
                  <div class="md:h-screen w-full flex flex-col flex-wrap md:flex-row mb-12">
                      <div class="w-full md:w-3/5 h-60 md:h-screen bg-cover bg-center" style="background-image: url(<?php echo $image_value; ?>);"></div>
                      <div class="flex flex-col justify-center w-full md:w-2/5 md:h-screen bg-white p-16 md:p-28"><?php echo $content_value; ?></div>
                  </div>
                <?php } else { ?>
                  <div class="md:h-screen w-full flex flex-col flex-wrap md:flex-row mb-12">
                      <div class="flex flex-col justify-center w-full md:w-2/5 md:h-screen bg-white p-16 md:p-28"><?php echo $content_value; ?></div>

                      <div class="w-full md:w-3/5 h-60 md:h-screen bg-cover bg-center" style="background-image: url(<?php echo $image_value; ?>);"></div>
                  </div>
              <?php }
        $repeater_row_count++;
        endwhile;
      endif;

    endwhile;
  endif;
?>

</section>
