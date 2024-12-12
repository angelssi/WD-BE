<?php
include("connect.php");

$islandID = $_GET['islandID'];

$islandPersonalityQuery = "SELECT * from islandsofpersonality WHERE islandOfPersonalityID = $islandID;";
$islandPersonalityResult = executeQuery($islandPersonalityQuery);

$islandContentQuery = "SELECT 
    islandcontentID,
    islandcontents.color AS contentColor,
    islandcontents.image AS contentImage,
    islandcontents.content
FROM 
    islandsofpersonality
JOIN 
    islandcontents ON islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID
WHERE 
    islandsofpersonality.islandOfPersonalityID = $islandID";
$islandContentResult = executeQuery($islandContentQuery);
?>


<!DOCTYPE html>
<html>

<head>
    <title>  <?php
        if ($islandPersonalityRow = mysqli_fetch_assoc($islandPersonalityResult)) {
            echo $islandPersonalityRow['name']; 
            mysqli_data_seek($islandPersonalityResult, 0);
        }
        ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="icon" href="assets/images/ISLAND.png">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-image: url('assets/images/i.gif');" class="text-white">
    <?php
    while ($islandPersonalityRow = mysqli_fetch_assoc($islandPersonalityResult)) { ?>
        <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
            <a href="index.php">
                <button style="font-family: mfont; font-size: 3vh;outline: none; border: none;"
                    class="btn text-white">Back</button>
            </a>
            <div class="container-fluid w3-display-middle text-center p-3">
                <h1 class="title w3-jumbo w3-animate-middle"
                    style="font-size: clamp(35px, 4vw, 50px); color: <?php echo $islandPersonalityRow['color'] ?>;">
                    Welcome to
                    <?php echo $islandPersonalityRow['name'] ?>
                </h1>
                <hr class="w3-border-white" style="margin:auto;width:40%; border-width: 3px;">
                <p class="w3-center mt-4" style="color: #fff; font-family: mfont; font-size: 3vh;">
                    Status:
                    <span style="animation: flash 1.5s infinite; color: #41CB53;">
                        <?php echo $islandPersonalityRow['status'] ?>
                    </span>
                </p>
            </div>
        </div>

        <div class="friendship text-center mt-4">
            <h1 style="color: <?php echo $islandPersonalityRow['color'] ?>; font-size: clamp(35px, 4vw, 50px)">Hooray for
                <?php echo $islandPersonalityRow['name'] ?>!</h1>
        </div>

        <div class="container-fluid p-0 m-0 text-center">
            <img src="assets/images/<?php echo $islandPersonalityRow['image'] ?>" class="image img-friendship p-0 m-0"
                style="width: 40%;" alt=" Island">
        </div>

        <div class="container-fluid text-center mt-3 text-justify">
            <h1 class="longDesc p-3" style="font-family: poppins; font-size: clamp(25px, 2vw, 50px)">
                <?php echo $islandPersonalityRow['longDescription'] ?>
            </h1>
        </div>

    <?php } ?>

    <?php
    while ($islandContentRow = mysqli_fetch_assoc($islandContentResult)) {
        if ($islandID == 1 && $islandContentRow['islandcontentID'] == 1 || $islandID == 3 && $islandContentRow['islandcontentID'] == 7) { ?>
            <div class="container-fluid text-center">
                <video class="f1 mt-5" style="width: 90vw; border-radius: 100px" controls muted autoplay loop>
                    <source src="assets/images/<?php echo $islandContentRow['contentImage'] ?>" class="text-center"
                        type="video/mp4">
                </video>
            </div>
        <?php } else { ?>

            <div class="container-fluid text-center">
                <img src="assets/images/<?php echo $islandContentRow['contentImage'] ?>" class="f2 mt-5"
                    style="width: 90vw; border-radius: 100px">
            </div>
        <?php } ?>

        <div class="container-fluid p-3 text-center mt-3 text-justify"
            style="background-color: <?php echo $islandContentRow['contentColor'] ?>">
            <h1 class="content p-3" style="font-family: poppins; font-size: clamp(25px, 2vw, 50px)">
                <?php echo $islandContentRow['content'] ?>
            </h1>
        </div>
    <?php } ?>
    <?php
    if ($islandID == 1) {
        echo '<div class="container-fluid text-center">
        <img src="assets/images/friends.gif" style="width: 60%;" class="friends" alt="friends">
     </div>';
    } else if ($islandID == 2) {
        echo '<div class="container-fluid text-center">
     <img src="assets/images/cat.gif" style="width: 60%;" class="cat" alt="cat">
    </div>';
    } else if ($islandID == 3) {
        echo '<div class="container-fluid text-center">
        <img src="assets/images/fam.gif" style="width: 60%;" class="family" alt="family">
     </div>';
    } else if ($islandID == 4) {
        echo '<div class="container-fluid text-center">
         <img src="assets/images/dance.gif" style="width: 60%;" class="dance" alt="dance">
     </div>';
    }
    ?>

    <!-- Page top -->
    <div class="pagetop text-end fixed-bottom m-0">
        <a href="#" onclick="scrollToTop()">
            <img src="assets/images/pagetop.png" style="width: 7vh;" class="imgpage rounded-start m-3" alt="pagetop">
        </a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

        <script>
              function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        </script>
</body>

</html>