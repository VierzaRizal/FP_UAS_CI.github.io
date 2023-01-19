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
                        <a href="dashboard_guru"><img
                                src="<?php echo base_url('assets/'); ?>/images/mahasiswa/dashboard.svg" alt="dash" />
                            <p>Dashboard</p>
                        </a>
                        <a href="jadwal_guru"><img src="<?php echo base_url('assets/'); ?>/images/mahasiswa/jadwal.svg"
                                alt="dash" />
                            <p>Jadwal</p>
                        </a>
                        <a href="nilai_guru"><img src="<?php echo base_url('assets/'); ?>/images/mahasiswa/nilai.svg"
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
                            <td><input type="number" name="id_jadwal"></td>
                        </tr>
                        <tr>
                            <td>Hari</td>
                            <td><input type="text" name="hari"></td>
                        </tr>
                        <tr>
                            <td>Jam</td>
                            <td><input type="text" name="jam"></td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td><input type="text" name="mapel"></td>
                        </tr>
                        <tr>
                            <td>Guru Pengampu</td>
                            <td><input type="text" name="guru"></td>
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