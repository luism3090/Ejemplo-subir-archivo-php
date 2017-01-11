<?php 

//echo 

//var_dump($_FILES);

$ruta = 'fotos/';

$archivoTemp = $_FILES["file"]['tmp_name'];
$nombre_archivo = $_FILES["file"]['name'];


//echo $archivoTemp." __________ ";

//echo $nombre_archivo;

//$ifp = fopen($output_file, "wb"); 


$subir =  move_uploaded_file($archivoTemp, $ruta.$nombre_archivo);


if($subir)
{
	echo "El archivo se subio con éxito";
}
else
{
	echo "Error al subir el archivo";
}