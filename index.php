<?php
    require 'TimeTravel.php';
    $timeTravel = new TimeTravel();
    $debut = $timeTravel->start->setDate(1985, 12, 31);
    echo "Suite à une expérience ratée avec sa nouvelle machine, Doc s'est retrouvé projeté le ".$debut->format('d F Y').",";
    $interval = new DateInterval('PT1000000000S');
    echo " soit 1 milliard de secondes plus tôt, à la date du ".$timeTravel->findDate($interval).".</br>";
    echo $timeTravel->getTravelInfo()."<br>";
    echo "On ne peut faire qu'un saut de 1 mois, 1 semaine et 1 jour<br>";
    $interval2 = new DateInterval('P1M8D');
    $step = new DatePeriod($timeTravel->end, $interval2, $timeTravel->start);
    $etapes = $timeTravel->backToFutureStepByStep($step);
    echo "Voici toutes les étapes pour aller chercher Doc :".'<br>';
    foreach ($etapes as $etape) {
        echo $etape;
        echo '</br>';
    }
?>