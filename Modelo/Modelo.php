<?php

error_reporting(E_ALL ^ E_DEPRECATED);

class Modelo extends Conexion {

    public $db;

    function Modelo() {
        parent::Conexion();
    }

    public function consulta_sql($sql) {
        $rs = $this->db->Execute($sql);
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }

    public function consulta_sql2($sql) {
        $rs = $this->db->Execute($sql);
        
        return $rs;
    }

    public function get_error($result, $tipo_error) {
        if ($result === false) {
            die('Redireccionar a la pagina de error ' . $tipo_error);
            return false;
        } else {
            return true;
        }
    }

    public function inserta($tabla, $rs) {
        $sql_insert = $this->db->GetInsertSQL($tabla, $rs);
        return $this->get_error($this->db->Execute($sql_insert), 'Error en Modelo.inserta');
    }

}

//$obj = new Modelo();
//$datos = $obj->consulta_sql("select * from empleado");
//echo '<pre>';
//print_r($datos);
//echo '</pre>';
?>

