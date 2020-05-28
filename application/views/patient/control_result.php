<div class="card">
    <div class="card-header">
        <h5 class="text-primary">Detail Kontrol Tanggal
            <?php $date = new DateTime($result['date_added']); echo $date->format('d F Y');  ?> |
            <?= $result['service_name'] ?></h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <h6 class="text-info"><b> Data Periksa</b></h6>
                <hr>
                <div class="row">
                    <div class="col-sm-4" align="center">
                        <?php if($result['profile_image'] == ''){ ?>
                        <img src="https://forwardsummit.ca/wp-content/uploads/elementor/thumbs/avatar-default-o2sx2m3qu406gxmnsclfw8fqumxzdk420s5ugc3q8w.png"
                            alt="" width="100%">
                        <?php } else{ ?>
                        <img src="<?= base_url('assets/image/profile/'.$result['profile_image']) ?>" alt="" width="80%">
                        <?php }  ?>

                    </div>
                    <div class="col-sm-8 text-dark">
                        <br>

                        <b> Nama</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;: <?= $result['name'] ?>
                        <br>
                        <br>
                        <b> No. Rekam Medis</b> &emsp; : <?= $result['patient_id'] ?>
                        <br>
                        <br>
                        <b>Tanggal Lahir</b> &emsp;&emsp;&emsp;: <?= $result['birthday'] ?>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-6">

                        Tekanan Darah &emsp;&emsp; : <?= $result['sistol'] ?> / <?= $result['diastol'] ?>
                        <br>
                        <br>
                        Laju Pernafasan &emsp;&nbsp;&nbsp; : <?= $result['rr'] ?> x / Menit
                        <br>
                        <br>
                        Tinggi Badan &emsp;&emsp;&nbsp;&nbsp;&nbsp; : <?= $result['height'] ?> Cm
                    </div>
                    <div class="col-sm-6">

                        Suhu &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp; : <?= $result['temp'] ?> &#8451;
                        <br>
                        <br>
                        Denyut Nadi &emsp;&emsp;&emsp; : <?= $result['hr'] ?> x / Menit
                        <br>
                        <br>
                        Berat Badan &emsp; &emsp; &nbsp;&nbsp; : <?= $result['weight'] ?> Kg
                    </div>
                </div>
                <br>
                <b> Keluhan :</b>
                <p><?= $result['feel_description'] ?> </p>
                <br>
                <h6><b> Data Lampiran</b></h6>
                <table class="table">
                    <?php if($result['laboratory']){ ?>
                    <tr>
                        <th width=20%> Laborat : </th>
                        <td>
                            <a style="cursor:zoom-in" data-toggle="modal" data-target="#labResult">
                                <img src="<?= base_url('attachment/'.$result['laboratory']) ?> " class="img-fluid"
                                    alt="Hasil Laborat" width="100%">
                            </a>
                        </td>
                    </tr>
                    <?php }  if( $result['schedule'] != '' && $result['schedule'] != $result['laboratory'] ){ ?>
                    <tr>
                        <th>Arsiran :</th>
                        <td> <img src="<?= base_url('attachment/'.$result['schedule']) ?> " class="img-fluid"
                                alt="Arsiran" width="100%"></td>
                        <?php } if($result['protocol'] != '' && $result['protocol'] != $result['laboratory']){ ?>
                    </tr>
                    <tr>
                        <th>Protokol : </th>
                        <td><img src="<?= base_url('attachment/'.$result['protocol']) ?> " class="img-fluid"
                                alt="Protokol" width="100%"></td>
                    </tr>
                    <?php } if($result['other']){ ?>
                    <tr>
                        <th> Hasil Lainnya : </th>
                        <td><img src="<?= base_url('attachment/'.$result['other']) ?> " class="img-fluid"
                                alt=" Hasil Lainnya " width="100%"></td>
                    </tr>
                    <?php } ?>
                </table>

            </div>
            <div class="col-sm-6">
                <h6 class="text-info mb-3"><b> Hasil Kontrol</b></h6>
            
                <?php if($result['ns_education'] == '') { ?>
                <h3 align="center"> Hasil kontrol belum tersedia, silahkan menunggu antrian periksa.</h3>
                <?php } else{ ?>
                <div class="table-responsive">
                    <table class="table ">
                        <?php if($result['advice'] == 1 ) { ?>
                        <tr>
                            <td width="40%"><b><i class="fa fa-calendar-plus" aria-hidden="true"></i> Tanggal Masuk
                                    Rumah Sakit </b> </td>
                            <td>:
                                <?php $date = new DateTime($result['hospitalization_date']); echo $date->format('d/m/Y') ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%"><b><i class="far fa-calendar-check"></i> Tanggal Kemotherapi </b></td>
                            <td>: <?php $date = new DateTime($result['chemo_date']); echo $date->format('d/m/Y') ?>
                            </td>
                        </tr>
                        <tr>
                            <td width="40%"><b><i class="far fa-hospital"></i> Ruang Rawat  </b></td>
                            <td>:  <?= $result['ward'] ?>
                            </td>
                        </tr>
                        <?php }else if($result['advice'] == 2) { ?>
                        <tr>
                            <td width="40%"><b><i class="fa fa-calendar-plus" aria-hidden="true"></i> Tanggal Masuk
                                    Rumah Sakit </b> </td>
                            <td>:
                                <?php $date = new DateTime($result['hospitalization_date']); echo $date->format('d/m/Y') ?>
                            </td>
                        </tr>
                        <?php }else if($result['advice'] == 3 || $result['advice'] == 5 ) { ?>
                        <tr>
                            <td width="40%"><b><i class="fa fa-calendar-plus" aria-hidden="true"></i> Tanggal Kontrol
                                    Ulang </b> </td>
                            <td>:
                                <?php $date = new DateTime($result['hospitalization_date']); echo $date->format('d/m/Y') ?>
                            </td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td><b> <i class="far fa-comment-dots" aria-hidden="true"></i> Saran / Edukasi Dokter </b>
                            </td>
                            <td>: <?= $result['dr_education'] ?> </td>
                        </tr>
                        <tr>
                            <td><b><i class="far fa-comment" aria-hidden="true"></i> Edukasi Perawat </b></td>
                            <td>: <?= $result['ns_education'] ?> </td>
                        </tr>
                    </table>
                </div>
                <?php } ?>
                <hr>
            </div>
        </div>
    </div>
</div>