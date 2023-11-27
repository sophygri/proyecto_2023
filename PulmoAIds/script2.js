$(document).ready(function(){

    $("#busca").click(function(e){
        //alert("kjlhñjkdfbs");
        e.preventDefault();
        console.log("A");
        $.ajax({
            type:"POST",
            url:"Busqueda.php",
            dataType:"json",
            data:'busqueda='+$("#busqueda").val(),
            success:function(res){

                $("#name_surname").val(res[0]['NombreYapellido']);
                $("#obra_social").val(res[0]['Obrasocial']);
                $("#id").val(res[0]['dna']);
                $("#email").val(res[0]['Email']);
                $("#date").val(res[0]['FechaDeNacimiento']);
                $("#input_tabla").val(res[0]['FEV1(1)']);
                $("#input_tabla1").val(res[0]['FEV1(2)']);
                $("#input_tabla2").val(res[0]['FEV1(3)']);
                $("#input_tabla3").val(res[0]['FEV1(4)']);
                $("#input_tabla4").val(res[0]['FVC(1)']);
                $("#input_tabla5").val(res[0]['FVC(2)']);
                $("#input_tabla6").val(res[0]['FVC(3)']);
                $("#input_tabla7").val(res[0]['FVC(4)']);
                $("#input_tabla8").val(res[0]['FEF(1)']);
                $("#input_tabla9").val(res[0]['FEF(2)']);
                $("#input_tabla10").val(res[0]['FEF(3)']);
                $("#input_tabla11").val(res[0]['FEF(4)']);
                $("#diagnostico").val(res[0]['IADIAG']);
                $("#input_medic").val(res[0]['medi']);
                

                
                //alert(resultado);
            },
            error:function(error){

            }
        });
    });

/*

    $("#updateButton").click(function(){
        //alert("kjlhñjkdfbs");
        $.ajax({
            type:"POST",
            url:"Paciente.php",
            dataType:"json",
            data:'busqueda='+$("#busqueda").val(),
            success:function(res){

                $("#name_surname").val(res[0]['NombreYapellido']);
                $("#obra_social").val(res[0]['Obrasocial']);
                $("#id").val(res[0]['dna']);
                $("#email").val(res[0]['Email']);
                $("#date").val(res[0]['FechaDeNacimiento']);
                $("#input_tabla").val(res[0]['FEV1(1)']);
                $("#input_tabla1").val(res[0]['FEV1(2)']);
                $("#input_tabla2").val(res[0]['FEV1(3)']);
                $("#input_tabla3").val(res[0]['FEV1(4)']);
                $("#input_tabla4").val(res[0]['FVC(1)']);
                $("#input_tabla5").val(res[0]['FVC(2)']);
                $("#input_tabla6").val(res[0]['FVC(3)']);
                $("#input_tabla7").val(res[0]['FVC(4)']);
                $("#input_tabla8").val(res[0]['FEF(1)']);
                $("#input_tabla9").val(res[0]['FEF(2)']);
                $("#input_tabla10").val(res[0]['FEF(3)']);
                $("#input_tabla11").val(res[0]['FEF(4)']);
                $("#diagnostico").val(res[0]['IADIAG']);
                $("#input_medic").val(res[0]['medi']);
                

                
                //alert(resultado);
            },
            error:function(error){

            }
        });
    });
*/



});