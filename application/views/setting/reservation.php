<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasien Kontrol Hari Ini
            <button type="button" class="btn btn-primary btn-sm float-right modalAdd" data-toggle="modal"
                data-target="#formModal">
                <i class="fas fa-cloud-upload-alt"></i> Upload Data Pasien
            </button>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
            <thead>
                <th>No</th>
                <th>Kode Checkin</th>
                <th>No Rekam Medis</th>
                <th>Nama</th>
                <th>Tanggal Reservasi</th>
            </thead>
            <tbody>
                <?php $no = 1; foreach($patients as $patient){ ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $patient['checkin_code'] ?></td>
                    <td><?= $patient['cm'] ?></td>
                    <td><?= $patient['name'] ?></td>
                    <td><?= $patient['reservation_date'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>