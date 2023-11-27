<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="imagenes" type="imagenes" href="./imagenes/fondo_pulmoAi_inicio.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <style>
*{
    margin: 0;
}
body{
    margin: 0;
}
 header {
    display: flex;
    justify-content: space-between;
    align-self: center;
    padding: 25px;
    margin-right: 0%;
    margin-left: 20px;
    margin-top: 0%;
    align-items: flex-start;
    position: absolute;
    gap: 100px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
nav{
    font-size: 20px;
    margin-left: 20px;
    margin-top: 1.5%;
    cursor: pointer;
    color: white;
    white-space: nowrap;
}
.menu:hover{
    text-decoration: underline;
}
#ABOUTUS{
    text-shadow: 2px 4px 10px rgb(255, 255, 255);  
}
a{
    color: white;
    text-decoration: none;
}
h1{
    font-size: 60px;
    font-family:Georgia, 'Times New Roman', Times, serif;
    margin-bottom: 0;
    margin-top: 175px;
    position: absolute;
    color: white;
    margin-left: 480px;
    border-bottom: 3px solid #fff; 
}
p{
    color: rgb(210, 241, 249);
    position: absolute;
    font-size: 24px;
    margin-top: 275px;
    text-align: center;
    margin-left: 150px;
    margin-right: 150px;
    font-weight: lighter;
    font-family: 'Inter';
}
.p2{
    color: rgb(210, 241, 249);
    position: absolute;
    margin-top: 430px;
    text-align: center;
}
.negrita{
    color: white;
    font-weight: bold;
}
</style>
<header>
   <figure>
       <img src="./imagenes/Icono Pulmo AI.png" alt="logo" class="logo">
   </figure>
   <nav class="menu"><a href="frontregistro2.php"> HOME</a> </nav>
   <nav class="menu"><a href="newpatient.php">NEW PATIENT</a></nav>
   <nav class="menu"><a href="formerpatientfront.php">FORMER PATIENT</a></nav>
   <nav class="menu" id="ABOUTUS"> ABOUT US </nav>
   <figure>
   <a  href="./frontregistro2.php"> <img src="./imagenes/Icono Perfil Blanco.png" alt="perfil" class="perfil">
</a>
   </figure>
</header>
<section>
   <h1> PULMO. AI</h1>
   <p> At<span class="negrita"> Pulmo.AI</span>, we <span class="negrita">revolutioned the diagnosis and management of respiratory diseases </span> through the power of <span class="negrita"> intelligence (AI) and spirometry data analysis.</span> Our project aims to <span class="negrita"> the detection of pulmonary diseases,</span> such as <span class="negrita">
    COPD, asthma and pulmonary fibrosis,</span> by streamlining the analysis of spirometry data.</p>
    
   <p class="p2">Our <span class="negrita"> mission </span> is to optimize time by <span class="negrita"> simplifying the complex process of diagnosing pulmonary 
    diseases </span> for doctors, while <span class="negrita"> enhancing precision and efficiency using an AI. </span>
    This user-friendly web interface allows you not only view diagnostic results,
    but also <span class="negrita">input crucial patient data,</span> to aid in the diagnosis process. <br> <br>With Pulmo.AI, we're transforming respiratory care for the better.</p>
   <img src="./imagenes/fondo_pulmoAi_inicio.jpg" alt="fondo" class="fondo">  
</body>
</html>