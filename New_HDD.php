<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BS COMPUTERS - New HDD Installation</title>

  <!-- bootstrap icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <style>
    .carousel-caption {
      position: absolute;
      top: 20%;
      transform: translateY(-20%);
      color: #fff;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.7);
    }

    .carousel-caption.custom-caption {
      background-color: rgba(0, 0, 0, 0.5);
      padding: 20px;
      border-radius: 10px;
      bottom: 50%;
      transform: translateY(50%);
      left: 50%;
      transform: translate(-50%, 50%);
      text-align: center;
      width: 80%;
    }

    .carousel-caption.custom-caption h2 {
      font-size: 2.5rem;
      font-weight: 800;
      color: #fff;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
    }

    .carousel-caption.custom-caption p {
      font-size: 1.25rem;
      font-weight: 600;
      color: #f8f9fa;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
    }

    .product-card {
      border: 1px solid #eaeaea;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
    }

    .product-img {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      height: 200px;
      object-fit: cover;
    }

    .contact-container {
      padding: 50px 0;
    }

    .contact-form {
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    iframe {
      width: 100%;
      height: 100%;
      min-height: 400px;
      border: none;
      border-radius: 8px;
    }

    .faq-section {
      padding: 50px 15px;
    }

    .faq-title {
      text-align: center;
      margin-bottom: 40px;
    }
  </style>
  
</head>

<body>

  <!-- header -->
  <?php include('includes/header.php') ?>

  <!-- Breadcrumb Section -->
  <section class="breadcrumb-section text-center text-white">
    <div class="container breadcrumb-content">
      <h1 class="fw-bold mb-3">New HDD Installation</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Products</a></li>
          <li class="breadcrumb-item active text-white" aria-current="page">New HDD</li>
        </ol>
      </nav>
    </div>
  </section>
  <!-- End Breadcrumb Section -->

  <!-- New HDD Section -->
  <div class="container-fluid py-5">
    <section class="container">
      <div class="row align-items-center">
        <div class="col-md-6" data-aos="fade-right">
          <img src="assets/images/New_HDD.jpg" alt="New HDD" height="auto" width="100%" class="img-fluid rounded">
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <h2 class="mb-4">High-Performance HDD Installation</h2>
          <p>
            Upgrade your storage with a brand-new, high-capacity Hard Disk Drive (HDD) from <strong>BS COMPUTERS</strong>.
            Whether you're running out of space or need to replace a failing drive, our technicians provide
            professional installation services for all types of desktops and laptops.
          </p>
          <ul>
            <li><strong>Trusted Brands:</strong> We stock HDDs from reliable manufacturers like Seagate, Western Digital, Toshiba, and more.</li>
            <li><strong>Various Capacities:</strong> Choose from 500GB, 1TB, 2TB, and higher depending on your storage needs.</li>
            <li><strong>Fast Installation:</strong> Quick turnaround time with safe mounting, formatting, and OS reinstallation (if needed).</li>
            <li><strong>Data Transfer Services:</strong> We can migrate your data from old drives to the new HDD securely and efficiently.</li>
            <li><strong>Affordable Pricing:</strong> Competitive rates for both HDD units and installation services.</li>
          </ul>
          <p>
            Whether it's for personal or business use, our new HDD installation ensures enhanced storage, performance,
            and reliability. <strong>Contact BS COMPUTERS today</strong> to book your upgrade!
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
