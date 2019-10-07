<!DOCTYPE HTML>
<head>
    <title>Megahamster</title>
</head>
<body>
<?php
require("classes/room.php");
require("classes/flat.php");
require("classes/pit.php");
$rooms[] = new room("The Flat", 149.00, 2, 4, 3);
$rooms[] = new flat("The Room", 49.00, 2, 1.5, 3, "Krug mit Essen");
$rooms[] = new pit("The Pit", 49.00, 1.5, "Trainingshandschuhe, Boxsack");
?>
<div class="container">
    <h1>Megahamster</h1>
    <table>
        <tr>
            <th>Produkt</th>
            <th>Preis</th>
            <th>Seitenlänge</th>
            <th>Grundfläche</th>
            <th>Zusatzausstattung</th>
        </tr>
        <?php
        for ($i = 0; $i < sizeof($rooms); $i++) {
            $seitenlaenge = "";
            if (($rooms[$i]) instanceof pit) {
                $grundflaeche = 2*(pow($rooms[$i]->getSeitenlaenge(), 2))*(1+sqrt(2));
            } else {
                $grundflaeche = $rooms[$i]->getBreite() * $rooms[$i]->getLaenge();
            }
            echo <<<room
<tr>
<td>
{$rooms[$i]->getBezeichnung()}
</td>
<td>
{$rooms[$i]->getPreis()}
</td>
<td>
room;
            $seitenlaenge = "";
            if (($rooms[$i]) instanceof pit) {
                $seitenlaenge = $rooms[$i]->getSeitenlaenge();
            } else {
                $seitenlaenge = "Länge: " . $rooms[$i]->getLaenge() . "," . "Breite: " . $rooms[$i]->getBreite() . "," . "Höhe: " . $rooms[$i]->getHoehe();
            }
            echo <<<room
$seitenlaenge
</td>
<td>
$grundflaeche
</td>
<td>
room;
            $zusatz = "";
            if (($rooms[$i]) instanceof pit || ($rooms[$i]) instanceof flat) {
                $zusatz = $rooms[$i]->getZusatzausstattung();
            } else {
                $zusatz = "X";
            }
            echo <<<room
            $zusatz
</td>
</tr>
room;
        }
        ?>
    </table>
</div>
</body>