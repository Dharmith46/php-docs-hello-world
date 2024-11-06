<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="" />
        
      </a>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item m-3">
          <a class="nav-link" href="#">Home</a>
        </li>

        <li class="nav-item m-3">
          <a class="nav-link text-dark" href="#"> Browse Jobs </a>
        </li>
        <li class="nav-item m-3">
          <a class="nav-link" href="#">Help Center</a>
        </li>
        <li class="nav-item dropdown pe-3">
          <a
            class="nav-link nav-profile d-flex align-items-center pe-0"
            href="#"
            data-bs-toggle="dropdown"
          >
            <img
              src="<?php echo e(asset('assets/img/placeholder.jpg')); ?>"
              alt=""
              class="rounded-circle"
            />
            <span class="d-none d-md-block dropdown-toggle ps-2"
              >Account</span
            >
          </a>

          <ul
            class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
          >
            
            <li>
              <hr class="dropdown-divider" />
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('employer.logout')); ?>">
                <i class="bi bi-person-plus"></i>
                <span>Logout</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- End Icons Navigation -->
  </header>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('employer.dashboard')); ?>">
          <i class="bi bi-person"></i>
          <span>Team Page</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('employer.team.assesment')); ?>">
          <i class="bi bi bi-circle"></i>
          <span>Team Assesments</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('employer.job.posting')); ?>">
          <i class="fas fa-briefcase"></i>
          <span>Job Posting</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('applicant.review')); ?>">
          <i class="fas fa-file-alt"></i>
          <span>Applicant Review</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('applicant.tracking')); ?>">
          <i class="fas fa-file-alt"></i>
          <span>Applicant Tracking</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('talent.search')); ?>">
          <i class="bi bi-search"></i>
          <span>Talent Search</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" data-page="faq">
          <i class="fas fa-question"></i> FAQ
        </a>
      </li>
    </ul>
</aside>
  
  
  

    <?php echo $__env->yieldContent('employer_team'); ?>
    <?php echo $__env->yieldContent('employer_job_posting'); ?>
    <?php echo $__env->yieldContent('employer_team_assesment'); ?>
    <?php echo $__env->yieldContent('applicant_review'); ?>
    <?php echo $__env->yieldContent('applicant_tracking'); ?>
    
 
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Aligned</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by Aligned
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/chart.js/chart.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/quill/quill.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/php-email-form/validate.js')); ?>"></script>

  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/chart1.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/chart2.js')); ?>"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\aligned_version_2\resources\views/master_layout/employer_master.blade.php ENDPATH**/ ?>