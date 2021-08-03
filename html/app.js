function validarformulario(){
    var codigo = $('#codigo').val();
    var descripcion = $('#descripcion').val();
    var producto = $('#producto').val();
    var evaporacion = $('#evaporacion').val();
    var vencimiento = $('#vencimiento').val();
    var precio = $('#precio').val();
    
    var contador = 0;
    var sexo = "";
    
    if(codigo == '' || producto == '' || descripcion== '' || evaporacion==''|| vencimiento==''|| precio==''){
    alert('Debe completar todos los campos');
    
       } else{
        $("<tr> <td>"+codigo+" </td> <td>"+descripcion+"</td> <td>"+producto+"</td> <td>"+evaporacion+"</td> <td>"+vencimiento+"</td> <td>"+precio+"</td>< <td>quitar </td> </tr>").appendTo("#listadousuarios");
          
    }

    
     }
    