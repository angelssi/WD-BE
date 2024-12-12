<?php 
$friendshipIslandQuery="SELECT * FROM islandsofpersonality  WHERE islandOfPersonalityID = 1;";
$friendshipIslandResult = executeQuery($friendshipIslandQuery);

$catIslandQuery="SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = 2;";
$catIslandResult = executeQuery($catIslandQuery);

$familyIslandQuery="SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = 3;";
$familyIslandResult = executeQuery($familyIslandQuery);

$danceIslandQuery="SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = 4;";
$danceIslandResult = executeQuery($danceIslandQuery);

$shortDescFQuery = "SELECT shortDescription FROM islandsofpersonality where  islandOfPersonalityID = 1;";
$shortDescFResult = executeQuery($shortDescFQuery);

$shortDescCQuery = "SELECT shortDescription FROM islandsofpersonality where  islandOfPersonalityID = 2;";
$shortDescCResult = executeQuery($shortDescCQuery);

$shortDescFMQuery = "SELECT shortDescription FROM islandsofpersonality where  islandOfPersonalityID = 3;";
$shortDescFMResult = executeQuery($shortDescFMQuery);

$shortDescDQuery = "SELECT shortDescription FROM islandsofpersonality where  islandOfPersonalityID = 4;";
$shortDescDResult = executeQuery($shortDescDQuery);
?>