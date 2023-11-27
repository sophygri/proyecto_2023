<?php
    include("./conexion.php");




    $emailID = $_POST["EmailID"];
    $nombre = $_POST["Nombre"];
    $apellido = $_POST["Apellido"];
    $obrasocial = $_POST["Obra_social"]; // Corregido el espacio en el nombre del campo
    // $clave = $_POST["Clave"];
    $clave = $_POST["Clave"];
   
    // echo($obraSocial);

    $query = "INSERT INTO Registro (Nombre, Apellido, Obra_social, Clave, EmailID) VALUES (?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);  
    if ($stmt) {    
        $stmt->bind_param("sssss", $nombre, $apellido, $obraSocial, $clave, $emailID);
   


    $sql = $mysqli->query($query);
    
    if ($stmt -> execute()) {
        echo '<div class="Success">Usuario registrado correctamente</div>';
        header("Location: frontinicio.php");
    } else {
        echo '<div class="alerta">No se ha registrado</div>';
    }
    $stmt->close();
}


  $mysqli->close();
?>
