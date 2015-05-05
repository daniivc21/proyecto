

<?php

class login_controlador extends Modelo {

    public function validaUsuario($usuario, $password ) {
        parent::Modelo();
        $sql = "select id_usuario,CONCAT(apellido_paterno, ' ' , apellido_materno , ' ' , nombre), clave_empleado, correo, privilegio from usuario WHERE clave_empleado = '$usuario' and passw = '$password'";
        echo $sql;
        $rs = $this->consulta_sql2($sql);
        if($rs){
                 $rows = $rs->GetArray();
        return $rows;
        }
        return $rs;
  
    }

}
?>
