<?php

class M_nilai extends CI_Model{

    // function tampil_nilai(){
    //     $this->db->select('*');
    //     $this->db->from('nilai');
    //     $this->db->join('raport','raport.kode_raport = nilai.kode_raport');
    //     $this->db->join('siswa','siswa.nisn=raport.nisn');
    //     return $query = $this->db->get()->result_array();
    // } 

    function nilai_tampil(){
        $this->db->select('*');
        $this->db->from('nilai');
        $this->db->join('raport','raport.kode_raport=nilai.kode_raport');
        $this->db->join('siswa','siswa.nisn=raport.nisn');
        $this->db->join('mengajar','mengajar.id_mengajar=nilai.id_mengajar');
        $this->db->join('mapel','mapel.kode_mapel = mengajar.kode_mapel');
        $query = $this->db->get();
        return $query->result_array();
    }

    function input_nilai($data,$table){
        // $nisn = $this->input->post('nisn');
        // $raport = array(
        //     'nisn' => $nisn
        // );

        // $this->db->insert('raport', $raport);
        $this->db->insert($table,$data);
    }

    function hapus_nilai($id_mengajar){
        $this->db->where('id_mengajar', $id_mengajar);
        $this->db->delete('nilai');
    }
    function edit_nilai($where,$table){
        return $this->db->get_where($table,$where);
    }

    function update_nilai($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);

    }



}

?>