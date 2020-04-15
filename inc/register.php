<<<<<<< HEAD:inc/register.php
<?php
//message variables
$msg = '';
$msgClass = '';
if(filter_has_var(INPUT_POST, 'submit')) {
    //get form data          
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    //validation
    if(!empty($email) && !empty($name) &&  !empty($message)){
        //if passed
        // validate e-mail
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ){
            //failed
            $msg = 'Please fill in all the fields';
            $msgClass = 'alert-danger';

        } else {
            //passed
            //recipient email
            $toEmail = 'info@alexanderbernhardtlibrary.com';
            $subject = 'Contact request from' .$name;
            $body = '<h2> Contact Message </h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
                ';
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:/html;charset=UTF-8" ."
                \r\n";
                //Additonal headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";
                if(mail($toEmail, $subject, $body, $headers)){
                    //Email Sent
                    $msg = 'Message succesfully sent';
                    $msgClass = 'alert-success';
                } else {

                } 
            }
        } else {
              //Failed mail
              $msg = 'Your email has not been sent';
              $msgClass = 'alert-danger';

        }           
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="style.css" rel="stylesheet">
 
  <title>Registration  | Alexander Bernhardt Library </title>
  
</head>
<body>

<?php include 'header.php'?>

  <!-- registration form starts here -->
  <div class="container">
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Fill the form below to Register!</h4> <br>
            <div style="color: red">
              <h5> Important!</h5>
            </div>
            <h6>
              <a href="termsAndConditions.php" target="_blank">
                Read Our Terms and Conditions here!</a>
            </h6>

          </div>
        </div>
        <div class="panel-body">
          <form role="form">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" required name="first_name" id="first_name" class="form-control input-sm"
                    placeholder="First Name">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" required name="last_name" id="last_name" class="form-control input-sm"
                    placeholder="Last Name">
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="Number" required name="phone " class="form-control input-sm" placeholder="Phone Number" />
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
            </div>

            <div class="form-group">
              <p> Gender <input type="radio" name="Gender" id="Gender" value="Male"> Male <input type="radio"
                  name="Gender" value="Female"> Female </p>
            </div>

            <div class="form-group">
              Educational Qualification: <input type="radio" name="qualification" class="qualification" value="O Level">
              O-Level
              <input type="radio" name="qualification" class="qualification" value="Undergraduate"> Under-Graduate
              <input type="radio" name="qualification" class="qualification" value="Post Graduate"> Post-Graduate

            </div>

            <div class="form-group">
              <input type="text" required name="Occupation" id="occupation" class="form-control input-sm"
                placeholder="Occupation">
            </div>

            <div class="form-group">
              <input type="text" required name="address" id="address" class="form-control input-sm"
                placeholder="Address">
            </div>

            <strong>(To be Completed by Students Only).</strong>
            <hr>

            <div class="form-group">
              <input type="text" name="Name of Institution" class="form-control input-sm"
                placeholder="Name of Institution">
            </div>
            <div class="form-group">
              <input type="text" name="Course of Study" class="form-control input-sm" placeholder="Course of Study">
            </div>
            <div class="form-group">
              <input type="text" name="Faculty/Department" class="form-control input-sm"
                placeholder="Faculty/Department">
            </div>
            <div class="form-group">
              <input type="text" name="School Registration Number" class="form-control input-sm"
                placeholder="School Reg. No">
            </div>
            <div class="form-group">
              <input type="text" name="Year of Study" class="form-control input-sm" placeholder="Year of Study">
            </div>
            <div class="form-group">
              <input type="text" name="Possible Year of Graduation" class="form-control input-sm"
                placeholder="Possible year of Graduation">
            </div>

            <hr>

            <p><input type="checkbox" required> The information above is truly mine.</p>
              <p><input type="checkbox" required> I have read and understood the terms and conditions guiding the
                use of Alexander Bernhardt Library as highlighted in the user guide.</p>
                <p><input type="checkbox" required> I have agreed to adhere strictly by them.</p>


        </div>

        <input type="submit" value="Register" class="btn btn-info btn-block">
        </form> <br> <br>
        <a href="index.php"><strong>Back to Home</strong> </a>
      </div>
    </div>
  </div>
  </div>
  </div>

<?php include 'footer.php' ?>

  
</body>
</html>

  <!-- Include a script programme that will enable the registrant to print registration online-->

=======
<?php
//message variables
$msg = '';
$msgClass = '';
if(filter_has_var(INPUT_POST, 'submit')) {
    //get form data          
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    //validation
    if(!empty($email) && !empty($name) &&  !empty($message)){
        //if passed
        // validate e-mail
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false ){
            //failed
            $msg = 'Please fill in all the fields';
            $msgClass = 'alert-danger';

        } else {
            //passed
            //recipient email
            $toEmail = 'info@alexanderbernhardtlibrary.com';
            $subject = 'Contact request from' .$name;
            $body = '<h2> Contact Message </h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>
                ';
                $headers = "MIME-Version: 1.0" ."\r\n";
                $headers .= "Content-Type:/html;charset=UTF-8" ."
                \r\n";
                //Additonal headers
                $headers .= "From: " .$name. "<".$email.">". "\r\n";
                if(mail($toEmail, $subject, $body, $headers)){
                    //Email Sent
                    $msg = 'Message succesfully sent';
                    $msgClass = 'alert-success';
                } else {

                } 
            }
        } else {
              //Failed mail
              $msg = 'Your email has not been sent';
              $msgClass = 'alert-danger';

        }           
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="style.css" rel="stylesheet">
 
  <title>Registration  | Alexander Bernhardt Library </title>
</head>
<body>

<?php include 'header.php'?>
  <br>  <br>  <br>  <br>


  <!-- registration form starts here -->
  <div class="container">
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Fill the form below to Register!</h4> <br>
            <div style="color: red">
              <h5> Important!</h5>
            </div>
            <h6>
              <a href="http://s000.tinyupload.com/index.php?file_id=68063246234023313327" target="_blank">
                Read Our Terms and Conditions here!</a>
            </h6>

          </div>
        </div>
        <div class="panel-body">
          <form role="form">
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" required name="first_name" id="first_name" class="form-control input-sm"
                    placeholder="First Name">
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" required name="last_name" id="last_name" class="form-control input-sm"
                    placeholder="Last Name">
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="Number" required name="phone " class="form-control input-sm" placeholder="Phone Number" />
            </div>

            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
            </div>

            <div class="form-group">
              <p> Gender <input type="radio" name="Gender" id="Gender" value="Male"> Male <input type="radio"
                  name="Gender" value="Female"> Female </p>
            </div>

            <div class="form-group">
              Educational Qualification: <input type="radio" name="qualification" class="qualification" value="O Level">
              O-Level
              <input type="radio" name="qualification" class="qualification" value="Undergraduate"> Under-Graduate
              <input type="radio" name="qualification" class="qualification" value="Post Graduate"> Post-Graduate

            </div>

            <div class="form-group">
              <input type="text" required name="Occupation" id="occupation" class="form-control input-sm"
                placeholder="Occupation">
            </div>

            <div class="form-group">
              <input type="text" required name="address" id="address" class="form-control input-sm"
                placeholder="Address">
            </div>

            <strong>(To be Completed by Students Only).</strong>
            <hr>

            <div class="form-group">
              <input type="text" name="Name of Institution" class="form-control input-sm"
                placeholder="Name of Institution">
            </div>
            <div class="form-group">
              <input type="text" name="Course of Study" class="form-control input-sm" placeholder="Course of Study">
            </div>
            <div class="form-group">
              <input type="text" name="Faculty/Department" class="form-control input-sm"
                placeholder="Faculty/Department">
            </div>
            <div class="form-group">
              <input type="text" name="School Registration Number" class="form-control input-sm"
                placeholder="School Reg. No">
            </div>
            <div class="form-group">
              <input type="text" name="Year of Study" class="form-control input-sm" placeholder="Year of Study">
            </div>
            <div class="form-group">
              <input type="text" name="Possible Year of Graduation" class="form-control input-sm"
                placeholder="Possible year of Graduation">
            </div>

            <hr>

            <p><input type="checkbox" required> The information above is truly mine.</p>
              <p><input type="checkbox" required> I have read and understood the terms and conditions guiding the
                use of Alexander Bernhardt Library as highlighted in the user guide.</p>
                <p><input type="checkbox" required> I have agreed to adhere strictly by them.</p>


        </div>

        <input type="submit" value="Register" class="btn btn-info btn-block">
        </form> <br> <br>
        <a href="index.php"><strong>Return to Home Page</strong> </a>
      </div>
    </div>
  </div>
  </div>
  </div>

<?php include 'footer.php' ?>

  
</body>
</html>

  <!-- Include a script programme that will enable the registrant to print registration online-->

>>>>>>> 4ec85b42099e0eebc51327d46e31976a8960ecb3:register.php
