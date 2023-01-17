<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Physical Activity Survey Question 4</title>

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
            <form action="question5.php" method="post">
                <label for="activity">4. What additional physical activity do you do most?</label>


        <div class="container align-items-center">
            <div class="row align-items-center">
                <div class="col align-self-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="activity" id="not-selected" value="not-selected" checked>
                        <label class="form-check-label" for="not-selected">not selected</label>
                    </div>
                </div>
            
                <div class="col align-self-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="activity" id="no-activity" value="no-activity">
                        <label class="form-check-label" for="no-activity">No additional physical activity</label>
                    </div>
                </div>

                <div class="col align-self-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="activity" id="lifting-weights" value="lifting-weights">
                        <label class="form-check-label" for="lifting-weights">Lifting weights</label>
                    </div>
                </div>

                <div class="col align-self-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="activity" id="walking" value="walking">
                        <label class="form-check-label" for="walking">Walking</label>
                    </div>
                </div>

                <div class="col align-self-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="activity" id="jogging" value="jogging">
                        <label class="form-check-label" for="jogging">Jogging</label>
                    </div>
                </div>
            
            </div>
        
            <div class="row align-items-center">
                <div class="col align-self-center">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="running" value="running">
                            <label class="form-check-label" for="running">Running</label>
                    </div>
                </div>

                <div class="col align-self-center">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="swimming" value="swimming">
                            <label class="form-check-label" for="swimming">Swimming</label>
                    </div>
                </div>

                <div class="col align-self-center">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="dancing" value="dancing">
                            <label class="form-check-label" for="dancing">Dancing</label>
                    </div>
                </div>

                <div class="col align-self-center">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="aerobics" value="aerobics">
                            <label class="form-check-label" for="aerobics">Aerobics</label>
                    </div>
                </div>
        </div>

            <div class="row align-items-center">
                <div class="col align-self-center">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="pilates" value="pilates">
                            <label class="form-check-label" for="pilates">Pilates</label>
                    </div>
                </div>

                <div class="col align-self-center">
                    <div class="form-check">
                            <input class="form-check-input" type="radio" name="activity" id="team-sports" value="team-sports">
                            <label class="form-check-label" for="team-sports">Team sports</label>
                    </div>    </div>
                <div class="col align-self-center">
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="activity" id="other" value="other">
                        <label class="form-check-label" for="other">Other</label>
                        <input type="text" class="form-control" id="other-activity" name="other-activity" placeholder="Please specify other activity">
                        </div>    </div>
                        <div class="form-check">
                <br><br>
                        <input type="hidden" name="lastPageID" value="question4">
                        <input type="submit" value="OK" class="btn btn-primary">
                        <input type="reset" value="Reset" class="btn btn-secondary">
                </div>
            </div>
            </div>


            </form>

            </div>


    <!--End PHP-->

   
    <script>
        document.querySelector("form").addEventListener("submit", function(e) {
            if (document.querySelector("input[value='not-selected']:checked")) {
                e.preventDefault();
                alert("Please select an option.");
            } else {
                window.location.href = "question5.php";
            }
        });
</script>
         
        
    <?php include "footer.php"; ?>

    </body>
</html>