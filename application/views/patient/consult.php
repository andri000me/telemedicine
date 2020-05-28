<div class="card mb-5">
    <div class="card-header">
        <h6 class="text-primary"><b>Formulir Konsultasi Telemedicine</b></h6>
    </div>
    <div class="card-body text-dark">
        <form action="<?= base_url('consult') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="checkin_code" value="<?= $reservation['checkin_code'] ?>">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label"><b> Nama</b></label>
                        <div class="col-sm-7">
                            <input type="text" readonly class="form-control-plaintext" id="name"
                                value="<?= $reservation['name'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-6 col-form-label"><b> No Rekam Medis</b></label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" name="patient_id"
                                value="<?= $reservation['cm'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-5 col-form-label"><b>Tanggal Lahir</b></label>
                        <div class="col-sm-7">
                            <input type="text" readonly class="form-control-plaintext" name="birthday"
                                value="<?= $reservation['birthday'] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h6 class="text-info"><b> Tanda - tanda vital</b></h6>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-5 col-form-label">Tekanan Darah (Tensi)</label>
                        <div class="col-sm-7">
                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    <label class="sr-only" for="sistol">Sistol</label>
                                    <input type="number" min="0" max="250" class="form-control mb-2" id="sistol"
                                        name="sistol" placeholder="0" required>
                                </div>
                                /
                                <div class="col-auto">
                                    <label class="sr-only" for="diastol">Diastol</label>
                                    <div class="input-group mb-2">
                                        <input type="number" min="0" max="250" class="form-control" id="diastol"
                                            name="diastol" placeholder="0" required>
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">mmHg</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-3 col-form-label">Suhu</label>
                        <div class="col-sm-7">
                            <div class="input-group mb-3">
                                <input type="number" step="0.1" class="form-control col-sm-6"
                                    aria-label="Sizing example input" name="temp"
                                    aria-describedby="inputGroup-sizing-default" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">&#8451;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-5 col-form-label">Laju pernapasan</label>
                        <div class="col-sm-7">
                            <div class="input-group mb-3">
                                <input type="number" min="0" max="60" class="form-control col-sm-8"
                                    aria-label="Sizing example input" name="rr"
                                    aria-describedby="inputGroup-sizing-default" placeholder="0" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">/Menit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-3 col-form-label">Denyut nadi</label>
                        <div class="col-sm-7">
                            <div class="input-group mb-3">
                                <input type="number" min="0" max="200" class="form-control col-sm-5"
                                    aria-label="Sizing example input" name="hr"
                                    aria-describedby="inputGroup-sizing-default" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">/Menit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-5 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-7">
                            <div class="input-group mb-3">
                                <input type="number" min="0" max="250" class="form-control col-sm-9"
                                    aria-label="Sizing example input" name="height"
                                    aria-describedby="inputGroup-sizing-default" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group row">
                        <label for="cm" class="col-sm-3 col-form-label">Berat Badan</label>
                        <div class="col-sm-7">
                            <div class="input-group mb-3">
                                <input type="number" min="0" max="1000" class="form-control col-sm-6"
                                    aria-label="Sizing example input" name="weight"
                                    aria-describedby="inputGroup-sizing-default" required>
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Kg</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <h6 class="text-info"><b> Data Konsultasi</b></h6>
            <hr>
            <div class="form-group row">
                <label for="pain" class="col-sm-3 col-form-label">Apakah Anda Nyeri ?</label>
                <div class="col-sm-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pain_n" name="pain" value="0" class="custom-control-input">
                        <label class="custom-control-label" for="pain_n">Tidak</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="pain_y" name="pain" value="1" class="custom-control-input">
                        <label class="custom-control-label" for="pain_y">Ya, Saya Nyeri
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-3 col-form-label">Apa yang anda rasakan ?</label>
                <div class="col-sm-8">
                    <textarea cols="30" rows="2" name="description" id="description" class="form-control"
                        required></textarea>
                </div>
            </div>
            <br>
            <h6 class="text-info"><b> Lampiran</b></h6>
            <hr>
            <div class="form-group row">
                <label for="other_image" class="col-sm-5 col-form-label">Lampirkan Hasil</label>
                <div class="col-sm-7">
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="other_image" id="other_image">
                            <label class="custom-file-label" for="other_image"
                                aria-describedby="other_image">Pilih file</label>
                        </div>
                    </div>
                </div>
            </div>
         
            <small>* Catatan : Hasil yang dilampirkan berupa hasil laborat, hasil PA, dan hasil pemeriksaan lainnya.</small>
            <hr>
            <div align="center">
                <button class="btn btn-primary">Konsultasi</button>
            </div>
        </form>
    </div>
</div>