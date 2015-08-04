<?php
/* Set e-mail recipient */
$myemail = "becky@digigirls.org";

/* Check all form inputs using check_input function */
$first_name = check_input($_POST['element_1_1'], "First name can't be blank.");
$last_name = check_input($_POST['element_1_2'], "Last name can't be blank.");
$girl_dob_mm = check_input($_POST['element_2_1']);
$girl_dob_dd = check_input($_POST['element_2_2']);
$girl_dob_yy = check_input($_POST['element_2_3']);
$age = check_input($_POST['element_3'], "Age can't be blank.");
$address_1 = check_input($_POST['element_4_1']);
$address_2 = check_input($_POST['element_4_2']);
$city = check_input($_POST['element_4_3']);
$state = check_input($_POST['element_4_4']);
$zip = check_input($_POST['element_4_5']);
$y_sm = check_input($_POST['element_35_1']);
$y_md = check_input($_POST['element_35_2']);
$y_lg = check_input($_POST['element_35_3']);
$y_xl = check_input($_POST['element_35_4']);
$a_sm = check_input($_POST['element_35_5']);
$a_md = check_input($_POST['element_35_6']);
$a_lg = check_input($_POST['element_35_7']);
$a_xl = check_input($_POST['element_35_8']);
$p1_first = check_input($_POST['element_5_1'], "First name of Parent 1 can't be blank.");
$p1_last = check_input($_POST['element_5_2'], "Last name of Parent 1 can't be blank.");
$p1_address_1 = check_input($_POST['element_6_1']);
$p1_address_2 = check_input($_POST['element_6_2']);
$p1_city = check_input($_POST['element_6_3']);
$p1_state = check_input($_POST['element_6_4']);
$p1_zip = check_input($_POST['element_6_5']);
$p1_phone1_1 = check_input($_POST['element_7_1'], "Parent 1 Daytime phone can't be blank.");
$p1_phone1_2 = check_input($_POST['element_7_2'], "Parent 1 Daytime phone can't be blank.");
$p1_phone1_3 = check_input($_POST['element_7_3'], "Parent 1 Daytime phone can't be blank.");
$p1_phone2_1 = check_input($_POST['element_8_1']);
$p1_phone2_2 = check_input($_POST['element_8_2']);
$p1_phone2_3 = check_input($_POST['element_8_3']);
$p1_phone3_1 = check_input($_POST['element_9_1'], "Parent 1 Cell phone can't be blank.");
$p1_phone3_2 = check_input($_POST['element_9_2'], "Parent 1 Cell phone can't be blank.");
$p1_phone3_3 = check_input($_POST['element_9_3'], "Parent 1 Cell phone can't be blank.");
$p1_email = check_input($_POST['element_10']);
$p2_first = check_input($_POST['element_11_1']);
$p2_last = check_input($_POST['element_11_2']);
$p2_address_1 = check_input($_POST['element_12_1']);
$p2_address_2 = check_input($_POST['element_12_2']);
$p2_city = check_input($_POST['element_12_3']);
$p2_state = check_input($_POST['element_12_4']);
$p2_zip = check_input($_POST['element_12_5']);
$p2_phone1_1 = check_input($_POST['element_13_1']);
$p2_phone1_2 = check_input($_POST['element_13_2']);
$p2_phone1_3 = check_input($_POST['element_13_3']);
$p2_phone2_1 = check_input($_POST['element_14_1']);
$p2_phone2_2 = check_input($_POST['element_14_2']);
$p2_phone2_3 = check_input($_POST['element_14_3']);
$p2_phone3_1 = check_input($_POST['element_15_1']);
$p2_phone3_2 = check_input($_POST['element_15_2']);
$p2_phone3_3 = check_input($_POST['element_15_3']);
$p2_email = check_input($_POST['element_16']);
$em1_first = check_input($_POST['element_17_1'], "Emergency contact can't be blank.");
$em1_last = check_input($_POST['element_17_2'], "Emergency contact can't be blank.");
$em1_phone1_1 = check_input($_POST['element_18_1'], "Emergency contact daytime phone can't be blank.");
$em1_phone1_2 = check_input($_POST['element_18_2'], "Emergency contact daytime phone can't be blank.");
$em1_phone1_3 = check_input($_POST['element_18_3'], "Emergency contact daytime phone can't be blank.");
$em1_phone2_1 = check_input($_POST['element_19_1']);
$em1_phone2_2 = check_input($_POST['element_19_2']);
$em1_phone2_3 = check_input($_POST['element_19_3']);
$em1_phone3_1 = check_input($_POST['element_20_1'], "Emergency contact cell phone can't be blank.");
$em1_phone3_2 = check_input($_POST['element_20_2'], "Emergency contact cell phone can't be blank.");
$em1_phone3_3 = check_input($_POST['element_20_3'], "Emergency contact cell phone can't be blank.");
$em1_email = check_input($_POST['element_21']);
$em2_first = check_input($_POST['element_22_1'], "Emergency contact can't be blank.");
$em2_last = check_input($_POST['element_22_2'], "Emergency contact can't be blank.");
$em2_phone1_1 = check_input($_POST['element_23_1'], "Emergency contact daytime phone can't be blank.");
$em2_phone1_2 = check_input($_POST['element_23_2'], "Emergency contact daytime phone can't be blank.");
$em2_phone1_3 = check_input($_POST['element_23_3'], "Emergency contact daytime phone can't be blank.");
$em2_phone2_1 = check_input($_POST['element_24_1']);
$em2_phone2_2 = check_input($_POST['element_24_2']);
$em2_phone2_3 = check_input($_POST['element_24_3']);
$em2_phone3_1 = check_input($_POST['element_25_1'], "Emergency contact cell phone can't be blank.");
$em2_phone3_2 = check_input($_POST['element_25_2'], "Emergency contact cell phone can't be blank.");
$em2_phone3_3 = check_input($_POST['element_25_3'], "Emergency contact cell phone can't be blank.");
$em2_email = check_input($_POST['element_26']);
$auth_pu1_first = check_input($_POST['element_28_1']);
$auth_pu1_last = check_input($_POST['element_28_2']);
$auth_pu1_relation = check_input($_POST['element_29']);
$auth_pu2_first = check_input($_POST['element_30_1']);
$auth_pu2_last = check_input($_POST['element_30_2']);
$auth_pu2_relation = check_input($_POST['element_31']);
$auth_pu3_first = check_input($_POST['element_32_1']);
$auth_pu3_last = check_input($_POST['element_32_2']);
$auth_pu3_relation = check_input($_POST['element_33']);
$photo = check_input($_POST['element_36_1']);
$emergency = check_input($_POST['element_37_1']);
$internet = check_input($_POST['element_38_1']);
$level1 = check_input($_POST['element_39_1']);
$level2 = check_input($_POST['element_39_2']);
$both_shirts = check_input($_POST['element_39_3']);
$signature = check_input($_POST['element_34']);

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $p1_email))
{
show_error("Parent 1 e-mail address is invalid.");
}

/* Let's prepare the message for the e-mail */

$subject = "Registration Form";

$message = "

Someone has completed the registration form:

Name: $first_name $last_name

DOB: $girl_dob_mm/$girl_dob_dd/$girl_dob_yy

Age: $age

Address: $address_1
		 $address_2
		 $city, $state $zip

Shirt Size: 
			YS: - $y_sm
			YM: - $y_md
			YL: - $y_lg
			YXL: - $y_xl
			AS: - $a_sm
			AM: - $a_md
			AL: - $a_lg
			AXL: - $a_xl
 
Parent 1: $p1_first $p1_last

Address: 
	$p1_address_1
 	$p1_address_2
 	$p1_city, $p1_state $p1_zip

Daytime Phone: $p1_phone1_1-$p1_phone1_2-$p1_phone1_3
Home Phone: $p1_phone2_1-$p1_phone2_2-$p1_phone2_3
Cell Phone: $p1_phone3_1-$p1_phone3_2-$p1_phone3_3

Email: $p1_email

Parent 2: $p2_first $p2_last
Address: 
	$p2_address_1
	$p2_address_2
	$p2_city, $p2_state $p1_zip

Daytime Phone: $p2_phone1_1-$p2_phone1_2-$p2_phone1_3
Home Phone: $p2_phone2_1-$p2_phone2_2-$p2_phone2_3
Cell Phone: $p2_phone3_1-$p2_phone3_2-$p2_phone3_3

Email: $p2_email

Emergency Conatct 1: $em1_first $em1_last

Daytime Phone: $em1_phone1_1 - $em1_phone1_2 - $em1_phone1_3
Home Phone: $em1_phone2_1 - $em1_phone2_2 - $em1_phone2_3
Cell Phone: $em1_phone3_1 - $em1_phone3_2 - $em1_phone3_3

Email: $em1_email

Emergency Conatct 2: $em2_first $em2_last

Daytime Phone: $em2_phone1_1 - $em2_phone1_2 - $em2_phone1_3
Home Phone: $em2_phone2_1 - $em2_phone2_2 - $em2_phone2_3
Cell Phone: $em2_phone3_1 - $em2_phone3_2 - $em2_phone3_3

Email: $em2_email

Authorized Pick Up List:

	$auth_pu1_first $auth_pu1_last - $auth_pu1_relation
	$auth_pu2_first $auth_pu2_last - $auth_pu2_relation
	$auth_pu3_first $auth_pu3_last - $auth_pu3_relation

Agrees to Photography Policy: $photo

Agrees to Emergency Medical Treatment: $emergency

Agrees to Internet Usage: $internet

Attending Level 1:  $level1

Attending Level 2:  $level2

Wants Both Shirts:  $both_shirts

Parent's Signature: $signature

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: http://www.digigirls.org/submit.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>
<h1>There was an error with your form submission.</h1>
<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Please the back button and try again.</p>

</body>
</html>
<?php
exit();
}
?>