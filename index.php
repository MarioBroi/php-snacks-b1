<?php 

$game1 = array(
    "homeTeam" => "Atlanta Hawks",
    "visitingTeam" => "Oklahoma City Thunder",
    "pointsHomeTeam" => 10,
    "pointsVisitingTeam" => 27
);

$game2 = array(
    "homeTeam" => "Atlanta Hawks",
    "visitingTeam" => "Chicago Bulls",
    "pointsHomeTeam" => 1,
    "pointsVisitingTeam" => 12
);

$game3 = array(
        "homeTeam" => "Atlanta Hawks",
        "visitingTeam" => "Cleveland Cavaliers",
        "pointsHomeTeam" => 25,
        "pointsVisitingTeam" => 10
    );

var_dump($game1);
var_dump($game2);
var_dump($game3);

echo "<hr>";
echo $game1["homeTeam"];
echo (" - ");
echo $game1["visitingTeam"];
echo (" | ");
echo $game1["pointsHomeTeam"];
echo (" - ");
echo $game1["pointsVisitingTeam"];

echo "<hr>";
echo $game2["homeTeam"];
echo (" - ");
echo $game2["visitingTeam"];
echo (" | ");
echo $game2["pointsHomeTeam"];
echo (" - ");
echo $game2["pointsVisitingTeam"];

echo "<hr>";
echo $game3["homeTeam"];
echo (" - ");
echo $game3["visitingTeam"];
echo (" | ");
echo $game3["pointsHomeTeam"];
echo (" - ");
echo $game3["pointsVisitingTeam"];

?>