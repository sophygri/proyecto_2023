
<?php

include("./conexion.php");

    var_dump($_POST);
// if (isset($_POST['actua'])){
    
$DNI = $_POST["dna"];
$email = $_POST["Email"];
$nombreYapellido = $_POST["NombreYapellido"];
$obrasocialPaciente = $_POST["Obrasocial"]; 
$Fechadenacimiento = $_POST["FechaDeNacimiento"];
$FEV1_1 = $_POST["FEV1(1)"];
$FEV1_2 = $_POST["FEV1(2)"];
$FEV1_3 = $_POST["FEV1(3)"];
$FEV1_4 = $_POST["FEV1(4)"];
$FVC_1 = $_POST["FVC(1)"];
$FVC_2 = $_POST["FVC(2)"];
$FVC_3 = $_POST["FVC(3)"];
$FVC_4 = $_POST["FVC(4)"];
$FEF_1 = $_POST["FEF(1)"];
$FEF_2 = $_POST["FEF(2)"];
$FEF_3 = $_POST["FEF(3)"];
$FEF_4 = $_POST["FEF(4)"];
$diagnostico = $_POST["IADIAG"];
$medicacion = $_POST["medi"];


  /*  $query = "UPDATE Paciente SET NombreYapellido = ?, Email = ?, Obrasocial = ?, FechaDeNacimiento = ?, FEV1_1 = ?, FEV1_2 = ?, FEV1_3 = ?, FEV1_4 = ?, FVC_1 = ?, FVC_2 = ?, FVC_3 = ?, FVC_4 = ?, FEF_1 = ?, FEF_2 = ?, FEF_3 = ?, FEF_4 = ?, IADIAG = ?, medi = ? WHERE dna = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("sssssssssssssssssis", $nombreYapellido, $email, $obrasocialPaciente, $Fechadenacimiento, $FEV1_1, $FEV1_2, $FEV1_3, $FEV1_4, $FVC_1, $FVC_2, $FVC_3, $FVC_4, $FEF_1, $FEF_2, $FEF_3, $FEF_4, $diagnostico, $medicacion, $DNI);


if ($stmt->execute()) {
    echo '<div class="Success">Datos actualizados correctamente</div>';
} else {
    echo '<div class="alerta">No se actualizaron los datos. Error: ' . $stmt->error . '</div>';
}

$stmt->close();
$mysqli->close();


    



$DNI = $_POST["dna"];
$email = $_POST["Email"];
$nombreYapellido = $_POST["NombreYapellido"];
$obrasocialPaciente = $_POST["Obrasocial"]; 
$Fechadenacimiento = $_POST["FechaDeNacimiento"];
$FEV_1 = $_POST["FEV1(1)"];
$FEV1_2 = $_POST["FEV1(2)"];
$FEV1_3 = $_POST["FEV1(3)"];
$FEV1_4 = $_POST["FEV1(4)"];
$FVC_1 = $_POST["FVC(1)"];
$FVC_2 = $_POST["FVC(2)"];
$FVC_3 = $_POST["FVC(3)"];
$FVC_4 = $_POST["FVC(4)"];
$FEF_1 = $_POST["FEF(1)"];
$FEF_2 = $_POST["FEF(2)"];
$FEF_3 = $_POST["FEF(3)"];
$FEF_4 = $_POST["FEF(4)"];
$diagnostico = $_POST["IADIAG"];
$medicacion = $_POST["medi"];
*/

var_dump($_POST);
echo $diagnostico ;


$query = "INSERT INTO Paciente ( dna, NombreYapellido, Email, Obrasocial, FechaDeNacimiento, `FEV1(1)`, `FEV1(2)`, `FEV1(3)`, `FEV1(4)`, `FVC(1)`, `FVC(2)`, `FVC(3)`, `FVC(4)`, `FEF(1)`, `FEF(2)`, `FEF(3)`, `FEF(4)`, IADIAG, medi) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);
var_dump($stmt);  
if ($stmt) {
    $stmt->bind_param("isssiiiiiiiiiiiiiss",$DNI, $nombreYapellido, $email, $obrasocialPaciente, $Fechadenacimiento, $FEV1_1, $FEV1_2, $FEV1_3, $FEV1_4, $FVC_1, $FVC_2, $FVC_3, $FVC_4, $FEF_1, $FEF_2, $FEF_3, $FEF_4, $diagnostico, $medicacion);

    $sql = $mysqli->query($query);
    echo $sql;

    if ($stmt -> execute()) {
        echo '<div class="Success">Datos guardados correctamente</div>';
         header("Location: FormerpatientFront.php");  
    } else {
        echo '<div class="alerta">No se guardaron los datos. Error: ' . $stmt->error . '</div>';
    }
    $stmt->close();
}
// }
?>

  
  