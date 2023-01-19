<?php
session_start();

include 'tools.php';


if (isset($_POST["lastPageID"])) {
// hole den Nammen der letzten Seite aus $_POST "lastPageID"
$lastPageID = $_POST["lastPageID"];

// Speichere alle Daten des letzten Posts mit den Namen $lastPageID in der Session
$_SESSION["$lastPageID"] = $_POST;

}

//DEVONLY: GIB DIE AKTUELLE $_SESSION in die Seite aus.

prettyPrint($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Activity Survey Question 10</title>

    <!--Start Google Fonts Ubuntu Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!--End Google Fonts Ubuntu Link-->

    <!--Start Bootstrap CDN CSS and JavaScript Link-->
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!--End Bootstrap CDN CSS and JavaScript Link-->

     <!--Start CSS External-->

    <link rel="stylesheet" href="css/styles.css">


    <!--End CSS External-->

</head>
<body class="d-flex flex-column min-vh-100">


 <!--Start Integrate Header PHP -->
 <?php include "header.php"; ?>
<!--End Integrate Header PHP -->

<section class="page-section" id="quest">
        <div class="container">
<!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><p>Thank You</p><br>for your participation, here you will find your evaluation. If you need more information or want to make a booking for your next vacation directly. Use our contact form and we will get in touch with you.</h2>
<!-- Icon Divider-->
                    
<?php
$activityCounts = array(1 => 0, 2 => 0, 3 => 0);
foreach ($sessionArray as $question) {
    $activityCounts[$question['activity']]++;
}

$mostCommonActivity = 0;
$mostCommonActivityCount = 0;
foreach ($activityCounts as $activity => $count) {
    if ($count > $mostCommonActivityCount) {
        $mostCommonActivity = $activity;
        $mostCommonActivityCount = $count;
    }
}

echo "The most common activity level selected by the user is " . $mostCommonActivity;

?>
        </div>
    </section>


 <!--End PHP-->
    
 <?php include "footer.php"; ?>

</body>
</html>