<?php
 #require_once('upload.php'); // LLAMA A EL ARCHIVO DE UPLOAD
include 'Base_de_Datos.php';
/
function recibirDatos(){
	//Recibe los datos por 'post' o por 'get'
	$nombre="";
	$apellido="";
	$email="";
	$pasatiempo="";
	$usuario="";
	$pass="";
	$gastos="";
	$continente="";
	$materias="";
	$nombreArchivo="";
	$mensajeArchivo="";
	$estadoSubida="";
	if (isset($_REQUEST['nombre'])){
		$nombre=$_REQUEST['nombre'];
	} else {
		return;
	}
	if (isset($_REQUEST['apellido'])){
		$apellido=$_REQUEST['apellido'];
	}
	if (isset($_REQUEST['edad'])){
		$edad=$_REQUEST['edad'];
	}	
	if (isset($_REQUEST['pasatiempo'])){
		$pasatiempo=implode($_REQUEST['pasatiempo'],",");
		//implode convierte el array a string
		//pasatiempo es un check multiple
	}
	if (isset($_REQUEST['usuario'])){
		$usuario=$_REQUEST['usuario'];
	}
	if (isset($_REQUEST['pass'])){
		$pass=$_REQUEST['pass'];
	}
	if (isset($_REQUEST['gastos'])){
		$gastos=implode($_REQUEST['gastos'],",");
		//implode convierte el array a string
		//gastos es un selection multiple
	}
	if (isset($_REQUEST['continente'])){
		$continente=$_REQUEST['continente'];
	}
	if (isset($_REQUEST['materias'])){
		$materias=implode($_REQUEST['materias'],",");
		//implode convierte el array a string
		//materias es un selection multiple
	}
	#validar que los datos esten bien
	insertUser()

	// * * * * A R C H I V O * * * * * *
	// 'fileToUpload' es el name del input html tipo file (cuando se envía por fetch)
	// 'fileToUpload' es el name del input html tipo submit 'del boton' (cuando se envía por form)
	if(isset($_REQUEST['fileToUpload']) || isset($_FILES['fileToUpload'])){
		$res = recibirArchivo();
		if ($res!=null ){
			if ($res['uploadOk']){// SI SE LOGRÓ SUBIR CON EXITO
				$estadoSubida="Correcta";
			}else{
				$estadoSubida="Incorrecta";
			}
			$nombreArchivo=$res['filename'];
			$mensajeArchivo=$res['message'];
		}		
	}
}
	

?>