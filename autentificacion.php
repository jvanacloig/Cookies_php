<?php
$usuaris=array("admin"=>"admin","juan"=>"123", "maria"=>"maria123");
$usuari_aprobar=$_GET[usuari];
$contraseña_probar=$_GET[contraseña];

setcookie($usuaris, time()+(30*24*3600));

for ($i = 1; $i <= sizeof($usuaris); $i++) {
  if($usuari_aprobar==$usuaris[$i]){
    for ($q = 1; $q <= sizeof($usuaris); $q++) {
      if($contraseña_probar==$usuaris[$i][$q]){
        header("Location:seion_in.html");
      }else{
        echo "<script>Contraseña incorrecta!</script>";
      }
    }
  }else{
    echo "<script>Usuari incorrecta!</script>";
  }
}
?>
