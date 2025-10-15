<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BS COMPUTERS - Laptop Display</title>

  <!-- Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- AOS Animation CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

  <!-- Your Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

  <!-- Header -->
  <?php include('includes/header.php') ?>

  <!-- Breadcrumb Section -->
  <section class="breadcrumb-section text-center text-white">
    <div class="container breadcrumb-content">
      <h1 class="fw-bold mb-3">Laptop Display</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Products</a></li>
          <li class="breadcrumb-item active text-white" aria-current="page">Laptop Display</li>
        </ol>
      </nav>
    </div>
  </section>

  <!-- Product Section -->
  <div class="container-fluid py-5">
    <section class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
          <img src="assets/images/Laptop-display.jpg" alt="Laptop Display" class="img-fluid rounded w-100">
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h2 class="mb-4">Laptop Display Replacement</h2>
          <p>
            Broken, cracked, or flickering laptop screen? BS COMPUTERS offers original laptop display replacements with expert installation.
          </p>
          <ul>
            <li><strong>All Screen Types:</strong> LED, LCD, IPS, Touchscreen & Non-Touch</li>
            <li><strong>Exact Fit Guarantee:</strong> Screen based on model number</li>
            <li><strong>Anti-Glare & HD Displays:</strong> Choose from a range of screen types</li>
            <li><strong>Quick Replacement:</strong> Same-day service for most models</li>
            <li><strong>Warranty Included:</strong> Up to 6-month warranty on display</li>
          </ul>
          <p>
            We use only high-quality parts and provide expert installation to restore your laptop's screen clarity and usability.
          </p>
          <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry Now</button>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <?php include('includes/footer.php') ?>

</body>

</html>
