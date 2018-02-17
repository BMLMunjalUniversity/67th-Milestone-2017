<?php
$title = "Campus Partner | 67th Milestone";
include 'include/php/head.php';
function myfputcsv($handle, $array, $delimiter = ',', $enclosure = '"', $eol = "\n")
{
    $return = fputcsv($handle, $array, $delimiter, $enclosure);
    if ($return !== false && "\n" != $eol && 0 === fseek($handle, -1, SEEK_CUR)) {
        fwrite($handle, $eol);
    }
    return $return;
}
if (isset($_POST['formSubmit'])) {
    $header=array();
    $data=array();
    foreach (array_slice($_POST, 0, count($_POST)-1) as $key => $value) {
        //$header[]=$key;
     $data[]=$value;
    }
    $fp = fopen('CampusAmbassador.csv', 'a+');
    //fputcsv($fp, $header);
    myfputcsv($fp, $data);
    header("Location: /partner.php");
    fclose($fp);
}
?>
<script type = "javascript">
function reset()
{
  var name = document.getElementById("name");
  var address = docuemt.getElementById("address");
  var college = document.getElementById("college");
  var degree = document.getElementById("degree");
  var year = document.getElementById("year");
  var email = document.getElementById("email");
  var phone = document.getElementById("phone");
  var answer = document.getElementById("answer");

  name.value.reset();
  address.value.reset();
  college.value.reset();
  degree.value.reset();
  year.value.reset();
  email.value.reset();
  phone.value.reset();
  answer.value.reset();
}
</script>

        <!--========== PROMO BLOCK ==========-->
        <div class="g-fullheight--md js__parallax-window" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.8)), url(img/1920x1080/11.jpg) 100% 0 no-repeat fixed;
        background-size:100%; backdrop-filter:grayscale(100%);">
            <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
                <div class="g-margin-b-60--xs">
                    <!--<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Welcome to Megakit</p>-->
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Campus Partner Program</h1>
                    <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">Be the one who can lead a group of fellow students and assist them.</p>
                </div>
                <span class="g-display-block--xs g-display-inline-block--sm g-padding-x-5--xs g-margin-b-10--xs g-margin-b-0--sm">
                    <a href="#apply" class="text-uppercase s-btn s-btn-icon--md s-btn--white-brd g-radius--50 g-padding-x-65--xs">Apply Now</a>
                </span>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- About -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                <div class="col-sm-3 col-xs-6 g-hor-centered-row__col">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/400x500/05.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="img-responsive" src="img/400x550/01.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 g-hor-centered-row__col">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"></p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">Introduction</h2>
                    <p class="g-font-size-18--sm">Campus Partner is responsible for publicity and marketing for 67 th Milestone’17,and is responsible for introducing and encouraging student participation in the fest, in his/her college/university.He/She is the chief student representative of the college and is the coordinator for any relevant activity conducted in his/her college for publicity through social media, College notice boards, Root-mails etc.</p>
                </div>
            </div>

            <div class="row g-hor-centered-row--md g-row-col--5">
                <div class="col-sm-3 col-xs-6 col-sm-push-6 g-hor-centered-row__col">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="img-responsive" src="img/400x550/02.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-sm-push-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="img/400x500/06.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"></p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About the Program</h2>
                    <p class="g-font-size-18--sm">
                        <ul style="text-align:left;">
                            <li>The program will last for about duration of 45 days (till the end of 67 th Milestone’17).</li>
                            <li>The partners will be rewarded with exciting prizes and recommendations</li>
                            <li>Only active partners who meet the required target will be considered for any kind of reward.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>

        <!-- End About -->

        <!-- Process -->
        <div class="g-bg-color--primary-ltr">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-100--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs"></p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">Advantage</h2>
                </div>
                <ul class="list-inline row g-margin-b-100--xs">
                    <!-- Process -->
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">01</span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs g-color--white">Certificate</h3>
                                <p class="g-color--white-opacity">for pursuing Campus Partner Program for 1 Months.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End Process -->

                    <!-- Process -->
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">02</span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs g-color--white">Exemption</h3>
                                <p class="g-color--white-opacity">from registration fee, BAND/EDM Night Passes.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End Process -->

                    <!-- Process -->
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--sm">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">03</span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs g-color--white">Best Campus Partner Award</h3>
                                <p class="g-color--white-opacity">along with exciting prizes for the top 5 campus ambassadors.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End Process -->

                    <!-- Process -->
                    <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1">
                        <div class="center-block g-text-center--xs">
                            <div class="g-margin-b-30--xs">
                                <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">04</span>
                            </div>
                            <div class="g-padding-x-20--xs">
                                <h3 class="g-font-size-18--xs g-color--white">Get exclusive Merchandise</h3>
                                <p class="g-color--white-opacity">T shirts, Mugs and more.</p>
                            </div>
                        </div>
                    </li>
                    <!-- End Process -->
                </ul>

            </div>
        </div>
        <div class="g-position--relative g-bg-color--dark" id='apply'>
            <div class="g-container--md g-padding-y-125--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">Apply</h2>
                </div>
                <form class="center-block g-width-500--sm g-width-550--md" action="" method="post">
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* Name" name="name">
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* address" name="address">
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* college" name="college">
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* degree" name="degree">
                    </div>
                    <div class="g-margin-b-30--xs">
                        <input type="text" class="form-control s-form-v3__input" placeholder="* year of study" name="year">
                    </div>
                    <div class="row g-row-col-5 g-margin-b-50--xs">
                        <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                            <input type="email" class="form-control s-form-v3__input" placeholder="* Email" name="email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control s-form-v3__input" placeholder="* Phone" name="phone">
                        </div>
                    </div>
                    <div class="g-margin-b-80--xs">
                        <textarea class="form-control s-form-v3__input" rows="5" placeholder="* Why you should be chosen as a Campus Partner?" name='answer'></textarea>
                    </div>
                    <div class="g-text-center--xs">
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs" name="formSubmit">Submit</button>
                    </div>
                </form>
            </div>
            <img class="s-mockup-v2" src="img/mockups/pencil-01.png" alt="Mockup Image">
        </div>
        <!-- End Process -->

        <!--========== END PAGE CONTENT ==========-->

<?php
include 'include/php/foot.php';
?>
