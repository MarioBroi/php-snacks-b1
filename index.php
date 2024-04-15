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

echo ("<br>");
echo ("<br>");
echo ("<br>");
echo ("<hr>");      //Another solution with Multidimensional Array

$games = array(
    array(
        "homeTeam" => "Atlanta Hawks",
        "visitingTeam" => "Oklahoma City Thunder",
        "pointsHomeTeam" => 10,
        "pointsVisitingTeam" => 27
    ),
    array(
        "homeTeam" => "Atlanta Hawks",
        "visitingTeam" => "Chicago Bulls",
        "pointsHomeTeam" => 1,
        "pointsVisitingTeam" => 12
    ),
    array(
        "homeTeam" => "Atlanta Hawks",
        "visitingTeam" => "Cleveland Cavaliers",
        "pointsHomeTeam" => 25,
        "pointsVisitingTeam" => 10
    )
);

echo $games[0]["homeTeam"]." - ".$games[0]["visitingTeam"]." |  ".$games[0]["pointsHomeTeam"]." - ".$games[0]["pointsVisitingTeam"].".<br>";
echo $games[1]["homeTeam"]." - ".$games[1]["visitingTeam"]." |  ".$games[1]["pointsHomeTeam"]." - ".$games[1]["pointsVisitingTeam"].".<br>";
echo $games[2]["homeTeam"]." - ".$games[2]["visitingTeam"]." |  ".$games[2]["pointsHomeTeam"]." - ".$games[2]["pointsVisitingTeam"].".<br>";