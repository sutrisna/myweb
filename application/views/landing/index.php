<!DOCTYPE html>
<html lang="en">

<head>
  <title>My Web</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="frestive">
  <meta name="keywords" content="buah sayur">
  <meta name="description" content="Fresh fun family menyediakan banyak kebutuhan keluarga anda">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/favicon') ?>/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/favicon') ?>/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/favicon') ?>/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/favicon') ?>/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/favicon') ?>/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/favicon') ?>/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/favicon') ?>/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/favicon') ?>/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon') ?>/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/favicon') ?>/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon') ?>/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/favicon') ?>/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon') ?>/favicon-16x16.png">
  <link rel="manifest" href="<?php echo base_url('assets/favicon') ?>/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url('assets/favicon') ?>/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/templates/landing/organic-1.0.0/css/vendor.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/templates/landing/organic-1.0.0/style.css') ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>

<body>

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Growers cider</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Fresh grapes</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Heinz tomato ketchup</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">

    <div class="offcanvas-header justify-content-between">
      <h4 class="fw-normal text-uppercase fs-6">Menu</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

      <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
        <li class="nav-item border-dashed active">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#fruits"></use>
            </svg>
            <span>Fruits and vegetables</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#dairy"></use>
            </svg>
            <span>Dairy and Eggs</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#meat"></use>
            </svg>
            <span>Meat and Poultry</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#seafood"></use>
            </svg>
            <span>Seafood</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#bakery"></use>
            </svg>
            <span>Bakery and Bread</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#canned"></use>
            </svg>
            <span>Canned Goods</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#frozen"></use>
            </svg>
            <span>Frozen Foods</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#pasta"></use>
            </svg>
            <span>Pasta and Rice</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#breakfast"></use>
            </svg>
            <span>Breakfast Foods</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#snacks"></use>
            </svg>
            <span>Snacks and Chips</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <button class="btn btn-toggle dropdown-toggle position-relative w-100 d-flex justify-content-between align-items-center text-dark p-2" data-bs-toggle="collapse" data-bs-target="#beverages-collapse" aria-expanded="false">
            <div class="d-flex gap-3">
              <svg width="24" height="24" viewBox="0 0 24 24">
                <use xlink:href="#beverages"></use>
              </svg>
              <span>Beverages</span>
            </div>
          </button>
          <div class="collapse" id="beverages-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal ps-5 pb-1">
              <li class="border-bottom py-2"><a href="#" class="dropdown-item">Water</a></li>
              <li class="border-bottom py-2"><a href="#" class="dropdown-item">Juice</a></li>
              <li class="border-bottom py-2"><a href="#" class="dropdown-item">Soda</a></li>
              <li class="border-bottom py-2"><a href="#" class="dropdown-item">Tea</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#spices"></use>
            </svg>
            <span>Spices and Seasonings</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#baby"></use>
            </svg>
            <span>Baby Food and Formula</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#health"></use>
            </svg>
            <span>Health and Wellness</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#household"></use>
            </svg>
            <span>Household Supplies</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#personal"></use>
            </svg>
            <span>Personal Care</span>
          </a>
        </li>
        <li class="nav-item border-dashed">
          <a href="#" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#pet"></use>
            </svg>
            <span>Pet Food and Supplies</span>
          </a>
        </li>
      </ul>

    </div>

  </div>

  <header>
    <div class="container-fluid">
      <div class="row py-3 border-bottom">

        <div class="col-sm-4 col-lg-2 text-center text-sm-start d-flex gap-3 justify-content-center justify-content-md-start">
          <div class="d-flex align-items-center my-3 my-sm-0">
            <a href="#">
              <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/logo.png') ?>" alt="logo" class="img-fluid">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <svg width="24" height="24" viewBox="0 0 24 24">
              <use xlink:href="#menu"></use>
            </svg>
          </button>
        </div>

        <div class="col-sm-6 offset-sm-2 offset-md-0 col-lg-4">
          <div class="search-bar row bg-light p-2 rounded-4">
            <div class="col-md-4 d-none d-md-block">
              <select class="form-select border-0 bg-transparent">
                <option>All Categories</option>
                <option>Groceries</option>
                <option>Drinks</option>
                <option>Fruits</option>
              </select>
            </div>
            <div class="col-11 col-md-7">
              <form id="search-form" class="text-center" action="#" method="post">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Search for more than 20,000 products">
              </form>
            </div>
            <div class="col-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
              </svg>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4">
            <ul class="navbar-nav list-unstyled d-flex flex-row gap-3 gap-lg-5 justify-content-center flex-wrap align-items-center mb-0 fw-bold text-uppercase text-dark">
              <li class="nav-item active">
                <a href="#" class="nav-link">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pe-3" role="button" id="pages" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                <ul class="dropdown-menu border-0 p-3 rounded-0 shadow" aria-labelledby="pages">
                  <li><a href="#" class="dropdown-item">About Us </a></li>
                  <li><a href="#" class="dropdown-item">Shop </a></li>
                  <li><a href="#" class="dropdown-item">Single Product </a></li>
                  <li><a href="#" class="dropdown-item">Cart </a></li>
                  <li><a href="#" class="dropdown-item">Checkout </a></li>
                  <li><a href="#" class="dropdown-item">Blog </a></li>
                  <li><a href="#" class="dropdown-item">Single Post </a></li>
                  <li><a href="#" class="dropdown-item">Styles </a></li>
                  <li><a href="#" class="dropdown-item">Contact </a></li>
                  <li><a href="#" class="dropdown-item">Thank You </a></li>
                  <li><a href="#" class="dropdown-item">My Account </a></li>
                  <li><a href="#" class="dropdown-item">404 Error </a></li>
                </ul>
              </li>
            </ul>
          </div> -->

        <div class="col-sm-8 col-lg-2 d-flex gap-5 align-items-center justify-content-center justify-content-sm-end">
          <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
              <a href="#" class="p-2 mx-1">
                <svg width="24" height="24">
                  <use xlink:href="#user"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="p-2 mx-1">
                <svg width="24" height="24">
                  <use xlink:href="#wishlist"></use>
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="p-2 mx-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">
                <svg width="24" height="24">
                  <use xlink:href="#shopping-bag"></use>
                </svg>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </header>

  <section style="background-image: url('<?php echo base_url('assets/templates/landing/organic-1.0.0/images/banner-1.jpg') ?>');background-repeat: no-repeat;background-size: cover;">
    <div class="container-lg">
      <div class="row">
        <div class="col-lg-6 pt-5 mt-5">
          <h2 class="display-1 ls-1"><span class="fw-bold text-primary">Frestive</span> Fresh Fun <span class="fw-bold">Family</span></h2>
          <p class="fs-4">Lebih dari sekadar tujuan belanja.</p>
          <div class="d-flex gap-3">
            <a href="#" class="btn btn-primary text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Start Shopping</a>
            <a href="#" class="btn btn-dark text-uppercase fs-6 rounded-pill px-4 py-3 mt-3">Join Now</a>
          </div>
          <div class="row my-5">
            <div class="col">
              <div class="row text-dark">
                <div class="col-auto">
                  <p class="fs-1 fw-bold lh-sm mb-0">14k+</p>
                </div>
                <div class="col">
                  <p class="text-uppercase lh-sm mb-0">Product Varieties</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="row text-dark">
                <div class="col-auto">
                  <p class="fs-1 fw-bold lh-sm mb-0">50k+</p>
                </div>
                <div class="col">
                  <p class="text-uppercase lh-sm mb-0">Happy Customers</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="row text-dark">
                <div class="col-auto">
                  <p class="fs-1 fw-bold lh-sm mb-0">10+</p>
                </div>
                <div class="col">
                  <p class="text-uppercase lh-sm mb-0">Store Locations</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 g-0 justify-content-center">
        <div class="col">
          <div class="card border-0 bg-primary rounded-0 p-4 text-light">
            <div class="row">
              <div class="col-md-3 text-center">
                <svg width="60" height="60">
                  <use xlink:href="#fresh"></use>
                </svg>
              </div>
              <div class="col-md-9">
                <div class="card-body p-0">
                  <h5 class="text-light">Komitmen</h5>
                  <p class="card-text">Menyajikan Buah Segar & Eksotis dan berbagai kebutuhan anda</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-0 bg-secondary rounded-0 p-4 text-light">
            <div class="row">
              <div class="col-md-3 text-center">
                <svg width="60" height="60">
                  <use xlink:href="#organic"></use>
                </svg>
              </div>
              <div class="col-md-9">
                <div class="card-body p-0">
                  <h5 class="text-light">100% Istimewa</h5>
                  <p class="card-text">Menghadirkan berbagai kebutuhan istimewa rumah tangga anda.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-0 bg-danger rounded-0 p-4 text-light">
            <div class="row">
              <div class="col-md-3 text-center">
                <svg width="60" height="60">
                  <use xlink:href="#delivery"></use>
                </svg>
              </div>
              <div class="col-md-9">
                <div class="card-body p-0">
                  <h5 class="text-light">Kenyamanan</h5>
                  <p class="card-text">Kenyamanan berbelanja anda adalah prioritas kami.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="py-5 overflow-hidden">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">

          <div class="section-header d-flex flex-wrap justify-content-between mb-5">
            <h2 class="section-title">Category</h2>

            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-primary me-2">View All</a>
              <div class="swiper-buttons">
                <button class="swiper-prev category-carousel-prev btn btn-yellow">❮</button>
                <button class="swiper-next category-carousel-next btn btn-yellow">❯</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="category-carousel swiper">
            <div class="swiper-wrapper">
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-2.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-3.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-4.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-5.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-6.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-7.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-8.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Breads & Sweets</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Fruits & Veges</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Beverages</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Meat Products</h4>
              </a>
              <a href="#" class="nav-link swiper-slide text-center">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/category-thumb-1.jpg" class="rounded-circle" alt="Category Thumbnail">
                <h4 class="fs-6 mt-3 fw-normal category-title">Breads</h4>
              </a>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="pb-5">
    <div class="container-lg">

      <div class="row">
        <div class="col-md-12">

          <div class="section-header d-flex flex-wrap justify-content-between my-4">

            <h2 class="section-title">Best selling products</h2>

            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-primary rounded-1">View All</a>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-md-12">

          <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-1.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Whole Wheat Sandwich Bread</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-2.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Whole Grain Oatmeal</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(41)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$54.00</del>
                    <span class="text-dark fw-semibold">$50.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-3.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Sharp Cheddar Cheese Block</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(32)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$14.00</del>
                    <span class="text-dark fw-semibold">$12.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-4.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Organic Baby Spinach</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-5.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Organic Spinach Leaves (Fresh Produce)</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-6.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Fresh Salmon</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-7.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Imported Italian Spaghetti Pasta</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-8.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Granny Smith Apples</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-9.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Organic 2% Reduced Fat Milk </h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="product-item">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-10.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
                <div class="d-flex flex-column text-center">
                  <h3 class="fs-6 fw-normal">Greek Style Plain Yogurt</h3>
                  <div>
                    <span class="rating">
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-full"></use>
                      </svg>
                      <svg width="18" height="18" class="text-warning">
                        <use xlink:href="#star-half"></use>
                      </svg>
                    </span>
                    <span>(222)</span>
                  </div>
                  <div class="d-flex justify-content-center align-items-center gap-2">
                    <del>$24.00</del>
                    <span class="text-dark fw-semibold">$18.00</span>
                    <span class="badge border border-dark-subtle rounded-0 fw-normal px-1 fs-7 lh-1 text-body-tertiary">10% OFF</span>
                  </div>
                  <div class="button-area p-3 pt-0">
                    <div class="row g-1 mt-2">
                      <div class="col-3"><input type="number" name="quantity" class="form-control border-dark-subtle input-number quantity" value="1"></div>
                      <div class="col-7"><a href="#" class="btn btn-primary rounded-1 p-2 fs-7 btn-cart"><svg width="18" height="18">
                            <use xlink:href="#cart"></use>
                          </svg> Add to Cart</a></div>
                      <div class="col-2"><a href="#" class="btn btn-outline-dark rounded-1 p-2 fs-6"><svg width="18" height="18">
                            <use xlink:href="#heart"></use>
                          </svg></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- / product-grid -->


        </div>
      </div>
    </div>
  </section>

  <section class="py-3">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">

          <div class="banner-blocks">

            <div class="banner-ad d-flex align-items-center large bg-info block-1" style="background: url('<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/banner-ad-1.jpg') no-repeat; background-size: cover;">
              <div class="banner-content p-5">
                <div class="content-wrapper text-light">
                  <h3 class="banner-title text-light">Items on SALE</h3>
                  <p>Discounts up to 30%</p>
                  <a href="#" class="btn-link text-white">Shop Now</a>
                </div>
              </div>
            </div>

            <div class="banner-ad bg-success-subtle block-2" style="background:url('<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/banner-ad-2.jpg') no-repeat;background-size: cover">
              <div class="banner-content align-items-center p-5">
                <div class="content-wrapper text-light">
                  <h3 class="banner-title text-light">Combo offers</h3>
                  <p>Discounts up to 50%</p>
                  <a href="#" class="btn-link text-white">Shop Now</a>
                </div>
              </div>
            </div>

            <div class="banner-ad bg-danger block-3" style="background:url('<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/banner-ad-3.jpg') no-repeat;background-size: cover">
              <div class="banner-content align-items-center p-5">
                <div class="content-wrapper text-light">
                  <h3 class="banner-title text-light">Discount Coupons</h3>
                  <p>Discounts up to 40%</p>
                  <a href="#" class="btn-link text-white">Shop Now</a>
                </div>
              </div>
            </div>

          </div>
          <!-- / Banner Blocks -->

        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-lg">

      <div class="bg-secondary text-light py-5 my-5" style="background: url('<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/banner-newsletter.jpg') no-repeat; background-size: cover;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-5 p-3">
              <div class="section-header">
                <h2 class="section-title display-5 text-light">Get 25% Discount on your first purchase</h2>
              </div>
              <p>Just Sign Up & Register it now to become member.</p>
            </div>
            <div class="col-md-5 p-3">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label d-none">Name</label>
                  <input type="text"
                    class="form-control form-control-md rounded-0" name="name" id="name" placeholder="Name">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label d-none">Email</label>
                  <input type="email" class="form-control form-control-md rounded-0" name="email" id="email" placeholder="Email Address">
                </div>
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-dark btn-md rounded-0">Submit</button>
                </div>
              </form>

            </div>

          </div>

        </div>
      </div>

    </div>
  </section>


  <section id="latest-products" class="products-carousel">
    <div class="container-lg overflow-hidden pb-5">
      <div class="row">
        <div class="col-md-12">

          <div class="section-header d-flex justify-content-between my-4">

            <h2 class="section-title">Promo Menarik</h2>

            <div class="d-flex align-items-center">
              <a href="#" class="btn btn-primary me-2">View All</a>
              <div class="swiper-buttons">
                <button class="swiper-prev products-carousel-prev btn btn-primary">❮</button>
                <button class="swiper-next products-carousel-next btn btn-primary">❯</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">

          <div class="swiper">
            <div class="swiper-wrapper">

              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/product-thumb-20.png" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>

              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/galungan.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/green.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/htdl.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/manggo.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/wee.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/coco.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/stb.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/anggur.jpg') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>
              <div class="product-item swiper-slide">
                <figure>
                  <a href="#" title="Product Title">
                    <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/duren.png') ?>" alt="Product Thumbnail" class="tab-image">
                  </a>
                </figure>
              </div>

            </div>
          </div>
          <!-- / products-carousel -->

        </div>
      </div>
    </div>
  </section>

  <section id="latest-blog" class="pb-4">
    <div class="container-lg">
      <div class="row">
        <div class="section-header d-flex align-items-center justify-content-between my-4">
          <h2 class="section-title">Our Recent Blog</h2>
          <a href="#" class="btn btn-primary">View All</a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <article class="post-item card border-0 shadow-sm p-3">
            <div class="image-holder zoom-effect">
              <a href="#">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/post-thumbnail-1.jpg" alt="post" class="card-img-top">
              </a>
            </div>
            <div class="card-body">
              <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                <div class="meta-date"><svg width="16" height="16">
                    <use xlink:href="#calendar"></use>
                  </svg>22 Aug 2021</div>
                <div class="meta-categories"><svg width="16" height="16">
                    <use xlink:href="#category"></use>
                  </svg>tips & tricks</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="#" class="text-decoration-none">Top 10 casual look ideas to dress up your kids</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item card border-0 shadow-sm p-3">
            <div class="image-holder zoom-effect">
              <a href="#">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/post-thumbnail-2.jpg" alt="post" class="card-img-top">
              </a>
            </div>
            <div class="card-body">
              <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                <div class="meta-date"><svg width="16" height="16">
                    <use xlink:href="#calendar"></use>
                  </svg>25 Aug 2021</div>
                <div class="meta-categories"><svg width="16" height="16">
                    <use xlink:href="#category"></use>
                  </svg>trending</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="#" class="text-decoration-none">Latest trends of wearing street wears supremely</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
              </div>
            </div>
          </article>
        </div>
        <div class="col-md-4">
          <article class="post-item card border-0 shadow-sm p-3">
            <div class="image-holder zoom-effect">
              <a href="#">
                <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/post-thumbnail-3.jpg" alt="post" class="card-img-top">
              </a>
            </div>
            <div class="card-body">
              <div class="post-meta d-flex text-uppercase gap-3 my-2 align-items-center">
                <div class="meta-date"><svg width="16" height="16">
                    <use xlink:href="#calendar"></use>
                  </svg>28 Aug 2021</div>
                <div class="meta-categories"><svg width="16" height="16">
                    <use xlink:href="#category"></use>
                  </svg>inspiration</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="#" class="text-decoration-none">10 Different Types of comfortable clothes ideas for women</a>
                </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipi elit. Aliquet eleifend viverra enim tincidunt donec quam. A in arcu, hendrerit neque dolor morbi...</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="pb-4 my-4">
    <div class="container-lg">

      <div class="bg-warning pt-5 rounded-5">
        <div class="container">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-4">
              <h2 class="mt-5">Download Loyal Reward by Frestive</h2>
              <p>Dapatkan poin setiap berbelanja dan tukarkan dengan kupon potongan harga</p>
              <div class="d-flex gap-2 flex-wrap mb-5">
                <a href="https://apps.apple.com/id/app/loyal-reward/id6503340929" title="App store"><img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/img-app-store.png" alt="app-store"></a>
                <a href="https://play.google.com/store/apps/details?id=lmu.my.fresh&hl=id" title="Google Play"><img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/img-google-play.png" alt="google-play"></a>
              </div>
            </div>
            <div class="col-md-5">
              <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/') ?>images/banner-onlineapp.png" alt="phone" class="img-fluid">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>



  <footer class="py-5">
    <div class="container-lg">
      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <img src="<?php echo base_url('assets/templates/landing/organic-1.0.0/images/logo.png') ?>" width="240" height="90" alt="logo">
            <div class="social-links mt-3">
              <ul class="d-flex list-unstyled gap-2">
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#facebook"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#twitter"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#youtube"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="btn btn-outline-light">
                    <svg width="16" height="16">
                      <use xlink:href="#amazon"></use>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-2 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Frestive</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">About us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Conditions </a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Our Journals</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Careers</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Affiliate Programme</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Ultras Press</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Quick Links</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">Offers</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Discount Coupons</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Stores</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Track Order</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Shop</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Info</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Customer Service</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="nav-link">FAQ</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Privacy Policy</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Returns & Refunds</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Cookie Guidelines</a>
              </li>
              <li class="menu-item">
                <a href="#" class="nav-link">Delivery Information</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Subscribe Us</h5>
            <p>Subscribe to our newsletter to get updates about our grand offers.</p>
            <form class="d-flex mt-3 gap-0" action="#">
              <input class="form-control rounded-start rounded-0 bg-light" type="email" placeholder="Email Address" aria-label="Email Address">
              <button class="btn btn-dark rounded-end rounded-0" type="submit">Subscribe</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <div id="footer-bottom">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-6 copyright">
          <p>© 2024 Frestive. All rights reserved.</p>
        </div>
        <div class="col-md-6 credit-link text-start text-md-end" style="font-size:0.1px;">
          <p>HTML Template by <a href="https://templatesjungle.com/">TemplatesJungle</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a> </p>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/templates/landing/organic-1.0.0/js/jquery-1.11.0.min.js') ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('assets/templates/landing/organic-1.0.0/js/plugins.js') ?>"></script>
  <script src="<?php echo base_url('assets/templates/landing/organic-1.0.0/js/script.js') ?>"></script>
</body>

</html>