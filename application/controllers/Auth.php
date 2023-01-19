<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    // =======
    function __construct(){
        parent::__construct();
        $this->load->model('M_auth');
        $this->load->model('M_jadwal');
        $this->load->model('M_siswa');
        $this->load->model('M_Jadwal');
        $this->load->model('M_nilai');
        
    }
    // =====


    public function index(){
        // $data['jadwal'] = $this->M_jadwal->tampil_jadwal();
        //     $this->load->view('dashboardAdmin', $data);
        // $this->load->view('login');
        redirect('Auth/login'); 
    }

    public function dashboard_murid(){
        $data['mengajar'] = $this->M_jadwal->tampil_jadwal();
        $this->load->view('dashboardMurid', $data);
    }

    public function dashboard_admin(){
        $data['mengajar'] = $this->M_jadwal->tampil_jadwal();
        $this->load->view('dashboardAdmin', $data);
    }

    public function dashboard_guru(){
        $data['nilai'] = $this->M_nilai->nilai_tampil();
        $this->load->view('dashboardGuru', $data);
    }

    public function login(){
        $this->load->view('login');
    }

    public function logout(){
        redirect('Auth/login'); 
    
    }

    public function jadwal_admin(){
        $data['mengajar'] = $this->M_jadwal->tampil_jadwal();
        $this->load->view('jadwal_admin', $data);
    }

    public function jadwal_siswa(){
        $data['mengajar'] = $this->M_jadwal->tampil_jadwal();
        $this->load->view('jadwal_siswa', $data);
    }
    public function jadwal_guru(){
        $data['mengajar'] = $this->M_jadwal->tampil_jadwal();
        $this->load->view('jadwal_guru', $data);
    }

    public function tambah_jadwal_admin(){
        $this->load->view('tambah_jadwal_admin');
        // redirect('Auth/dashboardAdmin');
    }

    public function tambah_jadwal_guru(){
        $this->load->view('tambah_jadwal_guru');
        // redirect('Auth/dashboardGuru');
    }

    // ==================== jadwal diatas

    public function tambah_nilai_admin(){
        $this->load->view('tambah_nilai_admin');
    }
    public function tambah_nilai_guru(){
        $this->load->view('tambah_nilai_guru');
    }

    public function nilai_guru(){
        $data['nilai'] = $this->M_nilai->nilai_tampil(); 
        $this->load->view('nilai_guru',$data);
    }

    public function nilai(){

        $data['nilai'] = $this->M_nilai->nilai_tampil(); 
        $this->load->view('nilai_Siswa',$data);
        // redirect('Auth/nilai_Siswa'); 
    }

    public function nilai_admin(){

        $data['nilai'] = $this->M_nilai->nilai_tampil(); 
        $this->load->view('nilai_admin',$data);
        // redirect('Auth/nilai_Siswa'); 
    }

    public function tambah_nilai_aksi(){
        $kode = $this->input->post('kode_raport');
        $id_mengajar = $this->input->post('id_mengajar');
        $keterampilan = $this->input->post('keterampilan');
        $tugas = $this->input->post('tugas');
        $ulangan = $this->input->post('ulangan_harian');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');

        $data = array(
            'kode_raport' => $kode,
            'id_mengajar' => $id_mengajar,
            'keterampilan' => $keterampilan,
            'tugas' => $tugas,
            'ulangan_harian' => $ulangan,
            'uts' => $uts,
            'uas' => $uas
        );
      
        $this->M_nilai->input_nilai($data,'nilai');
        redirect('Auth/nilai_guru');
    }

    public function tambah_nilai_aksi_admin(){
        $kode = $this->input->post('kode_raport');
        $id_mengajar = $this->input->post('id_mengajar');
        $keterampilan = $this->input->post('keterampilan');
        $tugas = $this->input->post('tugas');
        $ulangan = $this->input->post('ulangan_harian');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');

        $data = array(
            'kode_raport' => $kode,
            'id_mengajar' => $id_mengajar,
            'keterampilan' => $keterampilan,
            'tugas' => $tugas,
            'ulangan_harian' => $ulangan,
            'uts' => $uts,
            'uas' => $uas
        );
      
        $this->M_nilai->input_nilai($data,'nilai');
        redirect('Auth/nilai_admin');
    }

    public function hapus_nilai($id_mengajar){
        echo '<script>alert("Apakah Anda Yakin Ingin Menghapus?")</script>';
        $this->M_nilai->hapus_nilai($id_mengajar);
        redirect('Auth/nilai_guru'); 
    }

    public function hapus_nilai_admin($id_mengajar){
        echo '<script>alert("Apakah Anda Yakin Ingin Menghapus?")</script>';
        $this->M_nilai->hapus_nilai($id_mengajar);
        redirect('Auth/nilai_admin'); 
    }

    public function edit_nilai($id_mengajar){
        $where = array('id_mengajar' => $id_mengajar);
        $data['nilai'] = $this->M_nilai->edit_nilai($where,'nilai')->result();
        $this->load->view('edit_nilai_guru', $data);
        
    }
    public function edit_nilai_admin($id_mengajar){
        $where = array('id_mengajar' => $id_mengajar);
        $data['nilai'] = $this->M_nilai->edit_nilai($where,'nilai')->result();
        $this->load->view('edit_nilai', $data);
        
    }

    function edit_nilai_aksi(){
        $kode = $this->input->post('kode_raport');
        $id_mengajar = $this->input->post('id_mengajar');
        $keterampilan = $this->input->post('keterampilan');
        $tugas = $this->input->post('tugas');
        $ulangan = $this->input->post('ulangan_harian');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');

        $data = array(
            'kode_raport' => $kode,
            'id_mengajar' => $id_mengajar,
            'keterampilan' => $keterampilan,
            'tugas' => $tugas,
            'ulangan_harian' => $ulangan,
            'uts' => $uts,
            'uas' => $uas
        );

        $where = array(
            'kode_raport' => $kode
        );

        $this->M_nilai->update_nilai($where,$data,'nilai');
        redirect('Auth/nilai_guru'); 
    }
    
    function edit_nilai_aksi_admin(){
        $kode = $this->input->post('kode_raport');
        $id_mengajar = $this->input->post('id_mengajar');
        $keterampilan = $this->input->post('keterampilan');
        $tugas = $this->input->post('tugas');
        $ulangan = $this->input->post('ulangan_harian');
        $uts = $this->input->post('uts');
        $uas = $this->input->post('uas');

        $data = array(
            'kode_raport' => $kode,
            'id_mengajar' => $id_mengajar,
            'keterampilan' => $keterampilan,
            'tugas' => $tugas,
            'ulangan_harian' => $ulangan,
            'uts' => $uts,
            'uas' => $uas
        );

        $where = array(
            'kode_raport' => $kode
        );

        $this->M_nilai->update_nilai($where,$data,'nilai');
        redirect('Auth/nilai_admin'); 
    }

    // ============ nilai diatas

    public function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
       // $level = $this->input->post('level');

        $cek = $this->M_auth->cek_admin($username, $password, $level)->num_rows();
        if ($cek > 0){
            $data_session = array(
                'nama' => $username,
                'password' => $password,
                'level' => $level,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);
            
            if ($this->session->userdata('level') == 'admin')
            {
                $data['mengajar'] = $this->M_jadwal->tampil_jadwal();
                $this->load->view('dashboardAdmin', $data);
            }
            elseif ($this->session->userdata('level') == 'guru')
            {
                $data['nilai'] = $this->M_nilai->nilai_tampil(); 
                $this->load->view('dashboardGuru', $data);
            }
            elseif ($this->session->userdata('level') == 'murid')
            {
                $data['mengajar'] = $this->M_jadwal->tampil_jadwal();
                $this->load->view('dashboardMurid', $data);
            }
            else
            {
                echo "Maaf Data Yang Anda Masukkan Tidak Terdaftar..";
            }
            
    
        } else {
            echo "Username dan password salah !";
        }
    }

    public function tambah_jadwal_aksi(){
        $id = $this->input->post('id');
        $hari = $this->input->post('hari');
        $jamstart = $this->input->post('jam_start');
        $jamend = $this->input->post('jam_end');
        $mapel = $this->input->post('kode_mapel');
        $guru = $this->input->post('guru_pengampu');
        $kelas = $this->input->post('kode_kelas');

        $data = array(
            'id_mengajar' => $id,
            'hari' => $hari,
            'jam_start' => $jamstart,
            'jam_end' => $jamend,
            'nip' => $guru,
            'kode_mapel' => $mapel,
            'kode_kelas' => $kelas
        );

        if($id == ""){
            echo 'ID_Mengajar tidak boleh kosong';
        } else{

            $this->M_jadwal->input_jadwal($data);
            redirect('Auth/dashboard_admin');
        }

    }

    public function hapus_jadwal($id_mengajar){
        echo '<script>alert("Apakah Anda Yakin Ingin Menghapus?")</script>';
        $this->M_jadwal->hapus_jadwal($id_mengajar);
        redirect('Auth/dashboard_admin');
    }
    
    public function edit_jadwal($id){
        $where = array('id_mengajar' => $id);
        $data['mengajar'] = $this->M_jadwal->edit_jadwal($where,'mengajar')->result();
        $this->load->view('edit_jadwal', $data);
        
    }

    function edit_jadwal_aksi(){
        $id = $this->input->post('id_mengajar');
        $hari = $this->input->post('hari');
        $jamstart = $this->input->post('jam_start');
        $jamend = $this->input->post('jam_end');
        $mapel = $this->input->post('kode_mapel');
        $guru = $this->input->post('nip');
        $kelas = $this->input->post('kode_kelas');

        $data = array(
            'id_mengajar' => $id,
            'hari' => $hari,
            'jam_start' => $jamstart,
            'jam_end' => $jamend,
            'nip' => $guru,
            'kode_mapel' => $mapel,
            'kode_kelas' => $kelas
        );

        $where = array(
            'id_mengajar' => $id
        );

        $this->M_jadwal->update_jadwal($where,$data,'mengajar');
        redirect('Auth/dashboard_admin'); 
    }
}


?>