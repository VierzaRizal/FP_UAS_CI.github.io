<?php

class M_siswa extends CI_Model{
    function tampil_data(){
        return $this->db->get('siswa')->result_array();

        // $this->db->select('*');
        // $this->db->from('mengajar');
        // $this->db->join('mapel', 'mapel.kode_mapel = mengajar.kode_mapel');
        // $this->db->join('kelas', 'kelas.kode_kelas = mengajar.kode_kelas');
        // return $query = $this->db->get();
    } 
}