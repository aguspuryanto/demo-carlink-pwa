<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

  <!-- Main Content -->
  <main class="container mt-0 pt-5">
    <section class="py-5 bg-light">
      <div class="container">
        <div class="row text-center">
          <!-- Hitung Rate -->
          <div class="col-6 col-md-3 mb-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
              <div class="card-body text-center py-4">
                <i class="bi bi-calculator display-4 text-primary mb-3" style="font-size: 3rem;"></i>
                <h5 class="card-title">Hitung Rate</h5>
                <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Cek</a>
              </div>
            </div>
          </div>
          <!-- Order Layanan -->
          <div class="col-6 col-md-3 mb-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
              <div class="card-body text-center py-4">
                <i class="bi bi-cart-fill display-4 text-success mb-3" style="font-size: 3rem;"></i>
                <h5 class="card-title">Order Layanan</h5>
                <a href="#" class="btn btn-success rounded-pill px-4 py-2">Pesan</a>
              </div>
            </div>
          </div>
          <!-- Lepas Kunci -->
          <div class="col-6 col-md-3 mb-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
              <div class="card-body text-center py-4">
                <i class="bi bi-key-fill display-4 text-warning mb-3" style="font-size: 3rem;"></i>
                <h5 class="card-title">Lepas Kunci</h5>
                <a href="#" class="btn btn-warning rounded-pill px-4 py-2">Lihat</a>
              </div>
            </div>
          </div>
          <!-- Order Bulanan -->
          <div class="col-6 col-md-3 mb-4">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
              <div class="card-body text-center py-4">
                <i class="bi bi-calendar-check-fill display-4 text-danger mb-3" style="font-size: 3rem;"></i>
                <h5 class="card-title">Order Bulanan</h5>
                <a href="#" class="btn btn-danger rounded-pill px-4 py-2">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>    
    
    <!-- Hero Section -->
    <section class="text-center py-5">
      <h1 class="display-4 fw-bold" data-aos="fade-up">Selamat Datang!</h1>
      <p class="lead text-muted" data-aos="fade-up" data-aos-delay="200">
        Jelajahi aplikasi kami dengan berbagai fitur menarik dan kemudahan akses.
      </p>
      <a href="proses.html" class="btn btn-primary btn-lg mt-3" data-aos="zoom-in" data-aos-delay="400">
        Mulai Sekarang
      </a>
    </section>

    <!-- Testimonials Section -->
    <section class="mt-5 text-center" data-aos="zoom-in">
      <h2 class="fw-bold mb-4">Apa Kata Mereka?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <blockquote class="blockquote">
            <p class="mb-3">"Aplikasi ini sangat membantu!"</p>
            <footer class="blockquote-footer">John Doe</footer>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote class="blockquote">
            <p class="mb-3">"Sangat mudah digunakan dan cepat."</p>
            <footer class="blockquote-footer">Jane Smith</footer>
          </blockquote>
        </div>
        <div class="col-md-4">
          <blockquote class="blockquote">
            <p class="mb-3">"Fitur-fiturnya luar biasa."</p>
            <footer class="blockquote-footer">Alice Johnson</footer>
          </blockquote>
        </div>
      </div>
    </section>
  </main>

<?= $this->endSection() ?>