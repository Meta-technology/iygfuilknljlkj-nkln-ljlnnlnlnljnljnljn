<?php 
error_reporting(1);
require_once('dbconnection.php');
    $hA=$_POST['hA'];
	$hgradA=$_POST['hgradA'];
	$haddA=$_POST['haddA'];
	$hfromA=$_POST['hfromA'];
	$hnoA=$_POST['hnoA'];
	$cA=$_POST['cA'];
	$cfromA=$_POST['cfromA'];
	$ctoA=$_POST['ctoA'];
	$caddA=$_POST['caddA'];
	$ccityA=$_POST['ccityA'];
	$czipA=$_POST['czipA'];
	$cstateA=$_POST['cstateA'];
	$auth=$_POST['auth'];
	$work=$_POST['work'];
	$worked=$_POST['worked'];
	$felonyyes=$_POST['felonyyes'];
	$names=$_POST['names'];
	$dob=$_POST['dob'];
		$msg=mysqli_query($con,"INSERT into users(hA,hgradA,haddA,hfromA,hnoA,cA,cfromA,ctoA,caddA,ccityA,czipA,cstateA,auth,work,worked,felonyyes,names,dob) values('$hA','$hgradA','$haddA','$hfromA','$hnoA','$cA','$cA','$cfromA','$ctoA','$caddA','$ccityA','$czipA','$cstateA','$auth','$work','$worked','$felonyyes','$names','$dob')");
		}
if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}else{	echo "<script>alert('Register failed');</script>";
}?>
<html lang="en">
<head>
    <title>Remote Work Application</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/favicon.png">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="a/images/icons/favicon.ico" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/endor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/vendor/noui/nouislider.min.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="a/css/util.css">
  <link rel="stylesheet" type="text/css" href="a/css/main.css">
  <style>
    .bab {
      float: left;
      padding: 30px 30px;
    }
  </style>
  <!--===============================================================================================-->
</head>

<body>
  <header>
    <nav>
      <div class="bab">
        <nav link><img src="./a/images/logo2.png" alt="" class="fluid"></nav>
      </div>

    </nav>
  </header>
  <div class="container-contact100">
    <div class="wrap-contact100">
      <form name="registration" method="post" action=""  class="contact100-form validate-form">
        <span class="contact100-form-title">
          Scott Group Application Form
        </span>

        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
          <span class="label-input100">FULL NAME *</span>
          <input class="input100" type="text" name="hA" placeholder="Enter Your Name" required>
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Enter Your Email (dres***@gmail.com)">
          <span class="label-input100">Email *</span>
          <input class="input100" type="email" name="hgradA" placeholder="Enter Your Email ">
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Phone</span>
          <input class="input100" type="text" name="haddA" placeholder="Enter Phone Number">
        </div>
        <span class="contact100-form-title">
WORK EXPERIENCE
        </span>



        <div class="wrap-input100 validate-input bg1" data-validate="Are you currently employed???">
          <span class="label-input100">Are you currently employed</span>



    <div class="contact100-form-radio m-t-15">
      <input class="input-radio100" id="radio1" type="radio" name="hfromA" value="employedyes"
        checked="checked">
      <label class="label-radio100" for="radio1">
        Yes
      </label>
    </div>

    <div class="contact100-form-radio">
      <input class="input-radio100" id="radio2" type="radio" name="hfromA" value="employedno">
      <label class="label-radio100" for="radio2">
       No
      </label>
    </div>
  </div>

    <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate="Please tell us how you got your old employment">
      <span class="label-input100">How did you get your previous jobs?</span>
      <textarea class="input100" name="hnoA" placeholder="Explain..."></textarea>
    </div>
      <div class="wrap-input100 validate-input bg0 rs1-alert-validate"
        data-validate="Please tell us about your old job">
        <span class="label-input100">What were your main responsibilities?</span>
        <textarea class="input100" name="cA" placeholder="Achievements?..."></textarea>
      </div><div class="wrap-input100 validate-input bg1" data-validate="Please mention a few things about your old jobs if none type none">
        <span class="label-input100">What type of jobs have you had?</span>
        <input class="input100" type="text" name="cfromA" placeholder="if none type none">
      </div>
        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="Have you been in the military before? ">
          <span class="label-input100">Have you been in the military before?</span>
          <input class="input100" type="text" name="ctoA" placeholder="Military Experience">
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Your default mobile phone carrier is?</span>
          <input class="input100" type="text" name="caddA" placeholder="Prepaid or Postpaid">
        </div>
<div class="wrap-input100 validate-input bg1" data-validate="MBA,BSC or PHD etc">
  <span class="label-input100">Do you own a degree</span>

<div class="contact100-form-radio m-t-15">
  <input class="input-radio100" id="degreeyes" type="radio" name="ccityA" value="degreeyes">
  <label class="label-radio100" for="degreeyes">
    Yes
  </label>
</div>

<div class="contact100-form-radio">
  <input class="input-radio100" id="degreeno" type="radio" name="ccityA" value="degreeno">
  <label class="label-radio100" for="degreeno">
    No
  </label>
</div>
</div>





<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate="what is your D.O.B?">
  <span class="label-input100">DATE OF BIRTH</span>
  <input class="input100" type="date" name="czipA" placeholder="">
</div>

<div class="wrap-input100 bg1 rs1-wrap-input100">
  <span class="label-input100">ADDRESS</span>
  <input class="input100" type="address" name="cstateA" placeholder="Where do you stay?" required>
</div>
<div class="wrap-input100 validate-input bg1" data-validate="fill this part">
  <span class="label-input100">How long do you intend working for this company ?</span>
  <input class="input100" type="text" name="auth" placeholder="" required>
</div>
          <span class="contact100-form-title">
      Office Efficency
          </span>
        <div class="wrap-input100 input100-select bg1">
          <span class="label-input100">Do you have a check printing experience</span>
          <div>
            <select class="js-select2" name="work">
              <option>Please choose</option>
              <option>Yes </option>
              <option>No</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
        </div>

        <div class="w-full dis-none js-show-service">
          <div class="wrap-contact100-form-radio">
            <span class="label-input100">Do you operate with any financial institution Credit Card?</span>

            <div class="contact100-form-radio m-t-15">
              <input class="input-radio100" id="radio01" type="radio" name="worked" value="ccyes"
                checked="checked">
              <label class="label-radio100" for="radio01">
                Yes
              </label>
            </div>

            <div class="contact100-form-radio">
              <input class="input-radio100" id="radio02" type="radio" name="worked" value="ccno">
              <label class="label-radio100" for="radio02">
               No
              </label>
            </div>
          </div>
          <div class="wrap-input100 validate-input bg1" data-validate="Credit Card Name">
            <span class="label-input100">What is the name of your credit card issuing comapny?</span>
            <input class="input100" type="text" name="felonyyes" placeholder="Enter the name of your credit card issuing comapny?">
          </div>
          <div class="wrap-input100 validate-input bg1" data-validate="Bank Name">
            <span class="label-input100">What bank do you operate with?</span>
            <input class="input100" type="text" name="names" placeholder="Enter the name of your finicial institution">
          </div>
          <div class="wrap-input100 validate-input bg1" data-validate="Please answer ">
            <span class="label-input100">How would you like to be Paid ?</span>
            <input class="input-radio100" id="Weekly" type="radio" name="dob" value="weekly">
        
        
          <label class="label-radio100" for="Weekly">
            
Weekly </label><div class="inline"></div><input class="input-radio100" id="Direct" type="radio" name="dob" value="direct">
        
          <label class="label-radio100" for="Direct">
            Direct deposit </label>   <input class="input-radio100" id="Bi-Weekly" type="radio" name="dob" value="biweek">
        
        
          <label class="label-radio100" for="Bi-Weekly">
            Bi-Weekly </label>       </div>

          <!--		<div class="wrap-contact100-form-range">
						<span class="label-input100">Budget *</span>

						<div class="contact100-form-range-value">
							$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
					</div>-->
        </div>

        <!--	<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
				</div>-->

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn" type="submit">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>


  <div class="card text-center">
    <div class="card-header">
     <a href="mailto:hr@barniabs.com">CLICK TO CONTACT CUSTOMER CARE</a>
    </div>
    <div class="card-body">
      <h5 class="card-title">All submitted application would be sent to our HR for review and applicants that qualify would be contacted over email </h5>
      <p class="card-text">Scott’s Vision Is To Become The Leading Business Services Partner For Companies And Governments Worldwide..</p>
      <a href="index.html" class="btn btn-primary">About Us</a>
    </div>
    <div class="card-footer text-muted">
    <a href='../../index.html'>Homepage</a>
    </div>
  </div>
  <!--===============================================================================================-->
  <script src="a/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="a/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="a/vendor/bootstrap/js/popper.js"></script>
  <script src="a/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="a/vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function () {
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });


      $(".js-select2").each(function () {
        $(this).on('select2:close', function (e) {
          if ($(this).val() == "Please choose") {
            $('.js-show-service').slideUp();
          }
          else {
            $('.js-show-service').slideUp();
            $('.js-show-service').slideDown();
          }
        });
      });
    })
  </script>
  <!--===============================================================================================-->
  <script src="a/vendor/daterangepicker/moment.min.js"></script>
  <script src="a/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="a/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="a/vendor/noui/nouislider.min.js"></script>
  <script>
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
      start: [1500, 3900],
      connect: true,
      range: {
        'min': 1500,
        'max': 7500
      }
    });

    var skipValues = [
      document.getElementById('value-lower'),
      document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function (values, handle) {
      skipValues[handle].innerHTML = Math.round(values[handle]);
      $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
      $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
    });
  </script>
  <!--===============================================================================================-->
  <script src="a/js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

</body>
<php}}?>
</html>