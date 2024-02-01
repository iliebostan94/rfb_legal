
<?php
$group = acf_get_field_group('group_6582fc1da8fa3'); // your field group key
if ($group['active']) {

  $insights_template_group = get_field('insights_template_group');

if ( have_rows('insights_template_group') ):
while( have_rows('insights_template_group') ) : the_row();

  ?>

<<<<<<< HEAD
<section class="insights_recent_updates_section gradientBlueBackground w-full text-black recent-updates-section ">
  <div class="max-w-7xl  max-h-full mx-auto p-4 py-12 lg:py-16">
=======
<section class="gradientBlueBackground w-full text-black recent-updates-section ">
  <div class="max-w-7xl py-12 max-h-full mx-auto p-4 lg:py-16">
>>>>>>> 25601ee4c1103e0a344d540d960fce3cf4971a26
            <h4 class="text-white text-xl lg:text-2xl py-4 lg:py-6 font-bold">Recent Updates</h4>
    <div class="flex flex-col lg:flex-row justify-center w-full text-black text-left gap-y-6 lg:gap-x-14 ">
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

                <a href="<?php echo $permalink; ?>" class="recent-insight-unit w-full lg:w-1/2 insight-unit-<?php echo $recent_insight_item_order ?> " >
                  <div id="insight-unit-<?php echo $recent_insight_item_order++ ?>" class="">
                    <img src="<?php echo $post_thumbnail ?>"  alt="image"  class="aspect-2/1 w-full rounded-t-xl object-cover"/>
                    <div class="insight-desc flex flex-col justify-center h-2/5 w-full bg-zinc-100 text-black text-left p-4 rounded-b-xl">
                      <p class="text-base font-semibold title-font tracking-wider lg:truncate lg:max-w-lg"><?php echo $title ?></p>
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
