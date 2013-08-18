jQuery.noConflict();

jQuery(document).ready(function($){


	$("#boton").click(function() {
		var numero=$("#tarjeta").val()
		$("#codigo").empty();

	if(numero.length===12){
		$("#codigo").append('<img src="http://barcode.tec-it.com/barcode.ashx?code=EAN13&amp;modulewidth=fit&amp;data=' + $("#tarjeta").val() + '&amp;dpi=72&amp;imagetype=gif&amp;rotation=0" border="0" alt="Espere a que se genere el codigo" />')	
	}
	else
	{
		if(numero.length===13)
		{
			
				var control=parseInt(numero[0])+parseInt((numero[1]*3))+parseInt(numero[2])+parseInt((numero[3]*3))+parseInt(numero[4])+parseInt((numero[5]*3))+parseInt(numero[6])+parseInt((numero[7]*3))+parseInt(numero[8])+parseInt((numero[9]*3))+parseInt(numero[10])+parseInt((numero[11]*3))


			
			
			i=control
			while(i%10!=0)
			{
				i++
			}

			
			if(i-control===parseInt(numero[12]))
			{
				$("#codigo").append('<img src="http://barcode.tec-it.com/barcode.ashx?code=EAN13&amp;modulewidth=fit&amp;data=' + $("#tarjeta").val() + '&amp;dpi=72&amp;imagetype=gif&amp;rotation=0" border="0" alt="Espere a que se genere el codigo" />')
			}
			else
			{
				$("#codigo").append('<strong>El código introducido no es válido</strong>')
			}
	
		}
		else
		{
			$("#codigo").append('<strong>El código introducido no es válido</strong>')
		}	
	}
		
   

	});

  });  	
	



