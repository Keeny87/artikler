<?php

$filepath = "Artikler.json";
$response = file_get_contents($filepath);
$response = json_decode($response, true);

echo '<table>';
echo '<tr>';
echo '<td><b>Forfatter</b></td>';
echo '<td><b>Overskrift</b></td>';
echo '<td><b>Tekst</b></td>';
echo '<td><b>Årstal</b></td>';
echo '</tr>';

$Forfatter = '';
$Overskrift = '';
$Tekst = '';
$Årstal = '';

if(isset($_REQUEST["Forfatter"])){ $Forfatter = $_REQUEST["Forfatter"]; }
if(isset($_REQUEST["Overskrift"])){	 $Overskrift = $_REQUEST["Overskrift"];	}
if(isset($_REQUEST["Tekst"])){ $Tekst = $_REQUEST["Tekst"];	}
if(isset($_REQUEST["Årstal"])){	$Årstal = $_REQUEST["Årstal"];	}

if(isset($_REQUEST["Forfatter"])){ '<br>'; $Forfatter = $_REQUEST["Forfatter"]; }

foreach($response["Artikler"] as $row)
{
	if(

		(isset($_REQUEST["Forfatter"]) && strpos($row["Forfatter"], $Forfatter) !== false) ||
		(isset($_REQUEST["Overskrift"]) && strpos($row["Overskrift"], $Overskrift) !== false) ||
		(isset($_REQUEST["Tekst"]) && strpos($row["Tekst"], $Tekst) !== false) ||
		(isset($_REQUEST["Årstal"]) && strpos($row["Årstal"], $Årstal) !== false)

	){
		echo '<tr>';
		echo '<td>' . $row["Forfatter"] . '</td>';
		echo '<td>' . $row["Overskrift"] . '</td>';
		echo '<td>' . $row["Tekst"] . '</td>';
		echo '<td>' . $row["Årstal"] . '</td>';
		echo '</tr>';
	}
}
echo '</table>';

?>
