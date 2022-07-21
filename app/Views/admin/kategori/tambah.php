<?= $this->extend('admin/layout/indexAdmin') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title ?></h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        Tambah <?= $title ?>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form action="/kategori/save" method="post">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-groub mb-3">
                                <label for="" class="mb-3">Nama Kategori</label>
                                <input type="text" name="text" class="form-control" id="text" aria-describedby="textHelp">
                            </div>

                            <div class="form-groub mb-3">
                                <label for="" class="mb-3">Deskripsi</label>
                                <input type="text" name="text" class="form-control" id="text" aria-describedby="textHelp">
                            </div>
                            <div class="form-groub mb-3">
                                <button class="btn btn-primary" type="submit"><i class="bi bi-save"></i> Simpan</button>
                                <a href="/kategori/tambah" class="btn btn-primary"><i class="bi bi-plus"></i> Tambah</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </section>
</div>

<?= $this->endSection() ?>