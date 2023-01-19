<?php
class M_auth extends CI_Model{

    public function cek_admin($u, $p, $l){
        if($l == "guru"){
            return $this->db->get_where('guru', array('nama_guru'=>$u, 'passwd'=>$p));
        }
        elseif($l == "admin"){
            return $this->db->get_where('admin', array('nama_admin'=>$u, 'passwd'=>$p));
        }
        elseif($l == "murid"){
            return $this->db->get_where('siswa', array('nama_siswa'=>$u, 'passwd'=>$p));
        }
           
    }
}