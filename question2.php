<?php
session_start();
if (isset($_POST['supplements'])) {
    $supplements = $_POST['supplements'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
<body>

 <!--Start Integrate Header PHP -->

 <?php include "header.php"; ?>
 <?php include "data-collector.php"; ?>


<!--End Integrate Header PHP -->


<div class="container">
    <form action="question3.php" method="post">
        <label for="supplements">2. Do you take nutritional supplements?</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="supplements" id="supplements-yes" value="yes">
            <label class="form-check-label" for="supplements-yes">Yes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="supplements" id="supplements-no" value="no">
            <label class="form-check-label" for="supplements-no">No</label>
        </div>
        <br><br>
        <input type="hidden" name="lastPageID" value="question2">
        <input type="submit" value="OK" class="btn btn-primary">
    </form>
</div>

 <!--End PHP-->
    
 <?php include "footer.php"; ?>

</body>
</html>