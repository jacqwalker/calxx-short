<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$firstname_error = $lastname_error = "";
$email_error = $contactnumber_error = $companyname_error = "";

$companyaddress_error = $companywebsite_error = "";
$companysector_error = $numberofyearsPQE_error = $roleterm_error = "";
$roletype_error = $sectorexperience_error = $aboutCompany_error = "";
$email2_error = $pricing_error = ""; 
$termsandconditions_error = "";

$submissionmessage = $first_name = $last_name = $email = $contactnumber = "";
$company_name = $company_address = $company_website = $company_sector = "";

$numberofyearsPQE = $secondfile_msg = "";
$facebookpagelink = $twitterpagelink = "";
$linkedinpagelink = $email2 = $file_msg = "";


if(isset($_POST["submit"])) {
    if (empty($_POST["firstname"])) {
      $firstname_error = "First name is required";
    } else {
      $first_name = test_input($_POST["firstname"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
        $firstname_error = "Only letters allowed";
      }
    }

    if (empty($_POST["lastName"])) {
      $lastname_error = "Last name is required";
    } else {
      $last_name = test_input($_POST["lastName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
        $lastname_error = "Only letters allowed";
      }
    }

    if (empty($_POST["email"])) {
      $email_error = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email format";
      }
    }

    if (empty($_POST["contactnumber"])) {
      $contactnumber_error = "A contact number is required";
    } else {
      $contactnumber = test_input($_POST["contactnumber"]);
      if (!is_numeric($contactnumber)) {
        $contactnumber_error = "Invalid contact number format";
      }
    }
 
    if (empty($_POST["companyname"])) {
      $companyname_error = "The company name is required";
    } else {
      $company_name = test_input($_POST["companyname"]);
    }

    if (empty($_POST["companyaddress"])) {
      $companyaddress_error = "The company address is required";
    } else {
      $company_address = test_input($_POST["companyaddress"]);
    }

    if (empty($_POST["companywebsite"])) {
      $companywebsite_error = "The company website is required";
    } else {
      $company_website = test_input($_POST["companywebsite"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$company_website)) {
        $companywebsite_error = "Invalid website link";
      }
    }

    if (empty($_POST["companysector"])) {
      $companysector_error = "Please fill in the sector";
    } else {
      $company_sector = test_input($_POST["companysector"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$company_sector)) {
        $companysector_error = "Please recheck the submission";
      }
    }

    if (empty($_POST["numberofyearsPQE"])) {
      $numberofyearsPQE_error = "Please fill in the number of years PQE required";
    } else {
      $numberofyearsPQE = test_input($_POST["numberofyearsPQE"]);
    }

    if(isset($_POST["roleterm"])) {
      $roleterm = ($_POST["roleterm"]);
    } else {
      $roleterm_error = "Please select one option";
    } 

    if(isset($_POST["roletype"])) {
      $roletype = ($_POST["roletype"]);
    } else {
      $roletype_error = "Please select one option";
    }

    if(isset($_POST["sectorexperience"])) {
      $sectorexperience = ($_POST["sectorexperience"]);
    } else {
      $sectorexperience_error = "Please select one option";
    }

    if ($_POST["aboutCompany"] == "") {
      $aboutCompany_error = "Please do not leave blank";
    } else {
      $aboutCompany = ($_POST["aboutCompany"]);
    }

    if ($_POST["facebookpagelink"]) {
      $facebookpagelink = ($_POST["facebookpagelink"]);
    }

    if ($_POST["twitterpagelink"]) {
      $twitterpagelink = ($_POST["twitterpagelink"]);
    }

    if ($_POST["linkedinpagelink"]) {
      $linkedinpagelink = ($_POST["linkedinpagelink"]);
    }

    if (empty($_POST["email2"])) {
      $email2_error = "Email is required";
    } else {
      $email2 = test_input($_POST["email2"]);
      // check if e-mail address is well-formed
      if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
        $email2_error = "Invalid email format";
      }
    }

    if(isset($_POST["pricing"])) {
      $pricing = ($_POST["pricing"]);
    } else {
      $pricing_error = "Please select one option";
    } 

    if(isset($_POST["termsandconditions"])) {
      $termsandconditions = ($_POST["termsandconditions"]);
    } else {
      $termsandconditions_error = "Please select one option";
    } 

   if(isset($_FILES['attached_file']) || array_key_exists('attached_file', $_FILES)){
      if ($_FILES['attached_file']['error'] === UPLOAD_ERR_OK) {

        $file_type = $_FILES['attached_file']['type'];

        if(($file_type == 'application/msword') || ($file_type == 'application/pdf') || ($file_type == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
          if($_FILES['attached_file']['size'] > 2000000) {
          $file_msg = "File should not exceed 2MB";
          } else {
          $file_msg = "";
          }
        } else {
          $file_msg = "only MS Word and pdf files can be uploaded";
        }
      } else {
         $file_msg = "Upload failed with error code " . $_FILES['attached_file']['error'];
      }
    }

    // if(!isset($_FILES['attached_file']['error']) ||   is_array($_FILES['attached_file']['error'])) {
    //   $file_msg = "Error with file, please check upload";
    // }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['attached_file']['error']) {
      case UPLOAD_ERR_OK:
      break;
      case UPLOAD_ERR_NO_FILE:
        $file_msg = "No file is uploaded";
      break;
      case UPLOAD_ERR_INI_SIZE:
        $file_msg = "No file is uploaded";
      break;
      case UPLOAD_ERR_FORM_SIZE:
        $file_msg = "File exceeds size limit. Please load a file which is less than 2MB";
      break;
      default:
        $file_msg = "Unknown error, please upload a different file";
      }

      if(isset($_FILES['attachedtwo_file']) || array_key_exists('attachedtwo_file', $_FILES)){
      if ($_FILES['attachedtwo_file']['error'] === UPLOAD_ERR_OK) {

        $file_type = $_FILES['attachedtwo_file']['type'];

        if(($file_type == 'image/jpeg') || ($file_type == 'image/png')) {
          if($_FILES['attachedtwo_file']['size'] > 2000000) {
          $secondfile_msg = "File should not exceed 2MB";
          } else {
          $secondfile_msg = "";
          }
        } else {
          $secondfile_msg = "only jpeg and png files can be uploaded";
        }
      } else {
         $secondfile_msg = "Upload failed with error code " . $_FILES['attached_file']['error'];
      }
    }

    // if(!isset($_FILES['attached_file']['error']) ||   is_array($_FILES['attached_file']['error'])) {
    //   $file_msg = "Error with file, please check upload";
    // }

    // Check $_FILES['upfile']['error'] value.
    switch ($_FILES['attachedtwo_file']['error']) {
      case UPLOAD_ERR_OK:
      break;
      case UPLOAD_ERR_NO_FILE:
        $secondfile_msg = "No file is uploaded";
      break;
      case UPLOAD_ERR_INI_SIZE:
        $secondfile_msg = "No file is uploaded";
      break;
      case UPLOAD_ERR_FORM_SIZE:
        $secondfile_msg = "File exceeds size limit. Please load a file which is less than 2MB";
      break;
      default:
        $secondfile_msg = "Unknown error, please upload a different file";
      }

      if ($firstname_error == "" and $lastname_error == "" and $email_error == "" and $contactnumber_error == "" and $companyname_error == "" and $companyaddress_error == "" and $companywebsite_error == "" and $companysector_error == "" and $numberofyearsPQE_error == "" and $roleterm_error == "" and $roletype_error == "" and $sectorexperience_error == "" and $aboutCompany_error == "" and $email2_error == "" and $pricing_error == "" and $termsandconditions_error == "" and $file_msg == "" and $secondfile_msg == "") {
        require '/home/cluster-sites/5/c/calxx.co.uk/public_html/phpmailer/src/Exception.php';
        require '/home/cluster-sites/5/c/calxx.co.uk/public_html/phpmailer/src/PHPMailer.php';
        require '/home/cluster-sites/5/c/calxx.co.uk/public_html/phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        $configs = include('/home/cluster-sites/5/c/calxx.co.uk/config.php');
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $configs['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $configs['username'];
        $mail->Password = $configs['password'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($email, $first_name ." " . $last_name);
        $mail->addAddress('hello@calxx.co.uk',
         'jackie');
        // $mail->AddBCC('jackie@calxx.co.uk');

        $mail->addAttachment($_FILES['attached_file']['tmp_name'],                 $_FILES['attached_file']['name']);
        $mail->addAttachment($_FILES['attachedtwo_file']['tmp_name'],$_FILES['attachedtwo_file']['name']);


        $mail->isHTML(true);                           // Set email format to HTML
        $mail->Subject = 'We are interested in advertising a role with you';
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->Body = "<h2>Completed form for job posting</h2>"
        ."<h3>Personal information</h3>"
        ."<p>Name: " . $first_name ." " . $last_name ."</p>"
        ."<p>Email address: " . $email ."</p>"
        ."<p>Contact number: " . $contactnumber ."</p>"
        ."<h3>Company information</h3>"
        ."<p>Company: " . $company_name ."</p>"
        ."<p>Company Address: " . $company_address ."</p>"
        ."<p>Company website: " . $company_website ."</p>"
        ."<p>Company sector: " . $company_sector ."</p>"
        ."<h3>Key requirements</h3>"
        ."<p>How many years PQE are you looking for? " . $numberofyearsPQE ."</p>"
        ."<p>Is this job full-time or part-time? " . $roleterm . "</p>"
        ."<p>Is this job permanent or temporary? " . $roletype . "</p>"
        ."<p>Is sector (i.e. retail, media etc): " . $sectorexperience . "</p>"
        ."<p>Tell us about your company: " . $aboutCompany . "</p>"
        ."<p>Facebook page link: " . $facebookpagelink . "</p>"
        ."<p>Twitter page link: " . $twitterpagelink . "</p>"
        ."<p>Linked in page link: " . $linkedinpagelink . "</p>"
        ."<p>The email address applications should be sent to: " . $email2 . "</p>"
        ."<p>The pricing package: " . $pricing . "</p>"
        ."<p>You agree to our terms and conditions: " . $termsandconditions . "</p>";
        
          $mail->send();
          $submissionmessage = "Your form has been sent to us and we will be in touch shortly. If you have any questions please do not hesitate to contact us at hello@calxx.co.uk";

          $mail->clearAddresses();
          $mail->clearBCCs();
          $mail->clearAttachments();

          $mail->setFrom($configs['email'], "From calxx");
          $mail->addAddress($email, $first_name);

          $mail->isHTML(true);                           // Set email format to HTML
          $mail->Subject = 'Enquiry';
          // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
          // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
          $mail->Body = "<p>Dear " . $first_name .",</p>"
          ."<p>Thank you for your interest in advertising a role on calxx.</p>"
          ."<p>
          We have received your form and will prepare the role and send to you for approval within 24 hours.
          </p>"
          ."<p>If you have any questions, please do not hesitate to contact us either by replying to this email or you can contact Jackie at jackie@calxx.co.uk</p>"
          ."<p>Kind regards,</p>"
          ."<p>The calxx team</p>"
          ."<p>Calxx Limited, Registered in England and Wales. Company No 10852628. 37 Voltaire Building, 330 Garratt Lane, SW18 4FQ</p>";
          $mail->send();

          
          $first_name = $last_name = $email = $contactnumber = $company_name = ""; 
          $company_address = $company_website = "";
          $company_sector = $numberofyearsPQE = "";
          $aboutCompany = $facebookpagelink = $twitterpagelink = $linkedinpagelink = "";
          $email2 = "";
          $_POST = array();
      } else {
        $submissionmessage = "There was an error with your form submission, please make sure all the fields are correctly populated";
      }
  
  // var_dump($_FILES);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
