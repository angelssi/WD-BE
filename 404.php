<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page not found</title>
    <link rel="icon" href="images/casioicon.png" type="png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-fluid {
            height: 100vh;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .vid {
            position: absolute;
            top: 80%;
            left: 80%;
            width: 100%;
            height: 100%;
            object-fit: fill;
            transform: translate(-80%, -80%); 
        }
        
        @font-face {
            font-family: font-p;
            src: url(images/fonts/poppins.regular.ttf);
        }

        .h3 {
            font-family: font-p;
            font-weight: bold;
        }

        .p {
            font-family: font-p;
        }

        .fish {
            width: 8vh;
            border: none;
            outline: none;
        }

        .fish:hover {
            transform: scale(1.1);
        }

    </style>
</head>

<body>

    <div class="container-fluid p-0 m-0">
        <video autoplay muted loop class="vid">
            <source src="images/404.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="col-12 p-5 text-center p-0 mt-0 mb-0" style="background-color: #f5deb3 ">
        <h5 class="h3" style="color: #555555">Oops... The page you requested was not found.</h5>
        <p class=" p text-muted">Get back home by clicking this fish
            <a href="index.html">
            <img src ="images/fish.gif" class="fish" alt="fish">
            </a>
        </p>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>