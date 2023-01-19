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
                <p class="title">Dashboard Admin</p>
            </div>
            <div class="card_wrapper">
                <a class="card" href="nilai_admin">
                    <div>
                        <p class="card_title">Nilai</p>
                        <p class="sub_title">Lihat Keseluruhan Nilai Siswa</p>
                    </div>
                </a>
                <a class="card" href="jadwal_admin">
                    <div>
                        <p class="card_title">Jadwal</p>
                        <p class="sub_title">Lihat Jadwal Kelas Sekolah</p>
                    </div>
                </a>

            </div>
            <div class="dashboard_title">
                <p class="title">Jadwal Mata Pelajaran</p>
                <a href="tambah_jadwal_admin"><Button class="tambah_btn">Tambah Jadwal</Button></a>
            </div>
            <div class="table_wrapper">
                <table>
                    <tr>
                        <th align="left">Hari</th>
                        <th align="left">Jam</th>
                        <th align="left">Mata Pelajaran</th>
                        <th align="left">Guru Pengampu</th>
                        <th align="left">CRUD</th>
                    </tr>
                    <?php
                foreach ($mengajar as $u) :
                    ?>
                    <tr>
                        <td align="left">
                            <p><?= $u['hari'] ?></p>
                        </td>
                        <td align="left" class="jam">
                            <p><?= $u['jam_start'] ?> - <?= $u['jam_end'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['mapel'] ?></p>
                        </td>
                        <td align="left">
                            <p><?= $u['nama_guru'] ?></p>
                        </td>
                        <td><a href="<?php echo site_url('Auth/hapus_jadwal/'.$u['id_mengajar']); ?>"
                                class="btn_danger remove">Hapus</a> |
                            <a href="<?php echo site_url('Auth/edit_jadwal/'.$u['id_mengajar']); ?>"
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
                    <p class="sub-sub">Nama Admin</p>
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