<?php include('header.php'); 
require 'PHPMailer/PHPMailerAutoload.php';
if(isset($_POST['send_mail']))
{
	$email=$_POST['email'];
	
    

    $password=rand(0,999999);
	//$message = $captcha_code;

	// creating the phpmailer object
	$mail = new PHPMailer(true);

	// telling the class to use SMTP
	$mail->IsSMTP();

	// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
	$mail->SMTPDebug = 0;

	// enable SMTP authentication
	$mail->SMTPAuth = true;

	// sets the prefix to the server
	$mail->SMTPSecure = 'ssl';

	// sets GMAIL as the SMTP server
	$mail->Host = 'ssl://smtp.gmail.com';

	// set the SMTP port for the GMAIL server
	$mail->Port = 587;

	// your gmail address
	$mail->Username = 'sapanamathur12@gmail.com';

	// your password must be enclosed in single quotes
	$mail->Password = 'sapana@12m';

	// add a subject line
	$mail->Subject = 'New Password for the User ';

	// Sender email address and name
	$mail->SetFrom('sapanamathur12@gmail.com', 'Aj');

	$email1=$email;
	// reciever address, person you want to send
	$mail->AddAddress($email1);

	// if your send to multiple person add this line again
	//$mail->AddAddress('tosend@domain.com');

	// if you want to send a carbon copy
	//$mail->AddCC('tosend@domain.com');


	// if you want to send a blind carbon copy
	//$mail->AddBCC('tosend@domain.com');

	// add message body
	$mail->MsgHTML("Your New Password is :=  ".$password);


	// add attachment if any
	//$mail->AddAttachment('time.png');

	try {
	// send mail


	$mail->Send();
	$msg = "Mail send successfully";

	} catch (phpmailerException $e) {
	$msg = $e->getMessage();
	} catch (Exception $e) {
	$msg = $e->getMessage();
	}
 echo $msg;
}

?>

    <!-- Mobile Header -->
    <header class="mobile-header">
        <div class="panel-control-left"><a class="toggle-menu" href="#side_menu"><i class="fa fa-bars"></i></a></div>
        <div class="page_title">
            <a href="index.html"><img src="assets/img/logo.png" alt="Logo" class="img-responsive" width="60" height="60"></a>
        </div>
    </header>

    <div class="main-content account-content">
        <div class="content">
            <div class="container">
                <div class="account-box">
                    <form class="form-signin" method="POST">
                        <div class="account-title">
                            <h3>Forgot Password</h3>
                        </div>
                        <div class="form-group">
                            <label>Enter Your Email</label>
                            <input type="text" name="email" class="form-control" autofocus>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit" name="send_mail">Reset Password</button>
						</div>
						
                        <div class="text-center register-link">
                            <a href="login.php">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php'); ?>