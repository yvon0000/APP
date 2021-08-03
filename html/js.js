function validarDatosGET(){
            
    ////<!-- Creamos una variable llamada verificar que tiene asociado un valor Verdadero (true) -->
    var verificar=true;
    //creamos una variable llamada validarNombre que toma valor  document.valida_datos_get_frm
    let validarDatos= document.valida_datos_get_frm;
    //<!-- Negando lo que tiene nuestro campo nombre_txt (Si esta vació) -->
    
    if(!validarDatos.correo_txt.value){
   //creamos un div en js
     const mostrarAlerta=document.createElement("DIV")
     mostrarAlerta.textContent="El campo nombre es obligatorio"
//selecionar el id formulario
     const  SelecionarFormulario=document.querySelector("#formulario")
     SelecionarFormulario.appendChild ( mostrarAlerta )
     //creamos una clase en js
    mostrarAlerta.classList.add("alerta")
    
     setTimeout(() => {
mostrarAlerta.remove();
}, 3000);
        //<!-- focus permite que el puntero del mouse se posicione en el lugar indicado -->
        validarNombre.correo_txt.focus();
        //<!-- La variable verificar toma el valor de falso --> 
        verificar = false;
    }
    
    
    else if(!validarDatos.contrasena_txt.value){
        //creamos un div en js
        const mostrarAlerta=document.createElement("DIV")
     mostrarAlerta.textContent="El campo apellido es obligatorio"
//selecionar el id formulario
     const  SelecionarFormulario=document.querySelector("#formulario")
     SelecionarFormulario.appendChild ( mostrarAlerta )
     //creamos una clase en js
    mostrarAlerta.classList.add("alerta")
    
     setTimeout(() => {
mostrarAlerta.remove();
}, 3000);
        document.valida_datos_get_frm.contrasena_txt.focus();
        //<!-- La variable verificar toma el valor de falso --> 
        verificar = false;
    }
    
    
    //<!-- Verifica preguntamos si tiene valor verdadero va enviar los datos con el método submit hacia nuestro archivo php -->
    if(verificar==true){
        document.valida_datos_get_frm.submit();
        
    }

}