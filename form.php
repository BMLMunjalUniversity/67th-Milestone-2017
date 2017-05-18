<?php
require '../ev_parse.php';
$evcode = trim($_GET['r']);
$evname = getEventName($evcode);
if($evname == -1) {
  header("Location: /");
  die();
}
$title = $evname." Registration | 67th Milestone";
include '../include/php/head.php';
include '../include/config.php';
?>
<!--========== PAGE CONTENT ==========-->
<!-- Feedback Form -->
<div class="g-position--relative g-bg-color--dark">
    <div class="g-container--md g-padding-y-125--xs">
        <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
              <!-- <p class="g-font-size-18--xs g-font-weight--500 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Note: Registeration payment link: <a href="http://tinyurl.com/bmlfest">http://tinyurl.com/bmlfest</a></p> -->
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Register</p>
            <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white"><?php echo $evname; ?></h2>
        </div>
        <form class="center-block g-width-500--sm g-width-550--md" action="save.php" method="post">
            <input type="hidden" name="r" value="<?php echo $evcode; ?>">
            <div class="g-margin-b-30--xs">
                <input type="text" class="form-control s-form-v3__input" placeholder="* College" name='college' required>
            </div>
            <p>Team Information</p>
            <div class="" id='register-teams'>
              <?php
              $pp = getMinimumParticipants($evcode);
              $pb = getMaxParticipants($evcode);
              $bb = $pb - $pp;
              $k = 1;
              ?>
              <div class="" id='team-person'>
                <p>Person <span class='team-person-number'><?php echo $k++; ?></span></p>
                <div class="g-margin-b-30--xs">
                    <input type="text" class="form-control s-form-v3__input" placeholder="* Name" name='fname' required>
                </div>
                <div class="row g-row-col-5 g-margin-b-30--xs">
                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Year of study" name='year' required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Branch" name='branch' required>
                    </div>
                </div>
                <div class="row g-row-col-5 g-margin-b-30--xs">
                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                        <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name='email' required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Phone" name='phone' required>
                    </div>
                </div>
              </div>
              <?php
              for($i=1;$i<$pp;$i++) {
                ?>
                <div class="" id='team-person'>
                  <p>Person <span class='team-person-number'><?php echo $k++; ?></span></p>
                  <div class="g-margin-b-30--xs">
                      <input type="text" class="form-control s-form-v3__input" placeholder="* Name" name='name[]' required>
                  </div>
                </div>
                <?php
              }
              for($i=0;$i<$bb;$i++) {
                ?>
                <div class="" id='team-person'>
                  <p>Person <span class='team-person-number'><?php echo $k++; ?></span></p>
                  <div class="g-margin-b-30--xs">
                      <input type="text" class="form-control s-form-v3__input" placeholder="Name" name='name[]' >
                  </div>
                </div>
                <?php
              }
              ?>
            </div>
            <div class="g-margin-b-80--xs">
                <textarea class="form-control s-form-v3__input" rows="5" placeholder="Anything else we should know?" name='extra'></textarea>
            </div>
            <div class="g-text-center--xs">
                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
            </div>
        </form>
    </div>
    <img class="s-mockup-v2" src="/img/mockups/pencil-01.png" alt="Mockup Image">
</div>
<!-- End Feedback Form -->
<!--========== END PAGE CONTENT ==========-->
<?php
include '../include/php/foot.php';
?>
