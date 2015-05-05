

<?php

class Conexion {

    function Conexion() {
        $this->db = NewADOConnection('mysql');
        $this->db->Connect("localhost", "root", "", "tenneco");
        $this->db->debug = false;
    }

} 