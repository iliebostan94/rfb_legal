
<?php
$group = acf_get_field_group('group_6582fc1da8fa3'); // your field group key
if ($group['active']) {

  $insights_template_group = get_field('insights_template_group');

if ( have_rows('insights_template_group') ):
while( have_rows('insights_template_group') ) : the_row();

  ?>

<section class="bg-customDarkGrey-900 w-full text-black ">
  <div class="max-w-7xl px-5 py-12 max-h-full mx-auto">
            <h4 class="text-white">Recent Updates</h4>
    <div class="flex flex-col lg:flex-row justify-center h-2/5 w-full text-black text-left p-4">
            <?php
            $recent_insight_item_order = 1;

            $recent_post_selected    = get_sub_field('recent_post_selected');
              if ($recent_post_selected && is_array($recent_post_selected)):
                foreach( $recent_post_selected as $post ):
                  $permalink = get_permalink( $post->ID );
                  $title = get_the_title( $post->ID );
                  $post_thumbnail = get_the_post_thumbnail_url( $post->ID );
                  $post_date = get_the_date('j-m-Y', $post->ID);
                  ?>

                <a href="<?php echo $permalink; ?>" class="recent-insight-unit w-1/2 insight-unit-<?php echo $recent_insight_item_order ?>" >
                  <div id="insight-unit-<?php echo $insight_item_order++ ?>" class=" h-72 ">
                    <img src="<?php echo $post_thumbnail ?>"  alt="image"  class="h-3/5 w-full object-cover"/>
                    <div class="insight-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4">
                      <p class="text-base font-semibold title-font tracking-wider"><?php echo $title ?></p>
                      <p class="text-base font-semibold title-font tracking-wider"><?php echo $post_date ?></p>
                    </div>
                  </div>
                </a>
            <?php endforeach;
            endif;
              ?>
    </div>
  </div>
</section>

<?php
endwhile;
endif;
}  // your field group key
?>
