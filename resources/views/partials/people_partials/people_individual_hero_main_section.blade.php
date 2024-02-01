
<?php
$group = acf_get_field_group('group_659ebf3a61638'); // your field group key
if ($group['active']) {

  $team_member_name                     = get_field('team_member_name');
  $team_member_position                 = get_field('team_member_position');
  $team_member_expertise                = get_field('team_member_expertise');
  $team_member_profile_picture          = get_field('team_member_profile_picture');
  $team_member_thumbnail_picture        = get_field('team_member_thumbnail_picture');
  $team_member_sra_image                = get_field('team_member_sra_image');

  ?>

<section class="people_individual_hero_main_section relative md:h-480 h-auto">
  <div class="relative md:absolute w-full h-80 md:h-full bg-cover bg-center"
       style="background-image: url(<?php echo $team_member_profile_picture ?>)"></div>
  <div  class="max-w-7xl mx-auto py-8 px-6 lg:p-0 h-auto md:h-full bg-secondaryBlue md:bg-transparent flex flex-col justify-center relative animate-fade animate-delay-300 animation-duration-1000 animate-once">

     <div class="max-w-3xl lg:ml-4 text-white lg:text-brandBlue font-semibold flex flex-col justify-center gap-6">
       <p class="text-lg md:text-xl"><?php echo $team_member_position; ?></p>
       <header class="">
         <h1 class="text-3xl md:text-4xl lg:text-5xl ">
             <?php echo $team_member_name; ?>
         </h1>
       </header>
       <div class="w-20 bg-accentGold h-1 rounded-full"> </div>
       <p class="text-base font-normal md:font-semibold"> <?php echo $team_member_expertise; ?> </p>
       <img class="max-w-12 max-h-20 object-contain" src="<?php echo $team_member_sra_image; ?>" alt="sra header image">
     </div>

  </div>

</section>

<?php
}
?>
