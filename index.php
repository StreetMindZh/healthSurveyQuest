<?php 
session_start();
//session related code
session_destroy();
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

    <!--End Integrate Header PHP -->

    <div class="container">
    <form id="health-form" action="question2.php" method="post">
        <label for="health">1. How healthy are you physically?</label>
        <input type="range" min="0" max="5" value="0" class="form-control" id="health" name="health">
        <input type="hidden" name="lastPageID" value="question1">
        <br>
        <input type="submit" value="OK" class="btn btn-primary">
    </form>
</div>


<script>
document.getElementById('health').addEventListener('change', validateHealth);

function validateHealth() {
    var health = document.getElementById('health').value;
    if (health < 1 || health > 5) {
        alert("Invalid health value. Please select a value between 1 and 5.");
        return false;
    }
    return true;
}

document.getElementById('health-form').addEventListener('submit', function(event){
    if (!validateHealth()) {
        event.preventDefault();
    }
});
</script>


    <!--End PHP-->
    
        <?php include "footer.php"; ?>

</body>
</html>