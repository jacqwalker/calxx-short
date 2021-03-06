<?php include('form_processADVERTISE.php'); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>calxx | a job directory for chartered accountants</title>
    <meta charset="utf-8">
    <meta name="keywords" content="chartered accountants, finance jobs, accountancy jobs">
    <meta name="description" content="Hello, we're calxx and we're here to make it super easy for you to find your next accounting and finance role.">

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link href="https://fonts.googleapis.com/css?family=Merriweather|Quando|Roboto|Source+Sans+Pro|Varela+Round" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="./images/white favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <div class="overlay"></div>
    <div class="pre-header font-white clearfix">
      <div class="pre-header-left">
        <i class="fa fa-envelope pre-header-icons-email"></i>
        <span class="font-blue">Email:</span> <a href="mailto:hello@calxx.co.uk" class="logo-link pre-header-icons-email  font-white">hello@calxx.co.uk</a>
      </div>

      <div class="pre-header-right">
        <a href="https://www.facebook.com/calxxcouk/" target="_blank"><i class="fa fa-facebook pre-header-icons logo-link font-white border"></i></a>
        <a href="https://twitter.com/calxxcouk" target="_blank"><i class="fa fa-twitter pre-header-icons logo-link font-white"></i></a>
        <a href="https://www.linkedin.com/company/11181313" target="_blank"><i class="fa fa-linkedin pre-header-icons logo-link font-white"></i></a>
      </div>
    </div>

    <header class="clearfix font-white">
      <a href="https://www.calxx.co.uk" class=" font-white">
        <h1 class="calxx-font logo-heading">cal<span class="calxx-font font-blue">xx</span></h1>
      </a>
      <div class="nav-icon">
        <i class="fa fa-reorder"></i>
      </div>
      <nav class="nav-header">
        <ul>
          <li class="navlist-item">
            <a href="https://www.calxx.co.uk/jobalerts" class="logo-link nav-link font-white">Job alerts</a>
          </li>
          <li class="navlist-item">
            <a href="index.html#pricing" class="logo-link nav-link font-white">Pricing</a>
          </li>
          <li class="navlist-item">
            <a href="https://www.calxx.co.uk/ourblog" class="logo-link nav-link font-white">Our blog</a>
          </li>
          <li class="navlist-item">
            <a href="mailto:hello@calxx.co.uk" class="logo-link nav-link font-white">Contact us</a>
          </li>
        </ul>
      </nav>
    </header>

    <main>
    	<section class="font-white blog-header-section">
    		<h1 class="advert-container-heading bold centre font-white">Job advertisement</h1>
    		<div class="icon-divider centre">
    			<i class="fa fa-circle"></i>
    			<i class="fa fa-circle"></i>
    			<i class="fa fa-circle"></i>
    			<i class="fa fa-circle"></i>
    		</div>  		
    	</section>

    	<section class="advert-main-container">
    		<section class="advert-container">
	    		
	    		<form action="" method="post" enctype="multipart/form-data" class="advert-form">
	    			
	    			<h1 class="advert-container-heading bold centre font-white">Please complete all fields below</h1>
	    			<p class="advert-para centre">If you have any questions please do not hesitate to email us at <a href="mailto:hello@calxx.co.uk" class="font-blue link">hello@calxx.co.uk</a>

	    			<div class="success"><?= $submissionmessage ?></div>
	    			<h4 class="bold">Your information</h4>
	    			<div class="input-container">
	    			 <input placeholder="Your first name" type="text" name="firstname" value="<?= $first_name ?>" tabindex="1" class="advert-input" required maxlength="15">
	               	 <p class="error"><?= $firstname_error ?></p>
	    			</div>
	    			<div class="input-container">
	                 <input placeholder="Your last name" type="text" name="lastName" value="<?= $last_name ?>" tabindex="2" class="advert-input" required maxlength="20">
	               	 <p class="error"><?= $lastname_error ?>
	               	 </p>
	    			</div>
	    			<div class="input-container">
	              	 <input placeholder="Your work email" type="text" name="email" value="<?= $email ?>" tabindex="3" class="advert-input" required minlength="8" maxlength="50">
	                 <p class="error"><?= $email_error ?></p>
	    			</div>
	    			<div class="input-container">
	    			 <input placeholder="Contact number" class="advert-input" type="text" name="contactnumber" value="<?= $contactnumber ?>" tabindex="4" required minlength="11" maxlength="11">
	    			 <p class="error"><?= $contactnumber_error ?></p
	    			 	>
	    			</div>
	    			
	    			<h4 class="bold">Company information</h4>
	    			<div class="input-container">
	    			  <input placeholder="Company name" type="text" name="companyname" value="<?= $company_name ?>" tabindex="5" class="advert-input" required maxlength="15">
	                 <p class="error"><?= $companyname_error ?></p>
	    			</div>
	    			<div class="input-container">
	    			 <input placeholder="Company address incl postcode" type="text" name="companyaddress" value="<?= $company_address ?>" tabindex="6" class="advert-input" required maxlength="75">
	                 <p class="error"><?= $companyaddress_error ?></p>
	    			</div>
	    			<div class="input-container">
	    			 <input placeholder="Company website (incl the www)" type="text" name="companywebsite" value="<?= $company_website ?>" tabindex="7" class="advert-input" required maxlength="15">
	                 <p class="error"><?= $companywebsite_error ?></p>
	    			</div>
	    			<div class="input-container">
	    			 <input placeholder="Company sector eg retail, media" type="text" name="companysector" value="<?= $company_sector ?>" tabindex="8" class="advert-input" required maxlength="30">
	               	 <p class="error"><?= $companysector_error ?></p>
	    			</div>
	    			
	    			<h4 class="bold">The role</h4>
	    			<p class="advert-para">Attach the job description. Only word documents are accepted</p>
	    			<label>
	    			 <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	                 <input type="file" class="apply-input-form advert-input-form" name="attached_file" tabindex="9" />
	    			</label>
	    			<p class="error"><?php echo $file_msg; ?></p>

	    			<h4 class="bold">Key requirements</h4>
	    			<p class="advert-para">How many years PQE are you looking for?</p>
	    			 <input placeholder="Please list eg 2 to 3 years PQE" type="text" name="numberofyearsPQE" tabindex="10" class="advert-input width-adj" required maxlength="25" value="<?= $numberofyearsPQE ?>" >	
	    			 <p class="error"><?= $numberofyearsPQE_error ?></p>
	    			
	    			<p class="advert-para">Is this a full-time or part-time role?</p>
	    			<label class="advert-tickbox font-white">Full-time
	  				 <input type="radio" name="roleterm" value="full-time" tabindex="11" <?php if ($_POST['roleterm'] == 'full-time') echo 'checked="checked" ';?>>
	  				 <span class="checkmark"></span>
					</label>
					<label class="advert-tickbox font-white">Part-time
	  				 <input type="radio" name="roleterm" value="part-time" tabindex="12" <?php if ($_POST['roleterm'] == 'part-time') echo 'checked="checked" ';?>>
	  				 <span class="checkmark"></span>
					</label>
	    			<p class="error"><?= $roleterm_error ?></p>

	    			<p class="advert-para">Is this a permanent or contract role?</p>
	    			<label class="advert-tickbox font-white">Permanent
	  				 <input type="radio" name="roletype" value="Permanent" tabindex="13" <?php if ($_POST['roletype'] == 'Permanent') echo 'checked="checked" ';?>>
	  				 <span class="checkmark"></span>
					</label>
					<label class="advert-tickbox font-white">Contract
	  					<input type="radio" name="roletype" value="Contract" tabindex="14" <?php if ($_POST['roletype'] == 'Contract') echo 'checked="checked" ';?>>
	  					<span class="checkmark"></span>
					</label>
	    			<p class="error"><?= $roletype_error ?></p> 

	    			<p class="advert-para" name="sectorexperience" value="<?= $sectorexperience ?>">Is sector (i.e. retail, media etc) experience:</p>
	    			<label class="advert-tickbox font-white">Essential
	  				 <input type="radio" name="sectorexperience" value="Essential" tabindex="15" <?php if ($_POST['sectorexperience'] == 'Essential') echo 'checked="checked" ';?>>
	  				 <span class="checkmark"></span>
					</label>
					<label class="advert-tickbox font-white">Preferred
	  				 <input type="radio" name="sectorexperience" value="Preferred" tabindex="16" <?php if ($_POST['sectorexperience'] == 'Preferred') echo 'checked="checked" ';?>>
	  				 <span class="checkmark"></span>
					</label>
					<label class="advert-tickbox font-white">Advantageous
	  				 <input type="radio" name="sectorexperience" value="Advantageous" tabindex="17" <?php if ($_POST['sectorexperience'] == 'Advantageous') echo 'checked="checked" ';?>>
	  				 <span class="checkmark"></span>
					</label>
					<label class="advert-tickbox font-white">Not required
	  				 <input type="radio" name="sectorexperience" value="Not required" tabindex="18" <?php if ($_POST['sectorexperience'] == 'Not required') echo 'checked="checked" ';?>>
	  				 <span class="checkmark"></span>
					</label>
	    			<p class="error"><?= $sectorexperience_error ?></p>

	    			<h4 class="bold">Tell us about your company</h4>

	    			<label>
	    			 <p class="advert-para">Please give us a short blurb about the company which will be included in the job advert</p>
	    			 <textarea name="aboutCompany" tabindex="19" required maxlength="1000" placeholder="Maximum 1,000 characters" class="text-style advert-textarea"> 
	    			  <?php  if(isset($_POST['aboutCompany'])) {
	                    echo htmlentities ($_POST['aboutCompany']); }?></textarea>
	                 <p class="error"><?= $aboutCompany_error ?></p>
	    			</label>

	    			<label>
	    			 <p class="advert-para">Attach the company logo. Only jpeg and png files accepted</p>
	    			 <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	                 <input type="file" class="apply-input-form advert-input-form" name="attachedtwo_file" tabindex="19" />
	                 <p class="error"><?php echo $secondfile_msg; ?></p>
	    			</label>

	    			<p class="advert-para-two">Please include the links to your company's social media pages. If you do not have a page on some of the social media sites, please leave blank</p>
	    			<fieldset>
	    			 <input placeholder="Facebook page link" type="text" name="facebookpagelink" value="<?= $facebookpagelink ?>" tabindex="20" class="advert-input width-adj">
	    			</fieldset>
	    			<fieldset>
	    			 <input placeholder="Twitter page link" type="text" name="twitterpagelink" value="<?= $twitterpagelink ?>" tabindex="21" class="advert-input width-adj">
	    			</fieldset>
	    			<fieldset>
	    			 <input placeholder="Linkedin page link" type="text" name="linkedinpagelink" value="<?= $linkedinpagelink ?>" tabindex="22" class="advert-input width-adj">
	    			</fieldset>

					<h4 class="bold">And finally ...</h4>
					
	    			
	    			<label>
	    			 <p class="advert-para-two">The email address that applications can be sent to (this email address is not made public or available to any candidates):</p>
	    			 <input placeholder="Email address" type="text" name="email2" value="<?= $email2 ?>" tabindex="23" class="advert-input width-adj" required minlength="8" maxlength="50">
	                 <p class="error"><?= $email2_error ?></p>
	    			</label>	 

	    			<p class="advert-para-three">Please select your preferred pricing package</p>
	    			<label class="advert-tickbox font-white">Standard - £849 ex VAT
	  				 <input type="radio" name="pricing" value="Standard - £849 ex VAT" tabindex="24" <?php if ($_POST['pricing'] == 'Standard - £849 ex VAT') echo 'checked="checked" ';?>" >
	  				 <span class="checkmark"></span>
					</label>

	    			<label class="advert-tickbox font-white">Popular - £999 ex VAT
	  				 <input type="radio" name="pricing" value="Popular - £999 ex VAT" tabindex="25" <?php if ($_POST['pricing'] == 'Popular - £999 ex VAT') echo 'checked="checked" ';?>" >
	  				 <span class="checkmark"></span>
					</label>

	    			<label class="advert-tickbox font-white">Premium - £1,149 ex VAT
	  				 <input type="radio" name="pricing" value="Premium - £1,149 ex VAT" tabindex="26" <?php if ($_POST['pricing'] == 'Premium - £1,149 ex VAT') echo 'checked="checked" ';?>">
	  				 <span class="checkmark"></span>
					</label>
	    			<p class="error"><?= $pricing_error ?></p> 
	    		
	    			<h4 class="bold">Next steps</h4>
	    			<p class="advert-para">Once you hit the submit button, the form is sent to us. We prepare the advert and send to you for approval. When you are 100% satisifed with the advert, we will ask for payment. Once payment is received, your role will be live for 30 days.</p>
	    			<p class="advert-para">Please confirm that you agree to our <a href="https://www.calxx.co.uk/termsandconditions" target="_blank" class="font-blue link">terms and conditions</a> and <a href="https://www.calxx.co.uk/privacypolicy" target="_blank" class="font-blue link">privacy policy</a></p>
	    			<label class="advert-tickbox font-white">Yes
	  					<input type="radio" name="termsandconditions" value="Yes" tabindex="27" <?php if ($_POST['termsandconditions'] == 'Yes') echo 'checked="checked" ';?>">
	  					<span class="checkmark"></span>
					</label>

	    			<label class="advert-tickbox font-white">No
	  					<input type="radio" name="termsandconditions" value="No" tabindex="28" <?php if ($_POST['termsandconditions'] == 'No') echo 'checked="checked" ';?>">
	  					<span class="checkmark"></span>
					</label>
					<p class="error"><?= $termsandconditions_error ?></p> 

	    			<div class="advert-btn-container">
	    				<button class="basic-btn advert-btn font-white bold"tabindex="29" type="submit" name="submit">Submit</button>
	    			</div>
	    			<p class="error"><?= $submissionmessage ?>
	               	</p>
	    		</form>	    
	    	</section>
    	</section>    	
    </main>

	<section class="cookies-popup-section">
      <div>
        This website is using cookies. We use cookies to improve your experience.
      </div>
      <div>
         By using the site, you consent to the use of these cookies. If you'd like more information, please view our<a href="privacypolicy" target="_blank" class="cookies-link"> Privacy Policy.</a>
      </div>
      <button class="close-cookies-popup">OK</button>
    </section>

    <section class="pre-footer-container font-white">
      <div class="footer-container">
        <div class="social-media-div">
          <ul>
            <li>
              <a class="font-white" href="https://www.facebook.com/calxxcouk/" target="_blank">
                <i class="fa fa-facebook social-media"></i>
              </a>
            </li>
            <li>
              <a class="font-white" href="https://twitter.com/calxxcouk" target="_blank">
                <i class="fa fa-twitter social-media"></i>
              </a>
            </li>
            <li>
              <a class="font-white" href="https://www.linkedin.com/company/11181313" target="_blank">
                <i class="fa fa-linkedin social-media"></i>
              </a>
            </li>
          </ul>
        </div>       
         
        <p class="footer-p bold">It's never been easier to find a new job</p>   
        
      </div>
    </section>

    <footer>
      <nav>
        <ul class="font-white">
          <li><a href="https://www.calxx.co.uk/termsandconditions">Terms and conditions</a></li> |
          <li><a href="https://www.calxx.co.uk/privacypolicy">Privacy Policy</a></li>
        </ul>
      </nav>
      <p class="font-white">2019 &copy <span class="calxx-font">calxx</span></p>
    </footer>


    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/index.js" async></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87751339-3', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>

