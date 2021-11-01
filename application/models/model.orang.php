<?php

class Model_orang extends CI_Model {

    public function ambilDataOrang() {
        $this->load->databases();

        $hasil = $this->db->query("SELECT * FROM orang*");
        
        return $hasil->result();--------
    }

    public function prosesTambahOrang($nama, $alamat) {
        $this->load->databases();

        $this->db->query("INSERT INTO orang(nama, alamat" Values($nama','$alamat')");

    }


?>