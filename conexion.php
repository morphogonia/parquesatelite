<?php
function conectarse(){
		if(!($link=mysql_connect('mysql.bulabe.com','uparquesatdb','up4rqu3s4t'))){
			echo 'el servidor no se ha conectado';
			exit();		
			}
		if(!mysql_select_db('dbparquesatelite',$link)){
			echo 'la base de datos no se ha conectado';
			exit();
			}
		return $link;		
		}
		$link= conectarse();
		
		mysql_close($link);
?>