<?
session_start();
date_default_timezone_set("America/Lima");
header("Content-Type: text/html; charset=iso-8859-1");
require_once "../config/config.php";
$cn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die (mysqli_error($cn));
mysqli_select_db($cn,DB_NAME);
mysqli_set_charset($cn,'utf8');
/*___ if($_POST['modo']=="actualiza")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="actualiza")	{
	if(is_file("../config/sql.sql"))	{
		$handle=fopen("../config/sql.sql","r");
		$contents="";
		if($handle)		{
			while (!feof($handle))	{
				$contents.=fread($handle,8192);
			};
			fclose($handle);
		};
		$arrdata=explode(chr(13).chr(10),$contents);
		$texto="";
		for($k=0;$k<count($arrdata);$k++)		{
			if(strlen($arrdata[$k])>0)	{
				$cadena=$arrdata[$k];
				@mysqli_query($cadena,$cn);
				echo $cadena;
			};
		};
	};	
	mysqli_close($cn);
};	
// /*___ if($_POST['modo']=="archivos")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="archivos")	{
	$rows = array();
	foreach (glob($_POST['mascara']) as $nombre_fichero) {
		$rows[]= array("nombre"=>$nombre_fichero);
	};		
	echo json_encode($rows);
};
/*___ if($_POST['modo']=="get" || $_GET['modo']=="get")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="get" || $_GET['modo']=="get")	{
	if($_POST['modoarchivo']=="")	$_POST['modoarchivo']=" persona ";
	if($_POST['pagina']=="")	$_POST['pagina']="1";
	$arr1=explode("|",$_POST['campos']);
	$arr2=explode("|",$_POST['titulos']);
	$cadena="select ";
	for($k=0;$k<count($arr1);$k++)	{
		$cadena.=$arr1[$k]." as ".$arr2[$k].",";
	}
	$cadena=substr($cadena,0,strlen($cadena)-1);
	if($_POST['campos']=="")	$cadena=" select * ";
	$cadena.=" from ".$_POST['modoarchivo'];
	$cadena.=" where true ";
	$cadena.=" ".($_POST['llavecampo']=="" ? "" : " and ".$_POST['llavecampo']." = '".$_POST['llavevalor']."'" );
	$cadena.=" ".($_POST['prefiltro']=="" ? "" : " and ".$_POST['prefiltro']);
	$parte2="(false or ";
	for($k=0;$k<count($arr1);$k++)	{
		$parte2.=$arr1[$k]." like '%".$_POST['buscapersona']."%' or ";
	}
	$parte2.="false )";
	if($_POST['buscapersona']!="") $cadena.=" and ".$parte2;
  $cadena.=" ".($_POST['orden']=="" ? " " : " order by ".$_POST['orden'] )." ";
	$cadena.=($_POST['paginacion']!="" ? " limit ".($_POST['paginacion']*($_POST['pagina']-1)).",".$_POST['paginacion'] : ""  );
	$cadena=" ".($_POST['buscacampo']=="" ? " ( ".$cadena." ) " : " select * from (".$cadena.") _x_ where ".$_POST['buscacampo']."  like '%".$_POST['buscavalor']."%' " );
	$cadena.=" ".($_POST['filtro']=="" ? "" : " ".$_POST['filtro'] );
	$cadena.=" ".($_POST['orden']=="" ? " " : " order by ".$_POST['orden'] )." ";
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$rows[] = $r;
	}
	echo json_encode($rows);
	// ob_flush();ob_start();var_dump($rows);file_put_contents("../logs/log".date("Ymd",time()).".txt", ob_get_flush(), FILE_APPEND | LOCK_EX);	
	mysqli_close($cn);
}
/*___ if($_POST['modo']=="grabar" || $_GET['modo']=="grabar")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="grabar" || $_GET['modo']=="grabar")	{
	$cadena="show fields from ".$_POST['modoarchivo'];
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$cadena="update ".$_POST['modoarchivo']." set ";
	$cadena2="insert into ".$_POST['modoarchivo']." ( ";
	$cadena2_b=") values (";
	$cadenallave="";
	while ($row = mysqli_fetch_array($rs))	    {
		if(isset($_POST[$row[0]]))	{
			if($row[0]!=$_POST['llave']) {
				$cadena.=$row[0]."='".$_POST[$row[0]]."',\n";
			} else {
				if($_POST[$row[0]]!="")	$cadenallave=$row[0]."='".$_POST[$row[0]]."'";
			}
			$cadena2.=$row[0].",\n";
			$cadena2_b.="'".$_POST[$row[0]]."',\n";
		};
	};
	$cadena=substr($cadena,0,strlen($cadena)-2)." where ".$cadenallave;
	if($cadenallave=="" || $cadenallave=="0")	$cadena=substr($cadena2,0,strlen($cadena2)-2).substr($cadena2_b,0,strlen($cadena2_b)-2).")";
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	echo mysqli_insert_id();
	mysqli_close($cn);
}
/*___ if($_POST['modo']=="grabar" || $_GET['modo']=="grabar")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="updateatributo" || $_GET['modo']=="updateatributo")	{
	$cadena="show fields from ".$_POST['modoarchivo'];
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$cadena="update ".$_POST['modoarchivo']." set ".$_POST['atributo']."='".$_POST['valoratributo']."' where ".$_POST['llave']."='".$_POST['valorllave']."'";
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	mysqli_close($cn);
}
/*___ if($_POST['modo']=="grabar" || $_GET['modo']=="grabar")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
if($_POST['modo']=="sql" || $_GET['modo']=="sql")	{
	$cadena=$_POST['cadena'];
	$arr=explode(";",$_POST['cadena']);
	for($k=0;$k<count($arr);$k++)	{
		$cadena=$arr[$k];
		$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("../logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
		@file_put_contents("../logs/log".date("Ymd",time()).".txt", chr(13).chr(10)."[".date("Y.m.d H:i:s",time())."][".$_SESSION['persona']."/".mysqli_insert_id()."]".str_replace(chr(13)," ",str_replace(chr(10)," ",$cadena)), FILE_APPEND | LOCK_EX);
	}
	mysqli_close($cn);
}
?>


