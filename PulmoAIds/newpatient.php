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
    margin-left: 30px;
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
    height: 420px;
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
    background-image: url(../imagenes/fondo_pulmoAi_inicio.jpg);
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
#dna{
    margin-left: 175px;
}
#Email{
    margin-left: 75px;
}
#FechaDeNacimiento{
    margin-left: 75px;
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
    <a href="./frontregistro2.php">   <img src="./imagenes/Icono Perfil Blanco.png" alt="perfil" class="perfil">
</a>
    </figure>
</header>
    <section>
        <img src="./imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
        <form method="POST" id="form-new-patient">  
            <container> 
                <div class="form-group">
                    <label class="label" for="NombreYapellido">NAME AND SURNAME:</label>
                    <input class="subrayado" name="NombreYapellido" type="text" id="NombreYapellido" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label" >MEDICAL ASSURANCE:</label>
                    <input class="subrayado" name="Obrasocial" type="text" id="Obrasocial" required>
                </div>
                <div class="form-group">
                    <label class="label" >ID:</label>
                    <input class="subrayado" name="dna" type="text" id="dna" required>
                </div>
                <div class="form-group" >
                    <label class="label">EMAIL ADRESS:</label>
                    <input class="subrayado" name="Email" type="email" id="Email" required>
                </div>
                <div class="form-group">
                    <label class="label">DATE OF BIRTH:</label>
                    <input class="subrayado"name="FechaDeNacimiento" type="datetime" id="FechaDeNacimiento" required>
                </div>
                <table border="1">
                <tr>
                        <td>FEV1 Pre-BD Value</td>
                        <td><input type="text" name="FEV1(1)" id="dato1" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Pre-BD Pred</td>
                        <td><input type="text" name="FEV1(2)" id="dato2" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td>FEV1 Post-BD Value</td>
                        <td><input type="text" name="FEV1(3)" id="dato3" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEV1 Post-BD Pred </td>
                        <td><input type="text" name="FEV1(4)" id="dato4" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Value</td>
                        <td><input type="text" name="FVC(1)" id="dato5" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Pre-BD Pred</td>
                        <td><input type="text" name="FVC(2)" id="dato6" placeholder="Type hereí" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Value</td>
                        <td><input type="text" name="FVC(3)" id="dato7" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FVC Post-BD Pred</td>
                        <td><input type="text" name="FVC(4)" id="dato8" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Value</td>
                        <td><input type="text" name="FEF(1)" id="dato9" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Pre-BD Pred</td>
                        <td><input type="text" name="FEF(2)" id="dato10" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Value</td>
                        <td><input type="text" name="FEF(3)" id="dato11" placeholder="Type here" required></td>
                    </tr>
                    <tr>
                        <td> FEF Post-BD Pred</td>
                        <td><input type="text" name="FEF(4)" id="dato12" placeholder="Type here" required></td>
                    </tr>
                </table>
                <div class="feedback" id="diagnostico">
                    <label class="diag">IA Diagnosis:</label>
                    <input class="input_feedback" name="IADIAG" type="text" id="resultField">
                </div>
                <div class="feedback" id="feedback">
                    <label class="medic">Medication:</label>
                    <input class="input_feedback" name="medi" id="input_medic" placeholder="Type here..." type="text">
                </div>
                <input type="submit" class="submit" value="Submit">
                <br> </br>
                <br> </br>
                <br> </br>
                <br> </br>
            </container>
        </form>
</section>
<script>
    const form = document.getElementById("form-new-patient")
    const diagnostico = document.getElementById("diagnostico")
    const feedback = document.getElementById("feedback")
    diagnostico.style.display = "none"
    feedback.style.display = "none"
    let firstSubmit = false;
    const sendRequest = async (e) => {
        e.preventDefault()
        if(!firstSubmit){
        const obj = new FormData();
        for(let i = 0; i < e.target.length; i++) {
            obj.append(e.target[i].name, e.target[i].value)
        }
        const res1 = await fetch("http://localhost/Front_proyecto/PulmoAIds/newsubmit.php", {
            method: "POST",
            body: JSON.stringify(obj)
        })
        const data1 = await res1.text()
        console.log(data1)
        const dato1 = document.getElementById("dato1").value;
        const dato2 = document.getElementById("dato2").value;
        const dato3 = document.getElementById("dato3").value;
        const dato4 = document.getElementById("dato4").value;
        const dato5 = document.getElementById("dato5").value;
        const dato6 = document.getElementById("dato6").value;
        const dato7 = document.getElementById("dato7").value;
        const dato8 = document.getElementById("dato8").value;
        const dato9 = document.getElementById("dato9").value;
        const dato10 = document.getElementById("dato10").value;
        const dato11 = document.getElementById("dato11").value;
        const dato12 = document.getElementById("dato12").value;

        let res = await fetch(`http://localhost:8000/PulmoAIds?dato1=${dato1}&dato2=${dato2}&dato3=${dato3}&dato4=${dato4}&dato5=${dato5}&dato6=${dato6}&dato7=${dato7}&dato8=${dato8}&dato9=${dato9}&dato10=${dato10}&dato11=${dato11}&dato12=${dato12}`);
        let data = await res.json();
        const respuesta = document.getElementById("resultField")
        respuesta.value = data.prediction;
        firstSubmit = true;
        form.action = "Paciente.php"
        diagnostico.style.display = "block"
        feedback.style.display = "block"
        form.removeEventListener("submit", sendRequest);
        }
        // window.location.replace("http://localhost/Front_proyecto/PulmoAIds/newsubmit.php");
    }
    form.addEventListener("submit", sendRequest)
</script>
</body>
</html>