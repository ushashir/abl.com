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

            //new codes
            
            //new codes
            $toEmail = 'info@alexanderbernhardtlibrary.com';
            $subject = 'Contact request from'. '' .$name;
            $body = 'Contact Message 
                Name <p>'.$name.'</p>
                Email <p>'.$email.'</p>
                Message <p>'.$message.'</p>
                ';
               $headers = "MIME-Version: 1.0" ."\r\n";
               $headers .= "Content-Type:/html;charset=UTF-8" ."
                //\r\n";
                //Additonal headers
                $headers .= "From: ". ' ' .$name. "<".$email.">". "\r\n";
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Alexander Bernhardt Library</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
    <header id="header-nav" role="banner">
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Alexander Bernhardt Library </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services-section">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inc/register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-section">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navigation -->
    <!--- Image Slider -->
    <div id="slides" class="carousel slides" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bgimg.jpg">
            </div>
            <div class="carousel-item">
                <img src="img/bgimg.jpg">
            </div>
            <div class="carousel-item">
                <img src="img/bgimg.jpg">
            </div>
        </div>

    </div>

    <!--- Jumbotron -->
    <div class="container-fluid">
        <div class="row jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p class="lead">
                    Alexander Bernhardt library is a Special Library whose mission is to
                    disseminate knowledge to interested members of the public through books
                    emanating from the <a href="http://www.alexander-bernhardt.com.ng/">Alexander Bernhardt Publishing
                        Company</a>
                    and other related literature. In addition to this, the library environs are
                    suitable for personal studies, and can be used to that effect.
                </p>
            </div>
        </div>
    </div>


    <!--- Services -->
    <section id="services-section">
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Services </h1>

                    <hr>
                    <div class="col-12">

                        <p class="lead"> We offer condusive study enviroment with matured ambiance. Members of the
                            public
                            can
                            <a href="inc/register.php">register</a> and study at their comfort.</p>
                        <P class="lead">Our library hall with the capacity to accomodate
                            up to 40 persons is also available and can be <a href="inc/renthall.php">rented</a> for seminar
                            presentations,
                            public lectures, toturial sessions or any other academic related event.</P>
                        <P class="lead">
                            We also offer public lecture series tagged <strong>Alexander Bernhardt Library
                                Series</strong>
                        </P>
                    </div>
                </div>

            </div>


            <!---3 Card colum sections -->
            <div class="container-fluid padding">
                <div class="row padding">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">NEWS ALERT</h4>
                                <p class="card-text">The seminar to mark the one year opening of Alexander Bernhardt 
                                Library was succesfully held on the 3rd of August, 2019 with the topic: 'Strive for Independence: 
                                Pathways to Self-reliance' delivered by Mr. Kolapo Lawson (Former Group Chairman EcoBank)</p>
                                <a href="https://www.facebook.com/events/474176280075182/"
                                    class="btn btn-outline-secondary">Read more...</a>
                            </div>
                            <img class="card-imd-top" src="img/seminar1.jpg" alt="photo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <a href="inc/renthall.php">RENT OUR LIBRARY HALL</a> </h4>
                                <p class="card-text">Our library hall with the capacity to accomodate
                                    up to 40 persons is also available and can be Rented for seminar presentations,
                                    public lectures, toturial sessions or any other academic related event.</p>
                                <a href="inc/renthall.php" class="btn btn-outline-secondary">Rent</a>
                            </div>
                            <img class="card-imd-top" src="img/renthall2.jpg" alt="photo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">OPENING/CLOSING HOURS</h4>
                                <p class="card-text">8am - 6pm, Monday - Friday</p>
                                <p class="card-text"> 9pm - 3pm, Saturdays</p>
                                <p class="card-text">Closed, Sunday</p>
                                <p>Note: Events can be booked on Sundays</p>
                                <br> <br>
                                <!-- <a href="#" class="btn btn-outline-secondary">Send us a query</a> -->
                            </div>
                            <img class="card-imd-top" src="img/och.jpg" alt="photo">
                        </div>
                    </div>

                </div>
            </div>


            <!--- abl series Section -->
            <div class="container-fluid padding">
                <div class="row padding">
                    <div class="col-md-12 col-lg-6">
                        <h2>Alexander Bernhardt Library Series</h2>
                        <p>The Alexander Bernhardt Library Series is a special library extension service
                            designed to offer round table discussions on sensitive issues and topics of public interest.
                        </p>
                        <p>A variety of scholars and professional experts are mobilized by the library management
                            to deliberate exhaustively on chosen topics. This program features occasionally in the
                            library
                            hall.</p>

                        <br>
                        <a href="#" class="btn btn-primary">Read more </a>
                    </div>
                    <div class="col-lg-6">
                        <img src="img/ablseries.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
    </section>
    <hr style="border-top: 2px solid #b4b4b4; width: 95%; margin-top: .3rem; margin-bottom: 1rem; ">
    <!--CONTACT SECTION -->
    <section id="contact-section">
        <div class="container-fluid padding">
        <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>

        <?php endif; ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 "
                    data-scrollreveal="enter top and move 100px, wait 0.5s">
                    <div class="text-center">
                        <h1><i class="fa fa-tint small-icons bk-color-black"></i>Contact us Now</h1>
                        <p class="lead">
                            8, Morris Street. Yaba. Lagos - Nigeria.
                        </p>
                    </div>
                </div>


            <!--message us form starts here -->
                <div class="container-fluid padding">
                    <div class="row padding">
                        <div class="col-md-12 col-lg-6">
                        <h3><i class="fa fa-comments small-icons bk-color-red"></i>Message Us Here!</h3>
                        <hr />

                        <!-- variables to collect message entries -->
                     
        
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Name" name="name" 
                                        value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Email address" name="email" 
                                            value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control"
                                            rows="6" cols="25" placeholder="Message"
                                            value="<?php echo isset($_POST['message']) ? $message : ''; ?>"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

 
                    <div class="col-lg-6">
                        <h3><i class="fa fa-comments small-icons bk-color-red"></i>Reach Us Here</h3>
                        <hr />
                        8, Morris Street. Yaba. Lagos - Nigeria.<br />
                        <p><strong> <a href="Tel:+234 813 857 2304">Tel: +234 813 857 2304 </a> </strong></p> <br />
                        Email: info@alexanderbernhardtlibrary.com <br />
                        <h4>Social Media Preferece</h4>
                        <div class="col-12 social padding">
                            <a href="https://www.facebook.com/alexbernlibrary"> <i class="fab fa-facebook"></i> </a>
                            <a href="https://twitter.com/ab_library"> <i class="fab fa-twitter"></i> </a>
                            <a href="#"> <i class="fab fa-google-plus-g"></i> </a>
                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                            <a href="#"> <i class="fab fa-youtube"></i> </a>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- ./ Content div-->
            </div>
        </div>
    </section>
    <!--END CONTACT SECTION -->


    <!--- Footer -->
    <footer>    
                <div class="col-12 text-center">
                    <hr class="light">
                    <h5> All rights reserved. | Alexander Bernhardt Library. &copy; 2019.  Powered by  <a href="http://nawillcorporation.com">nawill</a></h5>
                </div>
          
    </footer>

    <!-- <script src="assets/scripts/custom.js"></script> -->
    
</body>

</html>