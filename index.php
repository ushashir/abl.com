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

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Alexander Bernhardt Library</title>
    <meta name="description" content="The Official Website of Alexander Bernhardt Library located at 8, Morris Street. Lagos - Nigeria. An initiative of <a href="https://alexander-bernhardt.com.ng/home">Alexander Bernhardt Grail Publishing Company</a>">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!--custume css-->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>


<!-- Navigation -->
    <header id="header-nav" role="banner">
        <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://www.alexanderbernhardtlibrary.com/">Alexander Bernhardt Library </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#services-section">All</a>
                        <a class="dropdown-item" href="#">Library Resources</a>
                        <a class="dropdown-item" href="#">Library Facilities</a>
                        <a class="dropdown-item" href="https://www.google.com/search?q=alexander+bernhardt+library&oq=ale&aqs=chrome.2.69i60j69i57j69i59l2j0j69i60l3.5952j0j4&sourceid=chrome&ie=UTF-8#lrd=0x103b8d22f0c7b65b:0x6561c8c28a7b0da7,1,,," target="_blank">Reviews</a>
                        </div>
                         <li class="nav-item">
                            <a class="nav-link" href="inc/eresources/eresources.php">E-
                            Resources</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inc/register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://alexanderbernhardtlibrary.com/Blog/" target="_blank">Blog</a>
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
                    
                    Alexander Bernhardt Library is an initiative of <a href="http://www.alexander-bernhardt.com.ng/">Alexander Bernhardt Publishing
                        Company</a>. The Library is committed to making available books emanating from <a href="http://www.alexander-bernhardt.com.ng/">Alexander Bernhardt Publishing Company</a> to general members of the public. In addition to this, the library environs are suitable for personal studies, and can be used to that effect by <a href="inc/register.php">register</a>ed members of the public.
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
                                <h4 class="card-title"> <a href="https://alexanderbernhardtlibrary.com/Blog/">NEWS ALERT</a> </h4>
                                <p class="card-text"><b>COVID-19: LIBRARY SHUT DOWN TO CONTINUE. </b> <br> The library will continue to be shut down pending when the general lock down from government is over. It will be recalled that the ...
</p>
                               <a href="https://alexanderbernhardtlibrary.com/Blog/2020/04/13/covid-19-library-shut-down-to-continue/" 
                                    class="btn btn-outline-secondary">Read More here...</a> 
                            </div>
                            <img class="card-imd-top" src="img/library_charges.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> <a href="https://alexanderbernhardtlibrary.com/Blog/2020/01/11/rent-a-portable-place-for-your-conference/">RENT OUR LIBRARY HALL</a> </h4>
                                <p class="card-text">Our library hall with the capacity to accommodate
                                    up to 40 persons is also available and can be Rented for seminar presentations,
                                    public lectures, toturial sessions or any other academic related event.</p>
                                <a href="inc/renthall.php" class="btn btn-outline-secondary">Rent Here</a>
                            </div>
                            <img class="card-imd-top" src="img/renthall2.jpg" alt="photo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">OPENING/CLOSING HOURS</h4>
                                <p class="card-text">8am - 6pm, Monday - Friday</p>
                                <p class="card-text"> 9am - 3pm, Saturdays</p>
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
                        <a href="https://alexanderbernhardtlibrary.com/Blog/2019/12/12/alexander-bernhardt-library-series/" class="btn btn-primary">Read more </a>
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
                            <!--<a href="#"> <i class="fab fa-google-plus-g"></i> </a>-->
                            <!--<a href="#"> <i class="fab fa-instagram"></i> </a>-->
                            <!--<a href="#"> <i class="fab fa-youtube"></i> </a>-->
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
            <div class="container">
                <div class="row">
                  <div class="col">
                  <strong><p>SOCIAL</p></strong>
                    <a href="#"> <i class="fab fa-facebook"></i> </a>
                    <br>
                    <a href="#"> <i class="fab fa-twitter"></i> </a>
                    <!-- <a href="#"> <i class="fab fa-instagram"></i> </a>
                    <a href="#"> <i class="fab fa-youtube"></i> </a> -->
                  </div>
                  <div class="col">
                    <p><strong>EXPLORE LINKS</strong> </p> 
                    <a href="index.php">Home</a> <br> 
                    <a href="#services">Services</a> <br>
                    <a href="inc/eresources.php">E-Resources</a> <br>
                    <br>     
                  </div>
                  <div class="col">
                      <br>
                      <br>
                    <a href="inc/register.php">Register</a> <br>
                    <a href="https://alexanderbernhardtlibrary.com/Blog/"target="_blank">Blog</a> <br>
                    <a href="https://www.google.com/search?q=alexander+bernhardt+library&oq=a&aqs=chrome.
                    1.69i60j69i59l2j69i60l2j5l3.5021j0j7&sourceid=chrome&ie=UTF-8#lrd=0x103b8d22f0c7b65b:0x6561c8c28a7b0da7,1,,," 
                    target="_blank">Reviews</a> 
                    <br>
                </div>
                  <div class="col">
                    <strong><p>CONTACTS</p></strong>
                    <p><img src="img/f-address.png" alt="image">8 Morris Street. Yaba. Lagos - Nigeria</p>
                    <p><img src="img/f-phone.png" alt="image">+234 813 857 2304</p>
                    <p><img src="img/f-mail.png" alt="image">info@alexanderbernhardtlibrary.com</p>
                    <p><img src="img/f-hours.png" alt="image">Mon - Sat: 8am - 6pm</p>
                  </div>
                </div>
                <br>
                <h5> All rights reserved. | Alexander Bernhardt Library. &copy; 2019.  Powered by  <a href="http://nawipedia.com">nawill</a></h5>
    </footer>  

    <!-- <script src="assets/scripts/custom.js"></script> -->
    
</body>

</html>