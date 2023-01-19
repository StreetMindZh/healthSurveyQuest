<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Activity Survey Home</title>

    <!--Start Google Fonts Ubuntu Link-->
    

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
    
    <div class="section-title mb-4 pb-2">
        <h4 class="title mb-4">Our Team Members</h4>
        <p class="text-muted para-desc mx-auto mb-0">Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Our Team Members</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="team-list position-relative overflow-hidden shadow rounded">
                    <img src="img/zlatko_jankovski.png" class="img-fluid float-right" alt="">
                    <div class="content float-right p-4">
                        <h5 class="title mb-0">Zlatko Jankovski</h5>
                        <small class="text-muted">Founder & Developer</small>
                        <p class="text-muted mt-3">I must explain to you how all this mistaken idea of denouncing pleasure and system.</p>
                        <ul class="list-unstyled follow social-icon social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google +"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-linkedin" title="Linkedin"></i></a></li>
                        </ul><!--end icon-->
                    </div>
                </div>                        
            </div><!--end col-->
            

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="progress-box">
                    <h6 class="title text-muted">Gimp & Figma</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:0%;">
                            <div class="progress-value d-block text-muted h6">Design</div>
                        </div>
                    </div>
                </div><!--end process box-->
                <div class="progress-box mt-4">
                    <h6 class="title text-muted">PHP</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:0%;">
                            <div class="progress-value d-block text-muted h6">Form & Validation</div>
                        </div>
                    </div>
                </div><!--end process box-->
            </div><!--end col-->

            <div class="col-md-6">
                <div class="progress-box mt-4 mt-sm-0">
                    <h6 class="title text-muted">Angular / JavaScript</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:0%;">
                            <div class="progress-value d-block text-muted h6">Validation</div>
                        </div>
                    </div>
                </div><!--end process box-->
                <div class="progress-box mt-4">
                    <h6 class="title text-muted">HTML</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped position-relative bg-primary" style="width:0%;">
                            <div class="progress-value d-block text-muted h6">Setup</div>
                        </div>
                    </div>
                </div><!--end process box-->
            </div><!--end col-->
        </div><!--end row-->
    </div>
        <!--End Content PHP -->


        
            <?php include "footer.php"; ?>

    </body>
    </html>