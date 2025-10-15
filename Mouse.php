<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BS COMPUTERS - Mouse</title>

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css" />



</head>

<body>

  <!-- header -->
  <?php include('includes/header.php') ?>

  <!-- Breadcrumb Section -->
  <section class="breadcrumb-section text-center text-white">
    <div class="container breadcrumb-content">
      <h1 class="fw-bold mb-3">Mouse</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Products</a></li>
          <li class="breadcrumb-item active text-white" aria-current="page">Mouse</li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- End Breadcrumb Section -->

  <!-- Mouse Product Section -->
  <div class="container-fluid py-5">
    <section class="container">
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
          <img src="assets/images/mouse.jpg" alt="Mouse" height="auto" width="100%" class="img-fluid rounded">
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h2 class="mb-4">Precision Mouse for Smooth Navigation</h2>
          <p>
            Discover high-performance wired and wireless mouse options at <strong>BS COMPUTERS</strong>. Whether you're a gamer, designer,
            or office user, we offer a wide range of ergonomic and responsive mouse devices to enhance your productivity and experience.
          </p>
          <ul>
            <li><strong>Ergonomic Design:</strong> Comfortable to use for long hours with sleek, contoured grips.</li>
            <li><strong>Wired & Wireless Options:</strong> Choose based on your setup – we have both!</li>
            <li><strong>Gaming & Office Use:</strong> High DPI sensors for precision and accuracy in every click.</li>
            <li><strong>Plug and Play:</strong> Easy to connect with USB or Bluetooth – no drivers needed.</li>
            <li><strong>Top Brands:</strong> Logitech, HP, Dell, Zebronics, Lenovo, and more available.</li>
          </ul>
          <p>
            Upgrade your input experience with a reliable mouse from BS COMPUTERS. Visit us or click below to enquire
            now.
          </p>
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry Now</button>
        </div>
      </div>
    </section>
  </div>

  <!-- footer -->
  <?php include('includes/footer.php') ?>

</body>

</html>
