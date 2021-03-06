<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Riwayat Periksa Online     </h6>
        </div>
        <div class="card-body">
             <ul class="timeline">
                <?php foreach ( $results as $result) { ?>
                <li>
                    <a href="<?= base_url('contrest/'.$patient_id.'/'.$result['checkin_code']) ?>">Tanggal Periksa : <?php $date = new DateTime($result['date_added']); echo $date->format('d F Y');  ?>  | Kode Checkin : <?= $result['checkin_code'] ?>
                    <span class="badge badge-pill badge-success px-3 py-2 float-right"><i class="fas fa-chalkboard-teacher"></i> Lihat Hasil Kontrol</span></a>
                    <p>
                        Keluhan :
                        <?= $result ['description']; ?>
                    </p>
                    <p>
                        <span class="badge badge-pill badge-info px-2 py-1"><i class="far fa-calendar"></i> <?= $result['service_name']; ?> </span>
                    </p>
                </li>
                <?php } ?>
            </ul>
        </div> 
    </div>
</div>