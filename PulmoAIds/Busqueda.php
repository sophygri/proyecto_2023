<?php
include("./conexion.php");

// Obtener el término de búsqueda desde el formulario
$busqueda = $_POST["busqueda"];

// Consulta SQL para buscar pacientes por nombre o DNI
//$query = "SELECT * FROM Paciente WHERE NombreYapellido LIKE ? OR dna = ?";
$query = "SELECT * FROM Paciente WHERE NombreYapellido LIKE '%".$busqueda."%'";

$stmt = $mysqli->query($query);
//echo "Valor de búsqueda: " . $busqueda;

$datos=array();
    if ($stmt->num_rows > 0) {
        // Mostrar resultados
        while ($row = $stmt->fetch_assoc()) {
            $datos[]=$row;
            
        }
        echo json_encode($datos);
    } else {
        // Si no se encontraron resultados, mostrar "Paciente inexistente"
        echo "Paciente inexistente";
    }
    $stmt->close();

$mysqli->close();
?>
