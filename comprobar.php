<?php
      $user = $_POST['b'];
       
      if(!empty($rut)) {
            comprobar($rut);
      }
       
      function comprobar($b) {
            $con = mysql_connect('localhost','edgar','aiep','ecomerce');
            mysql_select_db('masajes', $con);
       
            $sql = mysql_query("SELECT * FROM clientes WHERE rut = '".$b."'",$con);
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button> Rut Disponible</div>";
            }else{
                 "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button> Rut no disponible</div>";
            }
      }     
?>