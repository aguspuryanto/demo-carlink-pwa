<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Mobile PWA</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS (Animate On Scroll) CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- Favicon -->
  <link rel="icon" href="assets/images/icon.png">
</head>
<body>
  <!-- Navbar -->
  <header class="navbar navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PWA App</a>
      <!-- Page Title -->
      <!-- <span class="navbar-brand mx-auto">PWA App</span> -->
      <!-- Menu Button (Aligned Right) -->
      <button class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <i class="bi bi-list"></i> Menu
      </button>
    </div>
  </header>

  <?= $this->include('layouts/sidebar'); ?>

  <?= $this->renderSection('content') ?>

  <?= $this->include('layouts/footer') ?>
</body>
</html>