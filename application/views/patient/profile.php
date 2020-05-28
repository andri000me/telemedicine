<div class="d-flex justify-content-center">
    <div class="col-sm-8">
        <div class="card">
            <div class="card-header">
                <h5><b>Detail Profil Saya</b></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4"  align="center" >
                        <?php if($patient['profile_image'] == ''){ ?>
                        <img src="https://forwardsummit.ca/wp-content/uploads/elementor/thumbs/avatar-default-o2sx2m3qu406gxmnsclfw8fqumxzdk420s5ugc3q8w.png"
                            alt="" width="100%">
                        <?php } else{ ?>
                            <img src="<?= base_url('assets/image/profile/'.$patient['profile_image']) ?>"
                            alt="" width="80%">
                        <?php }  ?>
                            <div class="mt-2">
                            <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#updateProfileForm">
                              <i class="far fa-edit" aria-hidden="true"></i>  Ganti Foto Saya
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <table class="table">
                            <tr>
                                <td> Nama </td>
                                <td>:
                                    <b> <?= $patient['name'] ?></b>
                                </td>
                            </tr>
                            <tr>
                                <td> No Rekam Medis </td>
                                <td>:
                                    <b> <?= $patient['cm'] ?></b>
                                </td>
                            </tr>
                            <tr>
                                <td> Tanggal Lahir </td>
                                <td>:
                                    <b> <?= $patient['birthday'] ?></b>
                                </td>
                            </tr>
                            <tr>
                                <td> Telephone</td>
                                <td>:
                                    <b> <?= $patient['phone'] ?></b>
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="updateProfileForm" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateProfileFormLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url('patient/profile/update_image') ?>" method="POST" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="updateProfileFormLabel">Ganti Foto Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="cm" value="<?= $patient['cm'] ?>">
                <input type="file" class="form-control btn btn-info btn-block py-2" name="profile_image">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>