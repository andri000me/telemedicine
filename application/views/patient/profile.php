<div class="row">
    <div class="col-sm-6">
        <div class="user-profile layout-spacing">
            <div class="widget-content widget-content-area">
                <div class="d-flex justify-content-between">
                    <h3 class="">Detail Profil Saya</h3>
                    <a data-toggle="modal" data-target="#updateProfileForm" class="mt-2 edit-profile" style="cursor: pointer;">
                        <i data-feather="camera"></i>
                    </a>
                </div>
                <div class="text-center user-info">
                    <?php if ($patient['profile_image'] == '') { ?>
                        <img src="<?= base_url('assets/images/profile-default.png') ?>" alt="profile" width="20%">
                    <?php } else { ?>
                        <img src="<?= base_url('assets/image/profile/' . $patient['profile_image']) ?>" alt="profile" width="20%">
                    <?php }  ?>
                    <p class=""><?= $patient['name'] ?> | <?= $patient['cm'] ?></p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="user-info-list">
                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>
                                        <?= $patient['birthday'] ?>
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        <b class="text-danger">Alamat Pasien</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="user-info-list">
                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <b class="text-danger">Jimmy@gmail.com </b>
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>
                                        <?= $patient['phone'] ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="work-experience layout-spacing ">
            <div class="widget-content widget-content-area">
                <h3 class="">Aktivitas Saya</h3>
                <div class="timeline-alter mb-2">
                    <div class="item-timeline">
                        <div class="t-meta-date">
                            <p class="">04 Mar 2009</p>
                        </div>
                        <div class="t-dot">
                        </div>
                        <div class="t-text">
                            <p>Netfilx Inc.</p>
                            <p>Designer Illustrator</p>
                        </div>
                    </div>
                    <div class="item-timeline">
                        <div class="t-meta-date">
                            <p class="">25 Apr 2014</p>
                        </div>
                        <div class="t-dot">
                        </div>
                        <div class="t-text">
                            <p>Google Inc.</p>
                            <p>Designer Illustrator</p>
                        </div>
                    </div>
                    <div class="item-timeline">
                        <div class="t-meta-date">
                            <p class="">04 Apr 2018</p>
                        </div>
                        <div class="t-dot">
                        </div>
                        <div class="t-text">
                            <p>Design Reset Inc.</p>
                            <p>Designer Illustrator</p>
                        </div>
                    </div>
                    <div class="item-timeline">
                        <div class="t-meta-date">
                            <p class="">25 Apr 2014</p>
                        </div>
                        <div class="t-dot">
                        </div>
                        <div class="t-text">
                            <p>Google Inc.</p>
                            <p>Designer Illustrator</p>
                        </div>
                    </div>
                    <div class="item-timeline">
                        <div class="t-meta-date">
                            <p class="">04 Apr 2018</p>
                        </div>
                        <div class="t-dot">
                        </div>
                        <div class="t-text">
                            <p>Design Reset Inc.</p>
                            <p>Designer Illustrator</p>
                        </div>
                    </div>
                    <div class="item-timeline">
                        <div class="t-meta-date">
                            <p class="">25 Apr 2014</p>
                        </div>
                        <div class="t-dot">
                        </div>
                        <div class="t-text">
                            <p>Google Inc.</p>
                            <p>Designer Illustrator</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="updateProfileForm" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateProfileFormLabel" aria-hidden="true">
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