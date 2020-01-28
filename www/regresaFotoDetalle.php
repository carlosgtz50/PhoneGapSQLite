<?php

$files = glob("fotos/*.*");

for ($i=1; $i<count($files); $i++)
{
	$arreglo = str_getcsv( $files[$i], "_");

	if( $arreglo[0] == 104){

		$num = $files[$i];

		$foto = '<img src="'.$num.'" style="height:50px;" class="m--img-rounded m--marginless m--img-centered" alt="">';

		echo $foto;
	}
}


?>