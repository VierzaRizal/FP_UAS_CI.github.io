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
                <p class="title">Edit / Update Nilai</p>
            </div>
            <div class="table_wrapper">
                <?php foreach($nilai as $u){ ?>
                <form action="<?php echo base_url(). 'Auth/edit_nilai_aksi_admin';?>" method="POST">
                    <table>
                        <tr>
                            <td>Kode Raport</td>
                            <td><input name="kode_raport" value="<?php echo $u->kode_raport ?>"></td>
                        </tr>
                        <tr>
                            <td>Id Mapel Lama</td>
                            <td><input disabled name="id_mengajar" value="<?php echo $u->id_mengajar ?>"></td>
                        </tr>
                        <tr>
                            <td>Mapel Baru</td>
                            <td><select name="id_mengajar" id="id_mengajar">
                                    <option value="M0025">M0025 | Seni Budaya</option>
                                    <option value="M0008">M0008 | Sejarah Kebudayaan Islam</option>
                                    <option value="M0007">M0007 | Sejarah</option>
                                    <option value="M0004">M0004 | Fiqih</option>
                                    <option value="M0005">M0005 | Bahasa Arab</option>
                                    <option value="M0006">M0006 | Bahasa Indonesia</option>
                                    <option value="M00049">M00049 | Kimia</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>Keterampilan</td>
                            <td><input type="number" name="keterampilan" value="<?php echo $u->keterampilan ?>"></td>
                        </tr>
                        <tr>
                            <td>Tugas</td>
                            <td><input type="number" name="tugas" value="<?php echo $u->tugas ?>"></td>
                        </tr>
                        <tr>
                            <td>UTS</td>
                            <td><input type="number" name="uts" value="<?php echo $u->uts ?>"></td>
                        </tr>
                        <tr>
                            <td>Ulangan Harian</td>
                            <td><input type="number" name="ulangan_harian" value="<?php echo $u->ulangan_harian ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>UAS</td>
                            <td><input type="number" name="uas" value="<?php echo $u->uas ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="ubah" value="Tambah"></td>
                        </tr>
                    </table>
                </form>

                <?php } ?>

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