<!-- ambil template di view layouts -->
<?= $this->extend('/layouts/template'); ?>
<!-- memanggil isi konten -->
<?= $this->section('content'); ?>
<!-- Main-body start -->
<div class="main-body">
    <div class="page-wrapper">

        <!-- Page body start -->
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>Create Note</h5>
                    </div>
                    <div class="card-block">

                        <form action="/notes/save" method="POST">
                            <?= csrf_field(); ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; //if-else dlm satu baris
                                                                            ?>" placeholder="Type title note here..." id="judul" name="judul" value="<?= old('judul'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; //if-else dlm satu baris
                                                                            ?>" placeholder="Type category note here..." id="kategori" name="kategori" value="<?= old('kategori'); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" cols="5" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; //if-else dlm satu baris
                                                                                    ?>" placeholder="Type your description note here..." id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary pull-right" style="position: right;" value="Submit">
                            <!-- <button type="submit" class="btn btn-primary pull-right" style="position: right;">CREATE</button> -->

                        </form>

                    </div>
                </div>
                <!-- Basic Form Inputs card end -->
            </div>
        </div>
    </div>
    <!-- Page body end -->
</div>
</div>
<!-- Main-body end -->

<?= $this->endSection(); ?>