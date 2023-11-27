
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
.submit{
    color: white;
    background-color: rgb(24, 124, 231);
    border-radius: 5px;
    font-size: 16px;
    margin-top: 40px;
    margin-left: 180px;
    width: 160px;
    height: 180px;
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
}
.perfil{
    width: 50px;
    height: 50px;
    margin-right: 0%;
    cursor: pointer;
}
.logo{
    width: 55px;
    height: 55px;
    margin-top: 0%;
    margin-left: 0%;
    padding: 0px;
    border: 0px;
}
#NEW-PATIENT{
text-shadow: 2px 4px 10px rgb(255, 255, 255);
}
.menu:hover{
    text-decoration: underline;
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
    margin-top: 520px;
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
    background-image: url(./imagenes/fondo_pulmoAi_inicio.jpg);
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
    <nav class="menu"> <a href="frontinicio.php"> HOME </a> </nav> 
    <nav class="menu" id="NEW-PATIENT"> NEW PATIENT </nav>
    <nav class="menu"> <a href="formerpatientfront.php"> FORMER PATIENT </a></nav>
    <nav class="menu"> <a href="frontaboutus.php"> ABOUT US</a></nav>
    <figure>
        <img src="./imagenes/Icono Perfil Blanco.png" alt="perfil" class="perfil">
    </figure>
</header>
    <section>
        <img src="./imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
        <form action="Paciente.php" method="POST"> 
            <container> 
                <div class="form-group">
                    <label class="label" for="name_surname">NAME AND SURNAME:</label>
                    <input class="subrayado" type="text" id="name_surname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label" >MEDICAL ASSURANCE:</label>
                    <input class="subrayado" type="number" id="obra_social" required>
                </div>
                <div class="form-group">
                    <label class="label" >ID:</label>
                    <input class="subrayado" type="number" id="id" required>
                </div>
                <div class="form-group" >
                    <label class="label">EMAIL ADRESS:</label>
                    <input class="subrayado" type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label class="label">DATE OF BIRTH:</label>
                    <input class="subrayado" type="datetime" id="date" required>
                </div>
                <table border="1">
                    <tr>
                        <td>FEV1 Pre-BD Value</td>
                        <td><input type="number" id="input_tabla"  placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Pre-BD Pred</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Post-BD Value</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEV1 Post-BD Pred </td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Value</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Pred</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Value</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Pred</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Value</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Pred</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Value</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Pred</td>
                        <td><input type="number" placeholder="Type here" required></td>
                    </tr>
                </table>

                <div class="feedback" id="diagnostico">
                    <label class="diag">IA Diagnosis:</label>
                    <input class="input_feedback" type="text" required id="resultField">
                </div>
                <div class="feedback">
                    <label class="medic">Medication:</label>
                    <input class="input_feedback" id="input_medic" placeholder="Type here..." type="text" required>
                </div>

                <button class="submit"><a href="formerpatientfront.php">Submit</button>
                <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
            </container>
        </form>
</section>
<script>
    

    const respuesta = document.getElementById("resultField") = data;
</script>
</body>
</html>