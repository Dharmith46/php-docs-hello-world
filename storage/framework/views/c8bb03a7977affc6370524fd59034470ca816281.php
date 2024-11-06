
<?php $__env->startSection('candidate_help'); ?>




<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="Logo" style="
                  max-height: 3rem;
                  height: auto;
                  margin-right: 0;
                  background: transparent;
                " /> </a>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="<?php echo e(route('candidate.all_jobs')); ?>"> Browse Jobs </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Help Center</a>
            </li>
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="assets/img/placeholder.jpg" alt="" class="rounded-circle" />
                    <span class="d-none d-md-block dropdown-toggle ps-2">Account</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('candidate_login_form')); ?>">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <span>Login</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <i class="bi bi-person-plus"></i>
                            <span>Sign-Up</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- End Icons Navigation -->
</header>
<!-- End Header -->


<header class="hero-section d-flex align-items-center justify-content-center text-center" style="height: 60vh;">
    <div class="hero-content">
        <h1 class="display-3 fw-bold">Help Center</h1>
        <p class="lead">Your go-to place for all questions and support.</p>
    </div>
</header>
<?php echo $__env->make('master_layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aligned\resources\views/candidate_help.blade.php ENDPATH**/ ?>