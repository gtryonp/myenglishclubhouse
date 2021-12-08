<?
session_start();
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
ini_set("display_errors", 1);
date_default_timezone_set("America/Lima");
header("Content-Type: text/html; charset=iso-8859-1");
require_once "../config/config.php";
$cn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]--> CONNECT -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
mysqli_select_db($cn,DB_NAME) 												or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]--> DB -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
mysqli_set_charset($cn,'utf8');
/*___ if($_POST['modo']=="setsession")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="setsession")	{	
	$_SESSION[$_POST['variable']]=utf8_decode($_POST['valor']);
	echo $_SESSION[$_POST['variable']];
}
/*___ if($_POST['modo']=="archivos")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="archivos")	{
	$rows = array();
	foreach (glob($_POST['mascara']) as $nombre_fichero) {
		$rows[]= array("nombre"=>$nombre_fichero);
	};		
	echo json_encode($rows);
};
/*___ if($_POST['modo']=="cargalibroalumno")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="cargalibroalumno")	{	
	$cadena="
		SELECT 
		libroalumno.libroalumno																				as libroalumno,
		alumno.alumno																									as alumno,
		libro.libro																										as libro,
		concat(alumno.paterno,' ',alumno.materno,' ',alumno.nombres) 	as alumnonombre,
		alumno.clave																									as alumnoclave,
		libro.nombre 																									as libronombre,
		libroalumno.paginas 																					as paginas,
		libroalumno.desde																							as desde
		FROM libroalumno,libro,alumno 
		WHERE libro.libro=libroalumno.libro and alumno.alumno=libroalumno.alumno	
	";
	if($_POST['clave']!="") 	$cadena.=" and alumno.alumno='".$_POST['clave']."'";
	if($_POST['alumno']!="") 	$cadena.=" and alumno.clave='".$_POST['clave']."'";
	$cadena.=" order by paterno,materno,nombres ";
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	

/*___ if($_POST['modo']=="cargalibroalumno")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="cargalibroalumnorespuesta")	{	
	$cadena="
		SELECT 
		libroalumnorespuesta.*
		FROM libroalumnorespuesta
		WHERE 1
	";
	if($_POST['clave']!="") 	$cadena.=" and alumno.alumno='".$_POST['clave']."'";
	if($_POST['alumno']!="") 	$cadena.=" and alumno.clave='".$_POST['clave']."'";
	$cadena.=" order by alumno,libro,respuesta ";
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	


/*___ if($_POST['modo']=="cargalibros")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="cargalibros")	{	
	$cadena="
		SELECT 
			libro.*																										
		FROM 
			libro
		order by 
			nombre ";	
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	

/*___ if($_POST['modo']=="cargalibros")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="cargacolegios")	{	
	$cadena="
		SELECT 
			colegio.*																										
		FROM 
			colegio
		order by 
			nombre ";	
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	

/*___ if($_POST['modo']=="cargalibros")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="cargaaulas")	{	
	$cadena="
		SELECT 
			aula.*
		FROM 
			aula
		order by 
			nombre ";	
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	


/*___ if($_POST['modo']=="cargaalumno" || $_GET['modo']=="cargaalumno")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="cargaalumnos")	{	
	$cadena="
		SELECT 
			alumno.*																										
		FROM 
			alumno
		order by 
			paterno,materno,nombres ";	
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	
/*___ if($_POST['modo']=="sql")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="sql")	{	
	$cadena=$_POST['cadena'];	
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
}	
/*___ if($_POST['modo']=="taskdone")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="taskdone")	{	
	$arr=explode(",",$_POST['valores']);
	$_POST['pagina']=$arr[0];
	$_POST['alumno']=$arr[1];
	$_POST['libro']=$arr[2];
	$_POST['tiempo']="[".date("Y-m-d H:i:s",time())."(".$arr[3].")(".(strlen($arr[5])>1000 ? "BLOB" : $arr[5] ).")]";
	$_POST['performance']=$arr[4];
	$_POST['respuesta']=$arr[5];
	$contador=0;
	$cadena="Pagina:".$_POST['pagina'].", Alumno:".$_POST['alumno'].", Libro:".$_POST['libro'].",Estado:".$_POST['estado'].",Respuesta:".$_POST['respuesta'];
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$cadena="select count(*) as contador from libroalumnorespuesta where libro='".$_POST['libro']."' and alumno='".$_POST['alumno']."' and pagina='".$_POST['pagina']."'";
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	while($r = mysqli_fetch_assoc($rs)) {	$contador = $r['contador'];	}
	if($contador==0)	{
		$cadena="insert into libroalumnorespuesta(libro,alumno,pagina,respuesta,performance,estado,tiempo) values ('".$_POST["libro"]."','".$_POST["alumno"]."','".$_POST["pagina"]."','".$_POST["respuesta"]."','".$_POST["performance"]."','".$_POST["estado"]."','".$_POST["tiempo"]."')";
	} else {
		$cadena="update libroalumnorespuesta set respuesta='".$_POST["respuesta"]."',performance='".$_POST["performance"]."',estado='".$_POST["estado"]."',tiempo=concat(tiempo,'".$_POST["tiempo"]."') where libro='".$_POST["libro"]."' and alumno='".$_POST["alumno"]."' and pagina='".$_POST["pagina"]."'";
	};
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
}	
/*___ if($_POST['modo']=="paginas")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="paginas")	{	
	$arr=explode(",",$_POST['valores']);
	$_POST['pagina']=$arr[0];
	$_POST['alumno']=$arr[1];
	$_POST['libro']=$arr[2];
	$_POST['i']=$arr[3];
	$_POST['d']=$arr[4];
	$cadena="
		SELECT count(*) as cantidad,coalesce(estado,'?')	as estado,'".$_POST["i"]."' as pagina,coalesce(tiempo,'') as tiempo, coalesce(respuesta,'') as rpta, coalesce(performance,'') as performance  FROM libroalumnorespuesta	where libro='".$_POST["libro"]."' and alumno='".$_POST["alumno"]."' and pagina='".$_POST["i"]."'
		union
		SELECT count(*) as cantidad,coalesce(estado,'?')	as estado,'".$_POST["d"]."' as pagina,coalesce(tiempo,'') as tiempo, coalesce(respuesta,'') as rpta, coalesce(performance,'') as performance  FROM libroalumnorespuesta	where libro='".$_POST["libro"]."' and alumno='".$_POST["alumno"]."' and pagina='".$_POST["d"]."'
	";	
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	
/*___ if($_POST['modo']=="sql")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="borra")	{	
	$cadena="delete from ".$_POST["nombretabla"]." where ".$_POST["llavecampo"]."='".$_POST["llavevalor"]."'";
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
}	
/*___ if($_POST['modo']=="excel")	{	 ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="excel")	{	
	$cadena="select aula from alumno where clave='".$_POST["alumno"]."'";
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	while($r = mysqli_fetch_assoc($rs)) {
		$_POST['aula'] = $r['aula'];
	}
	/*GFTP_20200802		//	$cadena="^^select ^^(select concat(paterno,' ',materno,' ',nombres)  	from alumno where alumno.alumno=libroalumnorespuesta.alumno) 	as alumno,^^(select nombre  																	from libro 	where libro.libro=libroalumnorespuesta.libro) 		as libro,^^libroalumnorespuesta.pagina																																											as pagina,^^libroalumnorespuesta.performance 																																								as performance^^from ^^libroalumnorespuesta ^^where ^^libro='".$_POST["libro"]."' and alumno in (select alumno from alumno where aula='".$_POST["aula"]."') ^^order by ^^alumno,pagina";*/
	$cadena="	
	select	
		(select nombre  																	from libro 	where libro.libro=libroalumnorespuesta.libro) 		as libro,
		(select concat(paterno,' ',materno,' ',nombres)  	from alumno where alumno.alumno=libroalumnorespuesta.alumno) 	as alumno,
		max(if(libroalumnorespuesta.pagina='4',performance,'-')) 																												as p_04,
		max(if(libroalumnorespuesta.pagina='6',performance,'-')) 																												as p_06,
		max(if(libroalumnorespuesta.pagina='8',performance,'-')) 																												as p_08,
		max(if(libroalumnorespuesta.pagina='10',performance,'-')) 																											as p_10,
		max(if(libroalumnorespuesta.pagina='12',performance,'-')) 																											as p_12,
		max(if(libroalumnorespuesta.pagina='14',performance,'-')) 																											as p_14,
		max(if(libroalumnorespuesta.pagina='16',performance,'-')) 																											as p_16,
		max(if(libroalumnorespuesta.pagina='18',performance,'-')) 																											as p_18,
		max(if(libroalumnorespuesta.pagina='20',performance,'-')) 																											as p_20,
		max(if(libroalumnorespuesta.pagina='22',performance,'-')) 																											as p_22,
		max(if(libroalumnorespuesta.pagina='24',performance,'-')) 																											as p_24,
		max(if(libroalumnorespuesta.pagina='26',performance,'-')) 																											as p_26,
		max(if(libroalumnorespuesta.pagina='28',performance,'-')) 																											as p_28,
		max(if(libroalumnorespuesta.pagina='30',performance,'-')) 																											as p_30,
		max(if(libroalumnorespuesta.pagina='32',performance,'-')) 																											as p_32,
		max(if(libroalumnorespuesta.pagina='34',performance,'-')) 																											as p_34,
		max(if(libroalumnorespuesta.pagina='36',performance,'-')) 																											as p_36,
		max(if(libroalumnorespuesta.pagina='38',performance,'-')) 																											as p_38,
		max(if(libroalumnorespuesta.pagina='40',performance,'-')) 																											as p_40
	from 
		libroalumnorespuesta 
	where 
		libro='".$_POST["libro"]."' and alumno in (select alumno from alumno where aula='".$_POST["aula"]."') 
	group by 
		libro,alumno
	order by 
		libro,alumno
	";	
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
}	
?>
