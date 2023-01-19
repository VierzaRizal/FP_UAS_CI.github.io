<?php

class M_jadwal extends CI_Model{
    function tampil_jadwal(){
        $this->db->select('*');
        $this->db->from('mengajar');
       // $this->db->join('mengajar','mengajar.nip=tabel_jadwal.guru_pengampu');
        $this->db->join('mapel','mapel.kode_mapel=mengajar.kode_mapel');
        $this->db->join('guru','guru.nip=mengajar.nip');
        $this->db->order_by("hari", "desc");
        $query = $this->db->get();
        return $query->result_array();
       // return $this->db->get('jadwal')->result_array();
    } 

    function input_jadwal($data){
        $this->db->insert('mengajar', $data);
       // $this->db->insert('mengajar', $mengajar);
        //$this->db->insert('guru', $gurunip);
        
        // $this->db->insert($table,$data);
    }

    function hapus_jadwal($id_mengajar){
        $this->db->where('id_mengajar', $id_mengajar);
        $this->db->delete('mengajar');
    }
    
    function edit_jadwal($where,$table){
        return $this->db->get_where($table,$where);
    }

    function update_jadwal($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);

    }

}

?>