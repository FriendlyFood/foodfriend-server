<?php
		if($id==0)
		{
			$(label).append('<em> producto no recomendado </em>');
			$(label).append('<img src="/assets/img/green-signal.png" alt="Rojo"/>');
			$(label).append('assets/img/green-signal.png');
		}
		else if($id==1)
		{
			$(label).append('<em> precaucion </em>');
			$(label).append('<img src="/assets/img/yellow-signal.png" alt="Amarillo"/>');
		}
		else if($id==2)
		{
			$(label).append('<em> producto no recomendado </em>');
			$(label).append('<img src="/assets/img/red-signal.png" alt="Rojo"/>');
		}
		else
		{
			$(label).append('error');
		}
?>