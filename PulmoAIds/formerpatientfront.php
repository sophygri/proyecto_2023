<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="imagenes" type="imagenes" href="./Front_proyecto/imagenes/10px">
</head>
<body>
    <style>
body{
    margin: 0;
}
button {
    color:rgb(16, 145, 220);
    background: none;
    border: 0;
    width: 70%;
    height: 8%;
    margin-left: 50px;
    margin-bottom: 0px;
    margin-top: 5px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    cursor: pointer;
    font-size: 17px;
}
button:active{
    color:rgb(115, 208, 240);
    background-color: rgb(95, 194, 251);
}
header {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    margin-right: 0%;
    align-items: flex-start;
    position: absolute;
    gap: 80px;
    color: white;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
nav{
    font-size: 20px;
    margin-left: 20px;
    margin-top: 1.5%;
    cursor: pointer;
    color: white;
    white-space: nowrap;
}
.perfil{
    width: 50px;
    height: 50px;
    margin-right: 0%;
    cursor: pointer;
}
.logo{
    width: 65px;
    height: 55px;
    margin-top: 0%;
    margin-left: 0%;
    padding: 0px;
    border: 0px;
}
#FORMER_PATIENT{
text-shadow: 2px 4px 10px rgb(255, 255, 255);
}
.menu:hover{
    text-decoration: underline;
}
.paciente{
    margin-top: 10%;
    padding-top: 0%;
    position:absolute;
    display: flex;
    justify-content: flex-start;
    margin-left: 29%;
}
.barra{
    padding: 10px; 
    border: 1px solid white;
    border-radius: 5px; 
    background: transparent; 
    color: white; 
    width: 400px;
    margin-top: 10%;
}
.lupa{
    margin-left: 1px;
    width: 1px;
    background-image: url('./imagenes/Lupa\ Blanca.png');
    background-size: cover; 
    width: 40px;
    height: 40px; 
    border: none; 
    cursor: pointer; 
    margin-top: 10%;
}
#id{
    margin-left: 36.5%;
}
#email{
    margin-left: 17%;
}
#date{
    margin-left: 17%;
}
form{
    justify-content: center;
    display: flex;
    color: white;
}
.label{
    margin-bottom: 18px;
    white-space: nowrap;
}
input{
    background-color: transparent;
    margin-bottom: 18px;
    margin-left: 30px;
    margin-right: 15px;
    margin-top: 1px;
    border: none;
    height: 30px;
    width: 300px;
    font-style: italic;
    font-size: 16px;
    color: white;
}
input::placeholder{
    color: rgba(181, 221, 253, 0.974);
    opacity: 0.5;
    text-indent: 10px;
}
td{
    color: white;
    width: 100%;
}
a{
   color: white;
   text-decoration: none;
}
container{
    color: white;
    background-color:none;
    display: flex;
    justify-content: center;
    flex-direction: column;
    position: absolute;
    border-radius: 15px;
    width: 530px;
    height: 560px;
    margin-top: 670px;
}
table{
    margin: auto;
    margin-left: 25px;
    margin-right: 5px;
    color: white;
    border-style: groove;
    border-color: white;
}
.fondo{
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    position: fixed;
    background-image: url(fondo_pulmoAi_inicio);
    background-size: cover;
    background-position: center;
    z-index: -1;
}
.form-group{
    display: flex;
    flex-direction: row;
    margin-left: 30px;
}
.subrayado{
    border-bottom: 1px solid#fbf7f7;
}
.submit{
    color: white;
    background-color: rgb(24, 124, 231);
    border-radius: 5px;
    font-size: 16px;
    margin-top: 70px;
    margin-left: 180px;
    width: 180px;
    height: 200px;
}
.input_feedback{
    border: 2px solid white;
    padding: 1px;
    width: 50%;
    height: 100%;
}
.feedback{
    display: flex;
    flex-wrap: nowrap;
    margin-left: 10%;
    margin-top: 10%;
    font-size: 20px;
}
#input_medic{
    margin-left: 45px;
}
    </style>
<header>
<figure>
       <img src="./imagenes/Icono Pulmo AI.png" alt="logo" class="logo">
    </figure>
    <nav class="menu"> <a href="frontinicio.php"> HOME </a></nav> 
    <nav class="menu"> <a href="newpatient.php"> NEW PATIENT</a></nav>
    <nav class="menu" id="FORMER_PATIENT"> FORMER PATIENT </nav>
    <nav class="menu"> <a href="frontaboutus.php"> ABOUT US</a></nav>
    <figure>
      <img src="./imagenes/Icono Perfil Blanco.png" alt="perfil" class="perfil">
    </figure>
</header>
    <section>
        <img src="./imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
       
        <form class="paciente" action="#busca">
            <input type="text" class="barra" id="busqueda" name="busqueda" placeholder="Search for a patient...">
            <button class="lupa" id="busca"></button>
        </form>    
       <!-- <form id="updateForm">
   
   <button type="button" class="submit" id="updateButton">Update data</button>
-->
</form>

        <form method="POST" action="Paciente.php" id="updateform"> 
            <container> 
                <div class="form-group">
                    <label class="label" for="name_surname">NAME AND SURNAME:</label>
                    <input class="subrayado" name="NombreYapellido" type="text" id="name_surname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label" >MEDICAL ASSURANCE:</label>
                    <input class="subrayado" name="Obrasocial" type="text" id="obra_social" required>
                </div>
                <div class="form-group">
                    <label class="label" >ID:</label>
                    <input class="subrayado" name="dna" type="number" id="id" required>
                </div>
                <div class="form-group">
                    <label class="label">EMAIL ADRESS:</label>
                    <input class="subrayado" name="Email" type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label class="label">DATE OF BIRTH:</label>
                    <input class="subrayado" name="FechaDeNacimiento" type="datetime" id="date" required>
                </div>
                <table border="1">
                    <tr>
                        <td>FEV1 Pre-BD Value</td>
                        <td><input type="number" name="FEV1(1)" id="input_tabla"  placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Pre-BD Pred</td>
                        <td><input type="number" name="FEV1(2)" id="input_tabla1" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Post-BD Value</td>
                        <td><input type="number" name="FEV1(3)" id="input_tabla2" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEV1 Post-BD Pred </td>
                        <td><input type="number"name="FEV1(4)" id="input_tabla3" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Value</td>
                        <td><input type="number" name="FVC(1)" id="input_tabla4" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Pred</td>
                        <td><input type="number" name="FVC(2)" id="input_tabla5" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Value</td>
                        <td><input type="number" name="FVC(3)" id="input_tabla6" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Pred</td>
                        <td><input type="number" name="FVC(4)" id="input_tabla7" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Value</td>
                        <td><input type="number" name="FEF(1)" id="input_tabla8" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Pred</td>
                        <td><input type="number" name="FEF(2)" id="input_tabla9" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Value</td>
                        <td><input type="number" name="FEF(3)" id="input_tabla10" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Pred</td>
                        <td><input type="number" name="FEF(4)" id="input_tabla11" placeholder="Type here" required></td>
                    </tr>
                </table>

                    <div class="feedback" id="diagnosticos">
                        <label class="diag">IA Diagnosis:</label>
                        <input class="input_feedback" name="IADIAG" id="diagnostico" type="text" required>
                    </div>
                    <div class="feedback">
                        <label class="medic">Medication:</label>
                        <input class="input_feedback" name="medi" id="input_medic" placeholder="Type here..." type="text" required>
                    </div>
                    <input id="actua" name="actua" type="hidden" value="UP">
                    <button type="submit" class="submit" id="updateButton">Update data</button>
                <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
            </container>
        </form>
</section>
</body>
<script src="jquery-3.7.1.js" type="text/javascript"></script>
<script src="script2.js" type="text/javascript"></script>


</html>