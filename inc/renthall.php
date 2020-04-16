<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="no-js no-svg">

<head>

    <title>Rent Hall | Alexander Bernhardt Library</title>

    <!-- Boostra CDN Here-->


    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <link href="inc/style.css" rel="stylesheet">
 

</head>

<body>
<?php include 'header.php'?>
   

    <br>


    <!-- registration form starts here -->
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Fill the form below to Book for Hall Space!</small></h3> <br>
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
                            <input type="number" required name="phone " class="form-control input-sm"
                                placeholder="Phone Number" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm"
                                placeholder="Email Address">
                        </div>

                        <div class="form-group">
                            <input type="text"  name="Organisation" id="Organisation"
                                class="form-control input-sm" placeholder="Organisation (Optional)">
                        </div>

                        <div class="form-group">
                            <input type="text-box" required name="Nature_of_Event" id="Nature_of_Event"
                                class="form-control input-sm" placeholder="Nature of Event">
                        </div>

                        <input type="text-box" required name="Scheduled Date" id="Scheduled Date"
                            class="form-control input-sm" placeholder="Scheduled Date">
                </div>


                <hr>

            <input type="submit" value="Rent" class="btn btn-info btn-block">
            </form> <br> <br>

            <a href="../index.php"><strong>Return Home</strong> </a>
        </div>
    </div>
    </div>
    </div>
    </div>

    <?php include 'footer.php' ?>

    <!-- Include a script programme that will enable the registrant to print registration online-->
   
</body>

</html>