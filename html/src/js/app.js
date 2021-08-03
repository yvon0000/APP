
const cita ={
	nombre:"",
	apellido:""
}
document.addEventListener("DOMContentLoaded", function () {
    validarNombre();
	validarApellido();
	mostrarHtml();
});
function validarNombre(){

	const nombreInput=document.querySelector(".campoNombre ");
	nombreInput.addEventListener("input", e =>{
		
		const nombreTexto=e.target.value
		if(nombreTexto===""){
console.log("nombre invalido")

		}else{
			console.log("valido")
		}
	})
	
}  
function validarApellido(){

	const apellidoInput =document.querySelector(".campoApellido ");
	apellidoInput.addEventListener("input", e =>{
		
		const nombreTexto=e.target.value
		if(nombreTexto===""){
console.log("nombre invalido")

		}else{
			console.log("valido")
		}
	})
	
}
function mostrarHtml(){
	const {nombre,apellido}=cita
	const resumenDiv=document.querySelector(".contenido");

	if(Object.values(cita).includes("")){
        const noServicios =document.createElement("p")
        noServicios.textContent="Falta datos a la cita ,nombre o hora"
        noServicios.classList.add("invalidad-cita")

        //agregar en htm
        resumenDiv.appendChild(noServicios)
}
}