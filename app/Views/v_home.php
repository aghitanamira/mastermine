<!-- ambil template di view layouts -->
<?= $this->extend('/layouts/template'); ?> 
<!-- memanggil isi konten -->
<?= $this->section('content'); ?>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!--  sale analytics start -->
                                            <div class="col-xl-4 col-md-8">
                                                <div class="card table-card">
                                                    <?php if (session()->getFlashdata('pesan')) : ?>
                                                        <div class="alert alert-success" role="alert">
                                                            <?= session()->getFlashdata('pesan'); ?>
                                                        </div>
                                                    <?php endif ?>
                                                    <div class="card-header">
                                                        <h5>Recent Notes</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <tbody>

                                                                    <?php
                                                                    foreach ($note as $i => $note) : ?>
                                                                        <tr>
                                                                            <th scope="row"><?= $i + 1; ?></th>
                                                                            <td><a href="/notes/"><?= $note['judul']; ?></a></td>
                                                                            <td><?= $note['kategori']; ?></td>
                                                                        </tr>
                                                                    <?php
                                                                    endforeach;
                                                                    ?>
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-md-12">
                                                <div class="row">
                                                    <!-- sale card start -->

                                                    <div class="col-md-12">
                                                        <div class="card text-center order-visitor-card">
                                                            <div class="card-block">

                                                            </div>
                                                        </div>
                                                        <!-- sale card end -->
                                                    </div>
                                                </div>

                                                <!--  sale analytics end -->

                                            </div>
                                        </div>
                                        <!-- Page-body end -->
                                    </div>
                                    <div id="styleSelector"> </div>
                                </div>
                            </div>
                        </div>
<?= $this->endSection(); ?>