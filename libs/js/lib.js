//João Filipe, 13568
$(document).ready(function () 
{
	var ano = getUrlParameter('ano');
	var semestre = getUrlParameter('semestre'); 

	$('#filter').val(semestre);
	$('#filter_ano').val(ano);	 

    $("#filter").change(function () 
    {
        x = parseInt($(this).val());
        y = parseInt($('#filter_ano').val());

        goto = './horario.php?ano=' + y + '&semestre=' + x;
        //alert(goto);
        window.location.href = goto;
    })

    $("#filter_ano").change(function () 
    {
        y = parseInt($(this).val());
        x = parseInt($('#filter').val());

        goto = './horario.php?ano=' + y + '&semestre=' + x;
        //alert(goto);
        window.location.href = goto;
    })

    //Função que permite ir buscar os parametros ao URL
    function getUrlParameter(sParam) 
	{
	    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) 
	    {
	        sParameterName = sURLVariables[i].split('=');

	        if (sParameterName[0] === sParam) 
	        {
	            return sParameterName[1] === undefined ? true : sParameterName[1];
	        }
	    }
	};

});