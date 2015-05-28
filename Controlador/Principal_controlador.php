<?php
class principal_controlador extends Modelo {
    public function regresa_vacantes() {
        parent::Modelo();
        $sql = "SELECT * FROM vacante";
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }
     public function regresa_total_vacantes() {
        parent::Modelo();
        $sql = "SELECT count(*) FROM vacante";
        $rs = $this->consulta_sql($sql);
        $rows = $rs->GetArray();
        return $rows;
    }
}
?>
