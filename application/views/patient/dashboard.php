<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body py-5">
                <h5>
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $jam = date("H:i:s");
                    ?>

                    <?php $a = date("H");
                    if (($a >= 6) && ($a <= 11)) { ?>
                        Selamat Pagi,
                    <?php } else if (($a > 11) && ($a <= 15)) { ?>
                        Selamat Siang,
                    <?php } else if (($a > 15) && ($a <= 18)) { ?>
                        Selamat Sore,
                    <?php } else { ?>
                        Selamat Malam,
                    <?php } ?>
                    <?= $this->session->userdata('username') ?> <i class="far fa-smile text-primary"></i> </h5>
                <hr>
                <p class="text-dark"> Anda telah terjadwal kontrol online pada tanggal
                    <b><?php $date = new DateTime($reservation['reservation_date']);
                        echo $date->format('d F Y');  ?></b>
                </p>
                <div align="center" class="text-dark">
                    <p>Kode Checkin</p>
                    <h3><b class="text-primary"><?= $reservation['checkin_code'] ?></b></h3>
                    <br>
                    <h6><?= $reservation['doctor'] ?></h6>
                    <h6><?= $reservation['polyclinic'] ?></h6>
                    <hr>
                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <ul class="list-group">
            <li class="list-group-item active"><b><i class="fas fa-fw fa-comments"></i> Layanan Telemedicine</b></li>
            <li class="list-group-item">Penjadwalan Kemo
                <a href="<?= base_url('chemo_scedule') ?>"><span class="badge badge-pill badge-primary float-right py-2 px-3">Pilih Layanan</span></a>
            </li>
            <li class="list-group-item">Konsultasi
                <!-- <a href="<?= base_url('consult') ?>"><span class="badge badge-pill badge-primary float-right py-1"> Belum Tersedia</span></a> -->
                <a href="#"><span class="badge badge-pill badge-secondary float-right py-2 px-3"> Belum Tersedia</span></a>
            </li>
            <li class="list-group-item">Pengambilan Obat
                <!-- <a href="<?= base_url('take_medicine') ?>"><span class="badge badge-pill badge-primary float-right py-1">Pilih</span></a> -->
                <a href="#"><span class="badge badge-pill badge-secondary float-right py-2 px-3"> Belum Tersedia</span></a>
            </li>
        </ul>
        <div class="card mt-3 ">
            <div class="card-body py-3">
                <p align="justify" class="text-dark"> <b class="text-info"> <i class="fas fa-fw fa-info"></i> Petunjuk !</b>
                    <br>
                    Silahkan memilih salah satu layanan telemedicine untuk memulai pelayanan kontrol jarak jauh.
                </p>
                <div align="center">
                    <a href="" class="btn btn btn-outline-info"> Panduan Selengkapnya </a>
                </div>
            </div>
        </div>
    </div>
</div>