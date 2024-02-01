<?php
$group = acf_get_field_group('group_65a01b651cf75'); // your field group key
if ($group['active']) {

  ?>

<section class="insight_single_individual_sidebar_card flex flex-col gap-6 ">

      <?php
      $selected_insight_author        = get_field('selected_insight_author');

    if ($selected_insight_author && is_array($selected_insight_author)):
    foreach( $selected_insight_author as $post ):
      $team_member_name                     = get_field('team_member_name', $post->ID);
      $team_member_position                 = get_field('team_member_position' , $post->ID);
      $team_member_thumbnail_picture        = get_field('team_member_thumbnail_picture' , $post->ID);
      $team_member_phone_number             = get_field('team_member_phone_number' , $post->ID);
      $team_member_email                    = get_field('team_member_email' , $post->ID);
      $team_member_linkedin_profile_link    = get_field('team_member_linkedin_profile_link' , $post->ID);
      ?>
  <div class="max-w-sm p-6 flex flex-col justify-between gradientBlueBackground rounded-lg">
    <div class="flex w-full justify-center mb-6">
      <div class="w-60 flex flex-col items-center contact-info-unit">
        <img class="w-full rounded-t-lg aspect-1/1 object-cover" src="<?php echo $team_member_thumbnail_picture ?>" alt="key person image">
        <div class="bg-cloudGrey p-3 w-full rounded-lg text-brandBlue -mt-1.5">
          <p class="leading-relaxed text-sm md:text-base font-semibold">
              <?php echo $team_member_name ?>
          </p>
          <p class="text-xs md:text-sm font-medium text-darkGrey">
              <?php echo $team_member_position ?>
          </p>
        </div>
      </div>
    </div>

    <div class="flex flex-col justify-start gap-4 text-white font-semibold">
      <div class="team-member-info-detail team-member-phone-wrapper">
        <h5 class="mb-2 ">Phone:</h5>
        <a href="tel:<?php echo $team_member_phone_number ?>"><?php echo $team_member_phone_number ?></a>
      </div>
      <div class="team-member-info-detail team-member-email-wrapper">
        <h5 class="mb-2">Email</h5>
        <a href="mailto:<?php echo $team_member_email ?>"><?php echo $team_member_email ?></a>
      </div>
      <div class="team-member-info-detail team-member-email-wrapper flex gap-2">
        <img class="w-6 h-6" src="/wp-content/themes/rfb-legal/resources/images/white_linkedin_logo.svg" alt="linkedin logo">
        <a href="<?php echo $team_member_linkedin_profile_link ?>">LinkedIn</a>
      </div>
    </div>
  </div>

    <?php endforeach;
    endif;
      ?>


</section>

<?php
}  // your field group key
?>
