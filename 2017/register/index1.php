<?php
require '../ev_parse.php';
$title = "Registration | 67th Milestone";
include '../include/php/head.php';
include '../include/config.php';
?>
<!--========== PAGE CONTENT ==========-->
<!-- Feedback Form -->
<div class="g-position--relative g-bg-color--dark">
    <div class="g-container--md g-padding-y-125--xs">
        <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Register</p>
            <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">All Events</h2>
        </div>
        <form class="center-block g-width-500--sm g-width-550--md" action="save.php" method="post">
            <input type="hidden" name="r" value="COMMON">
            <div class="g-margin-b-30--xs">
                <input type="text" class="form-control s-form-v3__input" placeholder="* College" name='college' required>
            </div>
            <div class="" id='team-person'>
              <div class="g-margin-b-30--xs">
                  <input type="text" class="form-control s-form-v3__input" placeholder="* Name" name='name' required>
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
            <p>Select your Events:</p>
            <div class="g-row-col-5 g-margin-b-30--xs">
              <?php
              global $events;
              foreach ($events as $key => $value) {
                ?>
                <div class="input-group">
                  <p class="form-control form-control-static"><?php echo $value[0]; ?></p>
                  <p class="input-group-addon"><input type="checkbox" class="" value="<?php echo $value[1]; ?>" name="evnames[]"></p>
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
