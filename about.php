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

    if (!$_POST["subject"]) {

        $error .= "You did not type a message.<br>";

    }

    if ($error != "") {

        $error = '<div class="alert alert-danger" role="alert"><strong>There were error(s) in your form:</strong><br>' . $error . '</div>';
        $responseModal = '<script type=\'text/javascript\'>
        $(document).ready(function(){
        $(\'#errorModal\').modal(\'show\');
        }); </script>';

    } else {

    $emailTo = "katie@tapandhandle.com";
    $subject = "Contact Form Submission";
    $body = "Name: ".$_POST['firstName']." ".$_POST['lastName']."\nEmail: ".$_POST['email']."\nMessage: ".$_POST['subject'];
    $headers = "Reply-To: ".$_POST['email'].
                "\r\nX-Mailer: PHP/". phpversion();
    if (mail($emailTo, $subject, $body, $headers)) {

        $responseModal = '<script type=\'text/javascript\'>
    $(document).ready(function(){
    $(\'#successModal\').modal(\'show\');
    }); </script>';

    } else {

        $error = '<div class="alert alert-danger" role="alert"><strong>You message could not be delivered - please try again later.</strong></div>';
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

    <link rel="icon" href="logo.png">

    <title>About - Tap and Handle</title>
</head>
<body>
<div class="container">
    <div class="jumbotron text-center double">
        <a href="index.php"><img src="logo.png"></a><br><br>
        <h3>New Web Site Coming Soon!</h3>
        <hr class="my-4">
    </div>
    <div class="jumbotron double">
        <div class="container">
            <h4>Contact Us</h4>
            <p>Want to rent out our private space? Have feedback on your experience? We would love to hear about it. </p>
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
                    <label for="email">Email*</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group container-fluid">
                    <label for="subject">Message*</label>
                    <textarea class="form-control" name="subject" id="subject" rows="3"></textarea>
                </div>
                <div class="container-fluid">
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div id="footer" class="text-center double">
        <div class="container">
            <br>
            <p>Su-Th: 11:30AM-12:00AM | Fri-Sat: 11:30AM-2:00AM | <a href="https://www.google.com/maps/place/Tap+and+Handle/@40.58373,-105.0797202,17z/data=!3m1!4b1!4m5!3m4!1s0x87694af5bd7b41ed:0x19abda5ca50d8877!8m2!3d40.58373!4d-105.0775315" target="_blank">307 S College Ave, Fort Collins, C0 80524</a> | <a href="tel:970-484-1116">970-484-1116</a></p>
        </div>
    </div>
</div>

<? echo $responseModal; ?>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQf6B5fZY9mJaSuHZ12SS2tuFomMgn8ag&callback=initMap" async defer></script>
</body>
</html>