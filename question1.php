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
    <title>Physical Activity Survey Question 1</title>

    <!--Start Google Fonts Ubuntu Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <!--End Google Fonts Ubuntu Link-->

    <!--Start Bootstrap CDN CSS and JavaScript Link-->
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <!--End Bootstrap CDN CSS and JavaScript Link-->

     <!--Start CSS External-->

    <link rel="stylesheet" href="css/styles.css">


    <!--End CSS External-->

</head>
<body id="page-top" class="d-flex flex-column min-vh-100">

<!--Start Integrate Header PHP -->

    <?php include "header.php"; ?>

<!--End Integrate Header PHP -->

<!-- Question 1 Section-->
<section class="page-section" id="quest">
    <div class="container">
<!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Question 1. How healthy are you physically?</h2>
    <!-- Form Type Range-->
        <form id="health-form" action="question2.php" method="post" onsubmit="return validateForm()">
        <label for="customRange1" class="form-label">Select an area to show how healthy you feel</label>
            <input type="range" class="form-range" id="health" name="health" min="0" max="5" value="0" >
            
            <div class="row" style="color:white;" >
                    <div class="col border bg-danger">
                        not selected
                    </div>
                    <div class="col border bg-secondary">
                        1
                    </div>
                    <div class="col border bg-primary">
                        2
                    </div>
                    <div class="col border bg-info">
                        3
                    </div>
                    <div class="col border bg-warning">
                        4
                    </div>
                    <div class="col border bg-dark">
                        5
                    </div>
                </div>
            <input type="hidden" name="lastPageID" value="question1"><br>
            <input type="submit" value="OK" class="btn btn-primary">
        </form>
    </div>
</section>



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


<!--Start Integrate Footer PHP -->
     <?php include "footer.php"; ?>
<!--End Integrate Footer PHP -->


</body>
</html>