<?php 
include("connect.php");
include("indexquery.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Inside Lira's Mind</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" href="assets/images/ISLAND.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

  <div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
    <div class="w3-display-top text-center p-3">
      <h1 class="w3-jumbo w3-animate-top">INSIDE LIRA'S MIND :)</h1>
      <hr class="w3-border-white" style="margin:auto;width:40%">
    </div>
    <div class="container-fluid">
      <div class="row">
        <?php 
          while ($friendshipRow = mysqli_fetch_assoc($friendshipIslandResult)) {
            $shortDescFRow = mysqli_fetch_assoc($shortDescFResult); 
        ?>
        <div class="col-12 col-lg-6 mb-4 position-relative">
          <a href="view.php?islandID=<?php echo $friendshipRow['islandOfPersonalityID']; ?>">
            <img src="assets/images/<?php echo $friendshipRow['image']; ?>" class="img" alt="Friendship Island">
          </a>
          <div class="short-desc-friendship mt-3"><?php echo $shortDescFRow['shortDescription']; ?></div>
        </div>
        <?php } ?>

        <?php 
          while ($familyRow = mysqli_fetch_assoc($familyIslandResult)) {
            $shortDescFMRow = mysqli_fetch_assoc($shortDescFMResult); 
        ?>
        <div class="col-12 col-lg-6 mb-4 position-relative">
          <a href="view.php?islandID=<?php echo $familyRow['islandOfPersonalityID']; ?>">
            <img src="assets/images/<?php echo $familyRow['image']; ?>" class="img" alt="Family Island">
          </a>
          <div class="short-desc-family mt-3"><?php echo $shortDescFMRow['shortDescription']; ?></div>
        </div>
        <?php } ?>

        <?php 
          while ($catRow = mysqli_fetch_assoc($catIslandResult)) {
            $shortDescCRow = mysqli_fetch_assoc($shortDescCResult); 
        ?>
        <div class="col-12 col-lg-6 mb-4 position-relative">
          <a href="view.php?islandID=<?php echo $catRow['islandOfPersonalityID']; ?>">
            <img src="assets/images/<?php echo $catRow['image']; ?>" class="img mt-5" alt="Cat Island">
          </a>
          <div class="short-desc-cat mt-3"><?php echo $shortDescCRow['shortDescription']; ?></div>
        </div>
        <?php } ?>

        <?php 
          while ($danceRow = mysqli_fetch_assoc($danceIslandResult)) {
            $shortDescDRow = mysqli_fetch_assoc($shortDescDResult); 
        ?>
        <div class="col-12 col-lg-6 mb-4 position-relative">
          <a href="view.php?islandID=<?php echo $danceRow['islandOfPersonalityID']; ?>">
            <img src="assets/images/<?php echo $danceRow['image']; ?>" class="img mt-5" alt="Dance Island">
          </a>
          <div class="short-desc-dance mt-3"><?php echo $shortDescDRow['shortDescription']; ?></div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
