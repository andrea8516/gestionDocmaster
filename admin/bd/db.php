
<?
class Conectar{
public static function conexion(){
$conexion=new mysqli("localhost", "root", "", "dap2015");
$conexion->query("SET NAMES 'utf8'");
return $conexion;
}
}
?>