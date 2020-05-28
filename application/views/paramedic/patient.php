<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Riwayat Pasien Telemedicine</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
            <thead>
                <th>No</th>
                <th>No Rekam Medis</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php $no = 1; foreach($patients as $patient){ ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $patient['cm'] ?></td>
                    <td><?= $patient['name'] ?></td>
                    <td><?php $date = new DateTime($patient['birthday']); echo $date->format('d-m-Y') ?></td>
                    <td><a href="<?= base_url('getDetailPatient/'.$patient['cm']) ?>" class="btn btn-info" >Lihat Data</a></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
