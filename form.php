<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gary's Carwash | Submitted Form</title>
    <link rel="stylesheet" href="./php.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <script src="./jquery-3.6.0.min.js"></script>
</head>
<body>
    <main>
<div id="php-page">
    <img class="background-img" src="./img/background.jpg" alt="">
    <div class="container">
    
    <?php

    
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $cardNum = $_POST['card-num'];
        $location = $_POST['location'];
        $malfunction = $_POST['malfunction'];
        $line1 = $_POST['line-1'];
        $line2 = $_POST['line-2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $refund = $_POST['refund'];

        function IsInjected($str) {
            $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
            $inject = join('|', $injections);
            $inject = "/$inject/i";
    
            if(preg_match($inject,$str))
            {
              return true;
            }
            else
            {
              return false;
            }
        }

        if(IsInjected($visitor_email)) {
            echo "Bad email value!";
            exit;
        }


        $to = "general@garyscarwash.com";
        $subject = "Form Submission";
        $message = "Name: ".$fname."\n"."Email: ".$email."\n"."Card Number: ".$cardNum."\n"."Location: ".$location."\n"."Malfunction: ".$malfunction."\n"."Line 1: ".$line1."\n"."Line 2: ".$line2."\n"."City: ".$city."\n"."State: ".$state."\n"."Zip: ".$zip."\n"."Refund Amount: ".$refund."\n";
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Thank you for your submission!</h1>";
        } else {
            echo "<h1>Not Poggers</h1>";
        }
        
    }

?>
    <a href="./index.html">
        <button>go back</button>
    </a>
    </div>
    </div>
</main>
</body>
</html>