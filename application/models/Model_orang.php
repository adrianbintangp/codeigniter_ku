<?php

class Model_Orang extends CI_Model {
    public function AmbilDataOrang() {
        $this->load->database();

       $hasil = $this->db->query("SELECT * FROM orang");

       return $hasil->result();
    }

    public function ProsesTambahOrang($nama, $alamat) {
        $this->load->database();

        $this->db->query("INSERT INTO orang(nama, alamat) VALUES('$nama', '$alamat')");
    }

    
    public function proseshapusorang($id) {
        $this->load->database();
        $this->db->query("DELETE FROM orang WHERE id =$id ");
    }
    public function prosesubahorang($id,$nama,$alamat){
        $this->load->database();
        $this->db->query("UPDATE orang SET nama = '$nama',alamat = '$alamat'WHERE id = $id");
    }
}

?>