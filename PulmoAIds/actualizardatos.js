$(document).ready(function(){
    $("#updateButton").click(function(){
        // Obtener los valores del formulario
        const data = {
            dna: $("#id").val(),
            Email: $("#email").val(),
            NombreYapellido: $("#name_surname").val(),
            Fechadenacimiento: $("#date").val(),
            obrasocialPaciente:$("#obra_social").val(),
            'FEV1(1)': $("#input_tabla").val(),
            'FEV1(2)': $("#input_tabla1").val(),
            'FEV1(3)': $("#input_tabla2").val(),
            'FEV1(4)': $("#input_tabla3").val(),
            'FVC(1)': $("#input_tabla4").val(),
            'FVC(2)': $("#input_tabla5").val(),
            'FVC(3)': $("#input_tabla6").val(),
            'FVC(4)': $("#input_tabla7").val(),
            'FEF(1)': $("#input_tabla8").val(),
            'FEF(2)': $("#input_tabla9").val(),
            'FEF(3)': $("#input_tabla10").val(),
            'FEF(4)': $("#input_tabla11").val()
            
        };

        $.ajax({
            type:"POST",
            url:"Busqueda.php",
            dataType:"json",
            data: data,
            success:function(res){
                // Manejar la respuesta del servidor
                console.log(res);
                // Puedes mostrar un mensaje de éxito o realizar otras acciones necesarias.
            },
            error:function(error){
                // Manejar errores si la solicitud no fue exitosa
                console.error(error);
            }
        });
    });
});
