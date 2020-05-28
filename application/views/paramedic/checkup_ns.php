<div class="card">
    <div class="card-header bg-gradient-primary">
        <h5 class=" text-white">Detail Kontrol Tanggal
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
                            <a style="cursor:zoom-in" data-toggle="modal" data-target="#staticBackdrop">
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
                <h6 class="text-info"><b> Buat Rencana Tindak Lanjut</b></h6>
                <hr>
                <?php if($result['advice'] == '') { ?>
                <h3 align="center" class="text-danger"><b> Pasien Belum Diperiksa !</b></h3>
                <?php } else{ ?>
                <h2 align="center" class="mt-5">
                    <?php if($result['advice'] == 1 || $result['advice'] == 2) { ?>
                    <b class="text-success "><?= $result['description'] ?></b>
                    <?php }else if($result['advice'] == 3) { ?>
                    <b class="text-danger "><?= $result['description'] ?></b>
                    <?php }else{ ?>
                    <b class="text-warning "><?= $result['description'] ?></b>
                    <?php } ?>
                </h2>
                <br>

                <?php } ?>
                <?php if($result['ns_education'] == '') { ?>
                <h6 class="text-dark"><b> Saran / Edukasi Dokter :</b></h6>
                <p><?= $result['dr_education'] ?></p>
                <hr>
                <form action="<?= base_url('followup') ?>" method="POST">
                    <input type="hidden" name="assesment_id" id="assesment_id" value="<?= $result['assesment_id'] ?>">
                    <input type="hidden" name="cm" value="<?= $cm ?>">
                    <input type="hidden" name="checkin_code" value="<?= $checkin_code ?>">
                    <?php if($result['advice'] == 1 ) { ?>
                    <div class="form-group">
                        <label for="hospitalization_date">Tanggal Masuk Rumah Sakit</label>
                        <input type="date" class="form-control" id="hospitalization_date" name="hospitalization_date"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="chemo_date">Tanggal Tindakan Kemotherapi</label>
                        <input type="date" class="form-control" id="chemo_date" name="chemo_date" required>
                    </div>
                    <div class="form-group">
                        <label for="ward">Ruang Rawat</label>
                        <select name="ward" id="ward" class="form-control">
                            <option value="">-- Pilih Ruang Rawat --</option>
                            <option value="Kasuari_3">Kasuari Lantai 3</option>
                            <option value="Kasuari_4">Kasuari Lantai 4</option>
                            <option value="Kasuari_5">Kasuari Lantai 5</option>
                        </select>
                    </div>
                    <?php }else if($result['advice'] == 2) { ?>
                    <div class="form-group">
                        <label for="hospitalization_date">Tanggal Masuk Rumah Sakit</label>
                        <input type="date" class="form-control" id="hospitalization_date" name="hospitalization_date"
                            required>
                    </div>
                    <?php }else if($result['advice'] == 3 || $result['advice'] == 5 ) { ?>
                    <div class="form-group">
                        <label for="hospitalization_date">Tanggal Kontrol Ulang</label>
                        <input type="date" class="form-control" id="hospitalization_date" name="hospitalization_date"
                            required>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="ns_education">Saran / Edukasi Perawat</label>
                        <textarea name="ns_education" id="ns_education" class="form-control" cols="30" rows="3"
                            required></textarea>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary float-right"><i class="far fa-paper-plane"></i> Kirim
                        Data</button>
                </form>
                <?php }else{ ?>

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
                            <td width="40%"><b><i class="far fa-calendar-check"></i> Ruang Rawat  </b></td>
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



                <hr>
                <button class="btn btn-info float-right" data-toggle="modal" data-target="#editAdvice"> <i
                        class="far fa-edit"></i> Edit Data </button>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lampiran Hasil Laborat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?= base_url('attachment/'.$result['laboratory']) ?> " class="img-fluid" alt="Hasil Laborat"
                    width="100%">
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="editAdvice" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="editAdviceLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAdviceLabel">Lampiran Hasil Laborat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('update_followup') ?>" method="POST">
                    <input type="hidden" name="assesment_id" id="assesment_id" value="<?= $result['assesment_id'] ?>">
                    <input type="hidden" name="cm" value="<?= $cm ?>">
                    <input type="hidden" name="checkin_code" value="<?= $checkin_code ?>">
                    <?php if($result['advice'] == 1 ) { ?>
                    <div class="form-group">
                        <label for="hospitalization_date">Tanggal Masuk Rumah Sakit</label>
                        <input type="date" class="form-control" id="hospitalization_date" name="hospitalization_date"
                            value="<?= $result['hospitalization_date'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="chemo_date">Tanggal Tindakan Kemotherapi</label>
                        <input type="date" class="form-control" id="chemo_date" name="chemo_date"
                            value="<?= $result['hospitalization_date'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="ward">Ruang Rawat</label>
                        <select name="ward" id="ward" class="form-control" required>
                            <option value="">-- Pilih Ruang Rawat --</option>
                            <option value="Kasuari_3">Kasuari Lantai 3</option>
                            <option value="Kasuari_4">Kasuari Lantai 4</option>
                            <option value="Kasuari_5">Kasuari Lantai 5</option>
                        </select>
                    </div>
                    <?php }else if($result['advice'] == 2) { ?>
                    <div class="form-group">
                        <label for="hospitalization_date">Tanggal Masuk Rumah Sakit</label>
                        <input type="date" class="form-control" id="hospitalization_date" name="hospitalization_date"
                            value="<?= $result['hospitalization_date'] ?>" required>
                    </div>
                    <?php }else if($result['advice'] == 3 || $result['advice'] == 5 ) { ?>
                    <div class="form-group">
                        <label for="hospitalization_date">Tanggal Kontrol Ulang</label>
                        <input type="date" class="form-control" id="hospitalization_date" name="hospitalization_date"
                            value="<?= $result['hospitalization_date'] ?>" required>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="ns_education">Saran / Edukasi Perawat</label>
                        <textarea name="ns_education" id="ns_education" class="form-control" cols="30" rows="3"
                            required><?= $result['ns_education'] ?></textarea>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary float-right"><i class="far fa-paper-plane"></i> Kirim
                        Data</button>
                </form>
            </div>
        </div>
    </div>
</div>