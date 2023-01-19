<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Activity Survey Question 8</title>

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
 <?php include "data-collector.php"; ?>


<!--End Integrate Header PHP -->


<section class="page-section" id="quest">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            <p>Question 8.</p><br>On a typical day, how many of your meals or snacks contain vegetables?</h2>
        <form id="health-form" action="question9.php" method="post" onsubmit="return validateActivity()">
            <input type="number" class="form-control" id="activity" name="activity"><br>
            <input type="hidden" name="lastPageID" value="question8">
            <input type="submit" value="OK" class="btn btn-primary">
            <a href="question7.php" class="btn btn-secondary">Back</a>
            <input type="reset" value="Reset FitQuest" class="btn btn-secondary" onclick="window.location.href='question1.php'">
        </form>
    </div>
</section>



<script>
    function validateActivity() {
    var activity = document.getElementById("activity").value;
    if (activity === "") {
        alert("Please give us an answer.");
        return false;
    }
    return true;
}
</script>

 <!--End PHP-->
    
 <?php include "footer.php"; ?>

</body>
</html>