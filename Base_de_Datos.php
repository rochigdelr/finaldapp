<?php

// https://www.w3schools.com/php/php_ref_mysqli.asp

function getStringConnection(){    
    // obtiene el string de conexión y lo retorna

    // arreglo asociativo con los datos de la conexión
    $arrSConn = array( 
        "servername"  => "localhost",
        "username"    => "root",
        "password"    => "",
        "dbname"      => "ubicacion",
    );
    return $arrSConn;
}

function conectarBD() {              
    //La función realiza la conexion y la retorna 

    // obtiene el string de conección
    $arrSConn = getStringConnection();

    // Crear conexión
      $conn = new mysqli($arrSConn["servername"],
                         $arrSConn["username"],
                         $arrSConn["password"],
                         $arrSConn["dbname"]
                        );

    // Checkear conexión
    if ($conn->connect_error) {
        die("Conexion fallida: " . $conn->connect_error);
    } 

    // retorna la conexión 
    return $conn;

}

function ejecutarSQL($conn, $sql) {  
    //realiza una consutla y la retorna 

    // realiza una consulta $sql a un coneccion $conn  dada
    $result = $conn->query($sql);

    // retorna el resultado
    return $result;
}
function desconectarBD($conn){       
    // desconecta la conexión a una base de datos

    // cerrar conexión
    $conn->close();
}

$next_id = 0 #completar parametros 

function insertUser($name, $username, $password, $email, $phone, $birthday){
    $next_id += 1;
    return 
    "INSERT INTO `usuario_comprador`
    (`id`, `nombre`, `apellido`, `email`, `password`, `usuario`, `telefono`, `fecha de nacimiento`) 
    VALUES (".$next_id.",".$name.",".$surname.",".$phone.",".$password.",".$username.",".$phone.",".$birthday.")"
    #preguntar porque no te permite dejar la variable id como serial, porque tendrias que actualizarla todo el tiempo sino
}



?>





