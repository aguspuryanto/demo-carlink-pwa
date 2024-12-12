
  <!-- Bottom Navbar Menu -->
  <nav class="navbar navbar-light bg-light fixed-bottom border-top">
    <div class="container-fluid d-flex justify-content-around">
      <a href="<?= base_url(); ?>" class="nav-link text-center active">
        <i class="bi bi-house-door-fill"></i>
        <span class="d-block">Home</span>
      </a>
      <a href="<?= base_url('proses'); ?>" class="nav-link text-center">
        <i class="bi bi-arrow-repeat"></i>
        <span class="d-block">Proses</span>
      </a>
      <a href="<?= base_url('layanan'); ?>" class="nav-link text-center">
        <i class="bi bi-gear-fill"></i>
        <span class="d-block">Layanan</span>
      </a>
      <a href="<?= base_url('history'); ?>" class="nav-link text-center">
        <i class="bi bi-clock-history"></i>
        <span class="d-block">History</span>
      </a>
      <a href="<?= base_url('akun'); ?>" class="nav-link text-center">
        <i class="bi bi-person-circle"></i>
        <span class="d-block">Akun</span>
      </a>
    </div>
  </nav>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init(); // Initialize AOS library
  </script>