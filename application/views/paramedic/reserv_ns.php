<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasien Kontrol Hari Ini </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
            <thead>
                <th>No</th>
                <th>No Rekam Medis</th>
                <th>Nama</th>
                <th>Tanggal Reservasi</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php $no = 1; foreach($patients as $patient){ ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $patient['cm'] ?></td>
                    <td><?= $patient['name'] ?></td>
                    <td><?php $date = new DateTime($patient['reservation_date']); echo $date->format('d-m-Y') ?></td>
                    <td><a href="<?= base_url('checkup_ns/') ?><?= $patient['cm']?>/<?= $patient['checkin_code']?>"> <span class="badge badge-pill badge-primary py-2 px-3"><i class="fa fa-eye" aria-hidden="true"></i>  Lihat Data</span></a></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>