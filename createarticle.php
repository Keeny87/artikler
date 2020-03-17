<?php

$Forfatter = '';
$Overskrift = '';
$Tekst = '';
$Årstal = '';

if(isset($_REQUEST["Forfatter"])){ echo $_REQUEST["Forfatter"] . '<br>'; $Forfatter = $_REQUEST["Forfatter"]; }
if(isset($_REQUEST["Overskrift"])){	echo $_REQUEST["Overskrift"] . '<br>'; $Overskrift = $_REQUEST["Overskrift"];	}
if(isset($_REQUEST["Tekst"])){	echo $_REQUEST["Tekst"] . '<br>'; $Tekst = $_REQUEST["Tekst"];	}
if(isset($_REQUEST["Årstal"])){	echo $_REQUEST["Årstal"] . '<br>'; $Årstal = $_REQUEST["Årstal"];	}

if(file_exists('Artikler.json'))
{
	$json = file_get_contents('Artikler.json');
	$json_data = json_decode($json,true);

	$newar = array(
		'Forfatter'	=> $Forfatter,
		'Overskrift'	=> $Overskrift,
		'Tekst'	=> $Tekst,
		'Årstal'	=> $Årstal
	);

	$json_data[] = $newar;
	$json = json_encode($json_data);
	file_put_contents('Artikler.json', $json);
}

?>
