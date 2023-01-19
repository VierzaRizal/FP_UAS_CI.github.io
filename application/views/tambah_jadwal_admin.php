<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@700,500,300,400&display=swap" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>/css/style_jadwal_tambah.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <!-- Leftwrap === -->
        <div class="left_wrapper">
            <!-- topleft -->
            <div class="top_left">
                <ul>
                    <li>
                        <a href="dashboard_admin"><img
                                src="<?php echo base_url('assets/'); ?>/images/mahasiswa/dashboard.svg" alt="dash" />
                            <p>Dashboard</p>
                        </a>
                        <a href="jadwal_admin"><img src="<?php echo base_url('assets/'); ?>/images/mahasiswa/jadwal.svg"
                                alt="dash" />
                            <p>Jadwal</p>
                        </a>
                        <a href="nilai_admin"><img src="<?php echo base_url('assets/'); ?>/images/mahasiswa/nilai.svg"
                                alt="dash" />
                            <p>Nilai</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- bottomleft -->
            <div class="bottom_left">
                <div class="black_wrapper">
                    <p>Apakah Anda Ingin Logout?</p>
                    <a href="logout"><button>Logout</button></a>
                </div>
            </div>
        </div>
        <!-- middlewrap -->
        <div class="middle_wrapper">
            <div class="dashboard_title">
                <p class="title">Tambah Jadwal</p>
            </div>
            <div class="table_wrapper">
                <form action="tambah_jadwal_aksi" method="POST">
                    <table>
                        <tr>
                            <td>ID_Jadwal</td>
                            <td><input placeholder="Contoh : M0001" type="text" name="id"></td>
                        </tr>
                        <tr>
                            <td>Hari</td>
                            <td>
                                <!-- <input type="text" name="hari"> -->
                                <select name="hari">
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jam Start</td>
                            <td>
                                <!--<input type="text" name="jam"> -->
                                <select name="jam_start">
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:30">11:30</option>
                                    <option value="13:00">13:00</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jam Selesai</td>
                            <td>
                                <!--<input type="text" name="jam"> -->
                                <select name="jam_end">
                                    <option value="07:59">07:59</option>
                                    <option value="08:59">08:59</option>
                                    <option value="09:59">09:59</option>
                                    <option value="11:29">11:29</option>
                                    <option value="12:29">12:29</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>
                                <!-- <input type="text" name="mapel"> -->
                                <select name="kode_mapel">
                                    <option value="220306">Bahasa Indonesia</option>
                                    <option value="220301">Al-Quran Hadist</option>
                                    <option value="220307">Matematika</option>
                                    <option value="220314">Antropologi</option>
                                    <option value="220315">Sosiologi</option>
                                    <option value="220322">Kimia</option>
                                    <option value="220316">Ekonomi</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Guru Pengampu</td>
                            <td>
                                <!-- <input type="text" name="mapel"> -->
                                <select name="guru_pengampu">
                                    <option value="1100010119000110006">Koro Sensei</option>
                                    <option value="1940022819940210012">Gran Torino</option>
                                    <option value="1945081720080510003">Minato Namikaze</option>
                                    <option value="1980062020031110010">Ittetsu Takeda</option>
                                    <option value="1980101619960510031">Julius Novachrono</option>
                                    <option value="1993091020090610004">Saitama</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Kode Kelas</td>
                            <td>
                                <!-- <input type="text" name="mapel"> -->
                                <select name="kode_kelas">
                                    <option value="K0001">K0001</option>
                                    <option value="K0002">K0002</option>
                                    <option value="K0003">K0003</option>
                                    <option value="K0004">K0004</option>
                                    <option value="K0005">K0005</option>
                                    <option value="K0006">K0006</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="ubah" value="Tambah"></td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>
        <div class="right_wrapper">
            <!-- topright -->
            <div class="top_right">
                <div class="black_wrapper">
                    <p class="selamat">Selamat Datang</p>
                    <p class="sub-sub">Nama Siswa</p>
                    <div class="name_pfp">
                        <p><?php echo $this->session->userdata('nama'); ?></p>
                    </div>
                    <p class="sub-sub">Nisn</p>
                    <div class="name_pass">
                        <p><?php echo $this->session->userdata('password'); ?></p>
                    </div>
                </div>

            </div>
            <!-- bottomright -->

        </div>
    </div>
</body>

</html>