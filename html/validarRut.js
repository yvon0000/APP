function checkRut(run)
{
	//Despejar puntos
	var valor = run.value.replace('.',''); 
	//Despejar guión
		valor = valor.replace('-','');
		
	//Aislar el cuerpo y dígito verificador  (12345678)
	cuerpo = valor.slice(0,-1);
	//Dígito verificador le estoy indicando que no lo considere en el cuerpo de mi rut (12345678)
	dv = valor.slice(-1).toUpperCase();
	
	//Armando el rut
	run.value = cuerpo + '-' + dv
	
	// Validaciones del rut
	// Si no cumple con el mínimo de dígitos
	if(cuerpo.length < 7)
	{
		run.setCustomValidity("Rut Incompleto");
		
		return false;
	}
	
	//Calcular Dígito Verificador
	suma= 0;
	multiplo = 2;
	
	for(i=1;i<=cuerpo.length;i++)
	{
		//Obtener su Producto con el múltiplo Correspondiente
		index = multiplo * valor.charAt(cuerpo.length - i);
		//Sumar al contador general
		suma = suma + index;
		//Crear múltiplo dentro de un rango posible de dígitos verificadores 
		if(multiplo < 7)
		{
			multiplo = multiplo  + 1;		
		}
		else
		{
			multiplo = 2;
		}
	}
	
	dvEsperado = 11 - (suma % 11);
	
	//Casos especiales (0 y K)
	dv = (dv == 'K')?10:dv;
	dv = (dv == 0)?11:dv;
	
	//Validar el rut con el dígito verificador
	if(dvEsperado != dv)
	{
		//run.setCustomValidity("Rut Inválido"); 
		alert("run invalido")
		return false;
	}
	
	//Si todo sale bien, eliminar errores y decretar que el rut es válido
	run.setCustomValidity('');

}