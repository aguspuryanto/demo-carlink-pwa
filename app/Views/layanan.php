<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <main class="container mt-5 pt-5">
        <h1 class="text-center">Halaman Layanan</h1>
        <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Proses 1</h5>
                <p class="card-text">Deskripsi proses pertama.</p>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Proses 2</h5>
                <p class="card-text">Deskripsi proses kedua.</p>
            </div>
            </div>
        </div>
        </div>
    </main>

<?= $this->endSection() ?>
