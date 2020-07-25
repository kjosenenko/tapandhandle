<?php

$responseModal = "";
$error = "";

if ($_POST) {

    if (!$_POST["firstName"] || !$_POST["lastName"]) {

        $error .= "A first & last name is required.<br>";

    }

    if (!$_POST["email"]) {

        $error .= "An email address is required.<br>";

    }

    if (!$_POST["phone"]) {

        $error .= "A phone number is required.<br>";

    }

    if (!$_POST["subject"]) {

        $error .= "An event description is required.<br>";

    }

    if ($error != "") {

        $error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form:</strong><br>' . $error . '</div>';
        $responseModal = '<script type=\'text/javascript\'>
        $(document).ready(function(){
        $(\'#errorModal\').modal(\'show\');
        }); </script>';

    } else {

    $emailTo = "katie@tapandhandle.com";
    $subject = "New Event Request";
    $body = 
        "Name: ".$_POST['firstName']." ".$_POST['lastName']."\nEmail: ".$_POST['email']."\nPhone: ".$_POST['phone']."\nDate: ".$_POST['month']."/".$_POST['day']."/".$_POST['year']."\nDescription: ".$_POST['subject'];
    $headers = "Reply-To: ".$_POST['email'].
                "\r\nX-Mailer: PHP/". phpversion();
    if (mail($emailTo, $subject, $body, $headers)) {

        $responseModal = '<script type=\'text/javascript\'>
    $(document).ready(function(){
    $(\'#successModal\').modal(\'show\');
    }); </script>';

    } else {

        $error = '<div class="alert alert-danger" role="alert"><strong>Your message could not be delivered - please try again later.</strong></div>';
        $responseModal = '<script type=\'text/javascript\'>
    $(document).ready(function(){
    $(\'#errorModal\').modal(\'show\');
    }); </script>';

    }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="styles.css">

    <link rel="icon" href="logo.png">

    <title>Host Your Event - Tap and Handle</title>
</head>
<body>
<div class="container">
    <div class="jumbotron text-center double">
        <a href="index.php"><img src="logo.png"></a><br><br>
        <h3>74 ROTATING TAPS OF ALES, LAGERS, AND MORE</h3>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="draftlist.php">DRAFT & BOTTLE LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="music.php">UPCOMING EVENTS & LIVE MUSIC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="event.php">HOST YOUR EVENT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <hr class="my-4">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-4">
                        <a href="https://untappd.com/v/tap-n-handle/171380" target="_blank" <i class="fab fa-untappd fa-2x"></i></a>
                    </div>
                    <div class="col-4">
                        <a href="https://www.facebook.com/TapandHandle/?fref=ts" target="_blank" class="fab fa-facebook-f fa-2x"></a>
                    </div>
                    <div class="col-4">
                        <a href="https://www.instagram.com/tapandhandlefoco/" target="_blank" class="fab fa-instagram fa-2x"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <div class="jumbotron double">
        <div class="container text-center">
            <h1>Host your party at one of the country's top 100 beer bars!</h1><br>
            <div class="container">
                <img src="IMG_3715.jpg" class="img-fluid" alt="Responsive image">
            </div>
            <br>
            <h2>Perfect for Holiday Gatherings</h2><br>
            <p>Enjoy 74 rotating taps of the world’s best ales, lagers, ciders, and wines in Old Town Fort Collins, Colorado. Tap and Handle offers three environments for you to enjoy the best in craft beer: The front bar with a buzzing beer bar atmosphere, the best patio in Old Town, and a quiet upstairs seating area. We also have a parking lot for the designated driver.<br><br>
                
            <img src="event.jpeg" class="img-fluid" alt="Responsive image">
        <br><br>
        <b>There is no fee or minimum purchase to reserve space at Tap and Handle.</b>
            <br><br>
                Regardless of your party size, we have the perfect fit for food, drink, and space at Tap and Handle. We can craft a unique menu to work for you, but here are a couple of examples that have worked for other parties in the past.  Please contact Tap and Handle or fill out the form below to get more details and pricing.</p>
        </div>
        <div class="container text-center">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2 class="whiteSpace">Buffet Style <i class="fa" aria-hidden="true"></i></h2>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <h3>Appetizers (Choose 1)</h3><br>
                            <p><b>Chips & Queso</b><br><br>
                                <b>Fresh Veggie Tray</b><br>
                                Served with ranch<br><br>
                                <b>Tap & Hummus</b><br>
                                Garbanzo beans, spices and IPA. Served with grilled pita and fresh veggiesaccusamus labore sustainable VHS.</p><br><br>
                            <h3>Salad</h3><br>
                            <p><b>Garden Salad</b><br>
                                w/ choice of balsamic or ranch dressing</p><br><br>
                            <h3>Entree (Choose 2)</h3><br>
                            <p>Served with Fries – add parmesan cheese and truffle oil for an additional .50 per guest<br><br>
                                <b>Mac & Cheese</b><br>
                                Penne pasta covered in our homemade cheese sauce, served with garlic bread & bacon<br><br>
                                <b>BBQ Sriracha Pork or Chicken Tacos</b><br>
                                Corn or flour tortilla, guacamole, pico de gallo, cheddar, green tomatillo salsa<br><br>
                                <b>Wings</b><br>
                                Chicken wings with ranch or blue cheese and your choice of dipping sauce<br><br>
                                <b>Tap and Handle Burger</b><br>
                                Grilled half pound ground Colorado angus beef patty stacked on a brioche bun with lettuce & tomato<br><br>
                                <b>Sriracha BBQ Port Slider - 3 per person</b><br>
                                Shredded pork tossed in BBQ Sriracha, topped with coleslaw</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="whiteSpace">Appetizer only (Serves 25-30) <i class="fa" aria-hidden="true"></i></h2>
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <h3>APPETIZER ONLY (SERVES 25 - 30)</h3><br>
                            <p><b>Wings</b><br>
                                Served with ranch or bleu cheese and tossed in the house made sauce of your choice<br>
                                $85 (100 wings)<br><br>
                                <b>Tap & Hummus</b><br>
                                Garbanzo beans, spices and IPA. Served with grilled pita and fresh veggies<br>
                                $80<br><br>
                                <b>BBQ Sriracha Pork or Chicken Tacos</b><br>
                                Corn or flour tortilla, guacamole, pico de gallo, cheddar, green tomatillo salsa<br>
                                $80<br><br>
                                <b>Chips & Queso</b><br>
                                $60<br><br>
                                <b>Fries</b><br>
                                $40 (add parmesan cheese and truffle oil for an additional $15)<br><br>
                                <b>Fresh Veggie Tray with Ranch</b><br>
                                $40</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <label class="container-fluid">Name*
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="firstName" id="firstName">
                                <small class="form-text text-muted">First Name</small>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="lastName" id="lastName">
                                <small class="form-text text-muted">Last Name</small>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="form-group container-fluid">
                    <div class="form-row">
                        <div class="col">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="col">
                            <label for="phone">Phone*</label>
                            <input type="tel" class="form-control" name="phone" id="phone">
                        </div>
                    </div>
                </div>
                <div class="form-group container-fluid">
                    <label for="subject">Short Description of Event*</label>
                    <textarea class="form-control" name="subject" id="subject" rows="3"></textarea>
                </div>
                <div class="form-group container-fluid">
                    <div class="form-row">
                        <div class="col-lg-4">
                            <label>What's Your Event Date?
                                <div class="form-row">
                                    <div class="col-3">
                                        <input type="text" class="form-control" name="month" id="month">
                                        <small class="form-text text-muted">MM</small>
                                    </div>
                                    <div class="col-3">
                                        <input type="text" class="form-control" name="day" id="day">
                                        <small class="form-text text-muted">DD</small>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="year" id="year">
                                        <small class="form-text text-muted">YYYY</small>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>
            </form>
        </div>
        
    </div>
    <div id="footer" class="text-center double">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="https://Tapandhandle.us15.list-manage.com/subscribe/post?u=bf793e5a27e92e9f2b43f0a00&amp;id=39141699c5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div class="form-group">
                            <label for="mce-EMAIL">Don't miss our events, tappings, and more.</label>
                            <input type="email" value="" name="EMAIL" id="mce-EMAIL" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline-dark"">
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
            <p>Su-Th: 11:30AM-12:00AM | Fri-Sat: 11:30AM-2:00AM | <a href="https://www.google.com/maps/place/Tap+and+Handle/@40.58373,-105.0797202,17z/data=!3m1!4b1!4m5!3m4!1s0x87694af5bd7b41ed:0x19abda5ca50d8877!8m2!3d40.58373!4d-105.0775315" target="_blank">307 S College Ave, Fort Collins, C0 80524</a> | <a href="tel:970-484-1116">970-484-1116</a></p>
        </div>
        <small class="form-text text-muted">This site was built by <a href="http://centerlineweb.com/" target="_blank">Center Line Web</a></small>
    </div>
</div>

<? echo $responseModal; ?>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="alert alert-success" role="alert">Your message was sent, we'll get back to you ASAP!</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <? echo $error ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</body>
</html>