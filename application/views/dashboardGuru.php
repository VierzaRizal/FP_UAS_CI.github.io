<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@700,500,300,400&display=swap" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>/css/style_dashboard.css" />
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
                <p class="title">Dashboard Guru</p>
            </div>
            <div class="card_wrapper">
                <a class="card" href="nilai_guru">
                    <div>
                        <p class="card_title">Nilai</p>
                        <p class="sub_title">Lihat Keseluruhan Nilai Siswa</p>
                    </div>
                </a>
                <a class="card" href="jadwal_guru">
                    <div>
                        <p class="card_title">Siswa</p>
                        <p class="sub_title">Lihat Informasi Siswa</p>
                    </div>
                </a>
            </div>
            <div class="dashboard_title">
                <p class="title">Nilai Siswa</p>
                <a href="tambah_nilai_guru"><Button class="tambah_btn">Tambah Nilai</Button></a>
            </div>
            <div class="table_wrapper">
                <table>
                    <tr>
                        <th align="left">Nama Siswa</th>
                        <th align="left">Mata Pelajaran</th>
                        <th align="left">Keterampilan</th>
                        <th align="left">Tugas</th>
                        <th align="left">Ulangan Harian</th>
                        <th align="left">UTS</th>
                        <th align="left">UAS</th>
                        <th align="left">CRUD</th>
                    </tr>
                    <?php
                foreach ($nilai as $u) :
                    ?>
                    <tr>
                        <td align="left">
                            <p><?= $u['nama_siswa'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['mapel'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['keterampilan'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['tugas'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['ulangan_harian'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['uts'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['uas'] ?></p>
                        </td>
                        <td class="ubah_wrapper">
                            <a href="<?php echo site_url('Auth/hapus_nilai/'.$u['id_mengajar']); ?>"
                                class="btn_danger">Hapus</a> |
                            <a href="<?php echo site_url('Auth/edit_nilai/'.$u['id_mengajar']); ?>"
                                class="btn_danger">Ubah</a>
                        </td>


                    </tr>

                    <?php
                endforeach;
                ?>
                </table>
            </div>
        </div>
        <div class="right_wrapper">
            <!-- topright -->
            <div class="top_right">
                <div class="black_wrapper">
                    <p class="selamat">Selamat Datang</p>
                    <p class="sub-sub">Nama Guru</p>
                    <div class="name_pfp">
                        <p><?php echo $this->session->userdata('nama'); ?></p>
                    </div>
                    <p class="sub-sub">Password</p>
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