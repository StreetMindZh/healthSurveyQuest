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
    <body class="d-flex flex-column min-vh-100">

    <!--Start Integrate Header PHP -->

    <?php include "header.php"; ?>
    <?php include "data-collector.php"; ?>

    <!--End Integrate Header PHP -->

    <!-- Contact Section-->
    <section class="page-section" id="quest">
      <div class="container">
    <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Question 4. What additional physical activity do you do most?</h2>
    <!-- Icon Divider-->
        <form id="activity-form" action="question5.php" method="post" onsubmit="return validateForm()">
          <div class="form-group">
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="no-activity" value="no-activity">
              <label class="btn btn-primary" for="no-activity">No additional physical activity</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="lifting-weights" value="lifting-weights">
              <label class="btn btn-primary" for="lifting-weights">Lifting weights</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="walking" value="walking">
              <label class="btn btn-primary" for="walking">Walking</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="jogging" value="jogging">
              <label class="btn btn-primary" for="jogging">Jogging</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="running" value="running">
              <label class="btn btn-primary" for="running">Running</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="swimming" value="swimming">
              <label class="btn btn-primary" for="swimming">Swimming</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="dancing" value="dancing">
              <label class="btn btn-primary" for="dancing">Dancing</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="aerobics" value="aerobics">
              <label class="btn btn-primary" for="aerobics">Aerobics</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="pilates" value="pilates">
              <label class="btn btn-primary" for="pilates">Pilates</label>
            </div>
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="team-sports" value="team-sports">
              <label class="btn btn-primary" for="team-sports">Team sports</label>
            </div>
          </div>
          
            <div class="form-check">
              <input class="btn-check" type="checkbox" name="activity" id="other" value="other">
              <label class="btn btn-primary" for="other">Other</label>
            </div>
            
        
        
          <div class=".col-md-4 .offset-md-4">
            <div class="form-group">
              <input type="text" class="form-control" id="other-activity" placeholder="Please specify" style="display:none">
            </div>
          </div>
        
        
          <div class=".col-md-6 .offset-md-3 text-center">
            <div class="form-group">
              <input type="text" class="form-control" name="other-input" id="other-input" placeholder="Please specify other activity">
            </div>
          </div>
   
        
          <div>
            <button type="submit" class="ok-btn btn btn-primary">OK</button>
            <a href="question3.php" class="btn btn-secondary">Back</a>
            <input type="reset" value="Reset FitQuest" class="btn btn-secondary" onclick="window.location.href='question1.php'">
          </div>
        
          </div>
        </form>
                
      </div>
    </section>

    <!--End PHP-->


    <script>
        function validateForm() {
    var checkboxes = document.getElementsByName("activity");
    var checkboxChecked = false;
    for (var i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        checkboxChecked = true;
        break;
      }
    }
    if (!checkboxChecked) {
      alert("Please select at least one checkbox.");
      return false;
    }
    var otherCheckbox = document.getElementById("other");
    var otherInput = document.getElementById("other-input");
    if (otherCheckbox.checked && otherInput.value == "") {
        alert("Please enter a value for 'Other'");
        return false;
    }
    return true;
  }
</script>

        
    <?php include "footer.php"; ?>

    </body>
</html>