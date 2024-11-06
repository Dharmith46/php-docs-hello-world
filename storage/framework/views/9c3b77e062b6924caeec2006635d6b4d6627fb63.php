
<?php $__env->startSection('all_jobs'); ?>


<style>
    .sidebar {
        position: fixed;
        /* Sidebar stays fixed in place */
        top: 100px;
        /* Adjust based on the height of your navbar */
        bottom: 60px;
        /* Stop at the bottom of the viewport */


        overflow-y: auto;
        /* Scrollable if content exceeds sidebar height */
        z-index: 99;
        /* Ensures it's below the navbar but above other elements */
    }

    .card-title {
        padding: 0;
    }

    .job-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .card {
        flex: 1;
        /* Allow card to grow and fill the height */
        display: flex;
        flex-direction: column;
        /* Stack children vertically within the card */
        border: 1px solid #e0e0e0;
        /* Optional: Add a border for visibility */
        border-radius: 0.25rem;
        /* Optional: Rounded corners */
        transition: box-shadow 0.3s ease;
        /* Optional: Smooth shadow transition */
        min-height: 320px;
        /* Set a minimum height for cards */
        max-height: 400px;
        /* Optional: Set a maximum height for cards */
        margin: 1rem;
        /* Add spacing between cards */
        overflow: hidden;
        /* Prevent overflow of content */
    }

    .card:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        /* Optional: Add shadow on hover */
    }

    .card-body {
        flex: 1;
        /* Allow card body to grow and fill the available space */
        display: flex;
        flex-direction: column;
        /* Stack children vertically */
    }


    .bg-light-blue {
        background-color: #add8e6;
        /* Light blue color */
    }

    #right-container {
        transition: top 0.3s ease, width 0.3s ease;
        /* Smooth transition for the sticky effect */
        position: relative;
        /* Start in relative position */
    }

    /* Popup Styles */
    #job-details-modal {
        display: none;
        /* Initially hidden */
        position: fixed;
        /* Stay in place */
        z-index: 1000;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: hidden;
        /* Hide overflow */
        background-color: rgba(0,
                0,
                0,
                0.5);
        /* Black background with opacity */
    }

    .modal-content {
        position: absolute;
        /* Positioned relative to the modal */
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        /* Responsive width */
        max-height: 80%;
        /* Limit height */
        overflow-y: auto;
        /* Scrollable if content is too tall */
        background-color: #fff;
        /* White background */
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        /* Shadow */
    }

    .modal-header {
        display: sticky;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa;
        /* Background color for the header */
        padding: 15px;
        /* Uniform padding for header content */
        width: 100%;
        /* Ensure header spans the full width */
        box-sizing: border-box;
        /* Include padding in width calculation */
    }

    /* Add padding to the modal body */
    .modal-body {
        padding: 20px;
        /* Inner spacing for modal body */
    }

    .btn-apply,
    .btn-save {
        margin-left: 10px;
    }

    .title-font {
        font-weight: bold;
        color: #2e65af;
    }
</style>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <i class="bi bi-list toggle-sidebar-btn ms-0 me-3"></i>

    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="" />
            <span class="d-none d-lg-block">ALIGN</span>
        </a>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('landing.page')); ?>">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active text-dark" href="#"> Browse Jobs </a>
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

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-heading text-center mb-2">Job Filters</li>

        <li class="nav-item">
            <input type="text" id="search-filters" class="form-control" placeholder="Search Filters..." />
        </li>

        <!-- Dropdown for Contract -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#contract-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-funnel"></i><span>Contract</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="contract-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="full-time" value="full-time" />
                        <label class="form-check-label" for="full-time">Full-Time</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="part-time" value="part-time" />
                        <label class="form-check-label" for="part-time">Part-Time</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fixed-term-contract"
                            value="fixed-term-contract" />
                        <label class="form-check-label" for="fixed-term-contract">Fixed-Term Contract</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remote" value="remote" />
                        <label class="form-check-label" for="remote">Remote</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hybrid" value="hybrid" />
                        <label class="form-check-label" for="hybrid">Hybrid</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="on-site" value="on-site" />
                        <label class="form-check-label" for="on-site">On-Site</label>
                    </div>
                </li>
            </ul>
        </li>
        <!-- End Job Type Dropdown -->

        <!-- Seniority Dropdown -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#seniority-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-briefcase"></i><span>Seniority</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="seniority-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="entry" id="seniority-entry" />
                        <label class="form-check-label" for="seniority-entry">
                            Entry Level
                        </label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="mid" id="seniority-mid" />
                        <label class="form-check-label" for="seniority-mid">
                            Mid Level
                        </label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="senior" id="seniority-senior" />
                        <label class="form-check-label" for="seniority-senior">
                            Senior Level
                        </label>
                    </div>
                </li>
            </ul>
        </li>
        <!-- End of Seniority Dropdown -->

        <!-- Dropdown for Location -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#location-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-geo-alt"></i><span>Location</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="location-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <input type="text" id="search-location" class="form-control" placeholder="Search Location..." />
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="london" value="london" />
                        <label class="form-check-label" for="london">London</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="coventry" value="coventry" />
                        <label class="form-check-label" for="coventry">Coventry</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="edinburgh" value="edinburgh" />
                        <label class="form-check-label" for="edinburgh">Edinburgh</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ireland" value="ireland" />
                        <label class="form-check-label" for="ireland">Ireland</label>
                    </div>
                </li>
            </ul>
        </li>
        <!-- End Location Dropdown -->

        <!-- Dropdown for Pay Range -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#pay-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-cash"></i><span>Pay Range</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="pay-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="below-50k" value="below-50k" />
                        <label class="form-check-label" for="below-50k">Below £50k</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="50k-70k" value="50k-70k" />
                        <label class="form-check-label" for="50k-70k">£50k - £70k</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="70k-100k" value="70k-100k" />
                        <label class="form-check-label" for="70k-100k">£70k - £100k</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="above-100k" value="above-100k" />
                        <label class="form-check-label" for="above-100k">Above £100k</label>
                    </div>
                </li>
            </ul>
        </li>
        <!-- End Pay Range Dropdown -->

        <!-- Dropdown for Skills -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#skills-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-star"></i><span>Skills Required</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="skills-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li class="nav-item">
                    <input type="text" id="search-skills" class="form-control" placeholder="Search Skills..." />
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="sws" value="aws" />
                        <label class="form-check-label" for="aws">AWS</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="azure" value="azure" />
                        <label class="form-check-label" for="azure">Azure</label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="java" value="java" />
                        <label class="form-check-label" for="java">Java</label>
                    </div>
                </li>
            </ul>
        </li>
        <!-- Sponsorship Dropdown -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#sponsorship-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-passport"></i><span>Sponsorship</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="sponsorship-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="yes" id="yes" />
                        <label class="form-check-label" for="yes"> Yes </label>
                    </div>
                </li>
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="no" id="no" />
                        <label class="form-check-label" for="no"> No </label>
                    </div>
                </li>
            </ul>
        </li>
        <!-- End of Sponsorship Dropdown -->
    </ul>
</aside>
<!-- End Sidebar-->

<main id="main" class="main">
    <div class="d-flex justify-content-center">
        <div class="input-group w-75 mt-0 mx-auto">
            <!-- Search Jobs Input with Magnifier Icon -->
            <span class="input-group-text bg-white border-0">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-0" placeholder="Search jobs..." aria-label="Search jobs" />
            <span class="input-group-text bg-white border-0">
                <i class="bi bi-geo-alt"></i>
            </span>
            <input type="text" class="form-control border-0" placeholder="Location..." aria-label="Location" />
            <button class="btn btn-primary" type="button">Find Jobs</button>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <!-- Job Card 1 -->
            <div class="col-md-4 job-card mb-3" data-title="Software Engineer" data-location="New York, NY"
                data-type="Full-Time" data-company="X Corp." data-experience="Mid-Level"
                data-salary="£80,000 - £100,000"
                data-description="Lorem ipsum dolor sit amet cons       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            ectetur adipisicing elit. Natus laudantium neque earum, suscipit quo illum dolores obcaecati architecto? Animi, praesentium?"
                data-requirements="Requirement 1, Requirement 2, Requirement 3"
                data-benefits="Benefit 1, Benefit 2, Benefit 3">
                <div class="card flex-fill" onclick="showJobDetails(event)">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/images/xlogo.png" alt="" class="img-fluid" style="
                        width: 20px;
                        height: auto;
                        object-fit: cover;
                        border-radius: 5px;
                      " />
                                <h6 class="ms-2 mb-0">X Corp.</h6>
                            </div>
                        </div>
                        <h5 class="card-title mt-2 mb-2">Software Engineer</h5>
                        <p class="card-text text-muted mb-0">
                            <i class="bi bi-geo-alt"></i>
                            <span class="location-text">New York, NY</span>
                            <span class="mx-1">|</span>
                            <span>Remote</span>
                        </p>
                        <p class="card-text text-muted mb-0 mt-1">
                            <i class="bi bi-cash"></i>
                            <span class="salary-text">£80,000 - £100,000</span>
                        </p>
                        <div class="d-flex justify-content-start align-items-center mt-1">
                            <span class="badge bg-light-blue text-dark d-flex align-items-center me-2">
                                <i class="bi bi-star me-1"></i>
                                <span class="experience-text text-muted">Mid-Level</span>
                            </span>
                            <span class="me-1">|</span>
                            <span class="badge bg-light-blue text-dark d-flex align-items-center me-1">
                                <i class="bi bi-briefcase me-1"></i>
                                <span class="job-type-text text-muted">Full-Time</span>
                            </span>
                        </div>
                        <p class="card-text mt-3 mb-1">
                            <!-- Shortened Description -->
                            <span class="description-text" id="description1">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Natus laudantium neque earum, suscipit quo illum
                                dolores...</span>
                            <span id="read-more1" class="text-primary" style="cursor: pointer; display: none"
                                onclick="showFullDescription('description1', 'read-more1', 'Software Engineer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laudantium neque earum, suscipit quo illum dolores obcaecati architecto? Animi, praesentium?')">
                                Read more</span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Job Card 1 End -->

            <!-- Job Card 2 -->
            <div class="col-md-4 job-card mb-3" data-title="Cloud Engineer" data-location="London, LDN"
                data-type="Full-Time" data-company="HSBC" data-experience="Mid-Level" data-salary="£50,000 - £80,000"
                data-description="Lorem ipsum dolor sit amet consectetur adipisi       Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            cing elit. Delectus ab accusamus repellat corrupti quidem, dignissimos aspernatur placeat laboriosam mollitia inventore."
                data-requirements="Requirement 1, Requirement 2, Requirement 3"
                data-benefits="Benefit 1, Benefit 2, Benefit 3">
                <div class="card flex-fill" onclick="showJobDetails(event)">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/images/hsbclogo.png" alt="" class="img-fluid" style="
                        width: 30px;
                        height: auto;
                        object-fit: cover;
                        border-radius: 5px;
                      " />
                                <h6 class="mb-0">HSBC</h6>
                            </div>
                        </div>
                        <h5 class="card-title mt-2 mb-2">Cloud Engineer</h5>
                        <p class="card-text text-muted mb-0">
                            <i class="bi bi-geo-alt"></i>
                            <span class="location-text">London, LDN</span>
                            <span class="mx-1">|</span>
                            <span>Remote</span>
                        </p>
                        <p class="card-text text-muted mb-0 mt-1">
                            <i class="bi bi-cash"></i>
                            <span class="salary-text">£50,000 - £80,000</span>
                        </p>
                        <div class="d-flex justify-content-start align-items-center mt-1">
                            <span class="badge bg-light-blue text-dark d-flex align-items-center me-2">
                                <i class="bi bi-star me-1"></i>
                                <span class="experience-text text-muted">Senior-Level</span>
                            </span>
                            <span class="me-1">|</span>
                            <span class="badge bg-light-blue text-dark d-flex align-items-center me-1">
                                <i class="bi bi-briefcase me-1"></i>
                                <span class="job-type-text text-muted">Full-Time</span>
                            </span>
                        </div>
                        <p class="card-text mt-3 mb-1">
                            <!-- Shortened Description -->
                            <span class="description-text" id="description2">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Delectus ab accusamus...</span>
                            <span id="read-more2" class="text-primary" style="cursor: pointer; display: none"
                                onclick="showFullDescription('description2', 'read-more2', 'Cloud Engineer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ab accusamus repellat corrupti quidem, dignissimos aspernatur placeat laboriosam mollitia inventore.')">
                                Read more</span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Job Card 2 End -->

            <!-- Job Card 3 -->
            <div class="col-md-4 job-card mb-3" data-title="Data Scientist" data-location="Coventry, CV"
                data-type="Part-Time" data-company="JLR" data-experience="Junior-Level" data-salary="£30,000 - £45,000"
                data-description="Lorem ipsum dolor sit amet consectetur        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?
            adipisicing elit. Natus laudantium neque earum, suscipit quo illum dolores obcaecati architecto? Animi, praesentium?"
                data-requirements="Requirement 1, Requirement 2, Requirement 3"
                data-benefits="Benefit 1, Benefit 2, Benefit 3">
                <div class="card flex-fill" onclick="showJobDetails(event)">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
                            <div class="d-flex align-items-center">
                                <img src="assets/img/images/jlrlogo.png" alt="" class="img-fluid" style="
                        width: 30px;
                        height: auto;
                        object-fit: cover;
                        border-radius: 5px;
                      " />
                                <h6 class="mb-0">JLR</h6>
                            </div>
                        </div>
                        <h5 class="card-title mt-2 mb-2">Data Scientist</h5>
                        <p class="card-text text-muted mb-0">
                            <i class="bi bi-geo-alt"></i>
                            <span class="location-text">Coventry, CV</span>
                            <span class="mx-1">|</span>
                            <span>Remote</span>
                        </p>
                        <p class="card-text text-muted mb-0 mt-1">
                            <i class="bi bi-cash"></i>
                            <span class="salary-text">£30,000 - £45,000</span>
                        </p>
                        <div class="d-flex justify-content-start align-items-center mt-1">
                            <span class="badge bg-light-blue text-dark d-flex align-items-center me-2">
                                <i class="bi bi-star me-1"></i>
                                <span class="experience-text text-muted">Junior-Level</span>
                            </span>
                            <span class="me-1">|</span>
                            <span class="badge bg-light-blue text-dark d-flex align-items-center me-1">
                                <i class="bi bi-briefcase me-1"></i>
                                <span class="job-type-text text-muted">Part-Time</span>
                            </span>
                        </div>
                        <p class="card-text mt-3 mb-1">
                            <!-- Shortened Description -->
                            <span class="description-text" id="description3">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Natus laudantium neque earum...</span>
                            <span id="read-more3" class="text-primary" style="cursor: pointer; display: none"
                                onclick="showFullDescription('description3', 'read-more3', 'Data Scientist', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laudantium neque earum, suscipit quo illum dolores obcaecati architecto? Animi,        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae ipsam nam magni possimus eaque pariatur porro eos nisi adipisci voluptatibus quaerat perspiciatis earum minima et totam excepturi iste repellendus similique quisquam suscipit, asperiores odit neque modi? Obcaecati nam velit voluptates, atque facere minima incidunt autem sequi mollitia, corrupti quisquam doloremque?praesentium?')">
                                Read more</span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Job Card 3 End -->
        </div>
    </div>

    <!-- Job Details Modal -->
    <div id="job-details-modal">
        <div class="modal-content">
            <!-- Header Section -->
            <div class="modal-header sticky-top bg-light w-100 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="" alt="Logo" class="img-fluid me-2" style="width: 40px; height: auto" id="modal-logo" />
                    <div>
                        <p class="text-muted mb-0" id="job-company-name"></p>
                        <h5 class="modal-title mb-0 title-font" id="job-title">
                            <strong></strong>
                        </h5>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn btn-success btn-apply me-2">
                        <i class="bi bi-check-circle"></i> Apply
                    </button>
                    <button class="btn btn-light btn-save me-2">
                        <i class="bi bi-heart"></i> Save
                    </button>
                </div>
            </div>

            <!-- Location and Remote Status -->
            <div class="modal-subtitle mb-2 ms-3 mt-2 text-muted d-flex justify-content-start">
                <i class="bi bi-geo-alt me-2"></i>
                <span id="job-location"></span>

                <span class="mx-1">|</span>

                <i class="bi bi-laptop me-2"></i>
                <span>Remote</span>
            </div>

            <!-- Experience Level and Job Type -->
            <div class="d-flex justify-content-between ms-3 mb-2">
                <div>
                    <div>
                        <!-- Experience Icon -->
                        <i class="bi bi-star"></i>
                        <span class="text-muted" id="job-experience"></span>

                        <span class="mx-1">|</span>

                        <!-- Job Type Icon -->
                        <i class="bi bi-briefcase"></i>
                        <span class="text-muted" id="job-type"></span>
                    </div>
                </div>
            </div>
            <div class="d-flex ms-3">
                <i class="bi bi-cash me-2"></i>
                <span class="text-muted" id="job-salary"></span>
            </div>

            <!-- Body Section -->
            <div class="modal-body">
                <hr class="mb-3 mt-0" />
                <!-- Add a horizontal line -->

                <p class="modal-text">
                    <strong> Description:</strong>
                    <span id="job-description"></span>
                </p>
                <p class="modal-text">
                    <strong>Requirements:</strong> <span id="job-requirements"></span>
                </p>
                <p class="modal-text">
                    <strong>Benefits:</strong> <span id="job-benefits"></span>
                </p>
                <p class="modal-text">
                    <strong>About Us:</strong> <span id="job-aboutus"></span>
                </p>
                <p class="modal-text">
                    <strong>Application Deadline:</strong>
                    <span id="job-deadline"></span>
                </p>
                <p class="modal-text">
                    <strong>Visa Sponsorship:</strong>
                    <span id="job-sponsorship"></span>
                </p>
            </div>
        </div>
    </div>
</main>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>




<script>
    function showJobDetails(event) {
        const jobCard = event.currentTarget.closest(".job-card");
        const title = jobCard.getAttribute("data-title");
        const location = jobCard.getAttribute("data-location");
        const type = jobCard.getAttribute("data-type");
        const company = jobCard.getAttribute("data-company");
        const experience = jobCard.getAttribute("data-experience");
        const salary = jobCard.getAttribute("data-salary");
        const description = jobCard.getAttribute("data-description");
        const requirements = jobCard.getAttribute("data-requirements");
        const benefits = jobCard.getAttribute("data-benefits");
        const logo = jobCard.querySelector("img").src; // Get logo from job card

        document.getElementById("modal-logo").src = logo; // Set logo in modal
        document.getElementById("job-title").innerText = title;
        document.getElementById("job-location").innerText = location;
        document.getElementById("job-type").innerText = type;
        document.getElementById("job-experience").innerText = experience;
        document.getElementById("job-salary").innerText = salary;
        document.getElementById("job-description").innerText = description;
        document.getElementById("job-requirements").innerText = requirements;
        document.getElementById("job-benefits").innerText = benefits;
        document.getElementById("job-company-name").innerText = company;

        // Show job details modal
        document.getElementById("job-details-modal").style.display = "block";
    }

    function hideJobDetails() {
        // Hide job details modal
        document.getElementById("job-details-modal").style.display = "none";
    }

    // Close modal on clicking outside of modal content
    window.onclick = function (event) {
        const modal = document.getElementById("job-details-modal");
        if (event.target == modal) {
            hideJobDetails();
        }
    };

    // Function to show full description on read more click
    function showFullDescription(
        descriptionId,
        readMoreId,
        title,
        fullDescription
    ) {
        document.getElementById(descriptionId).innerText = fullDescription;
        document.getElementById(readMoreId).style.display = "none"; // Hide "Read more"
        document.getElementById(descriptionId).style.cursor = "default"; // Disable cursor change
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master_layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aligned\resources\views/candidate/all_jobs.blade.php ENDPATH**/ ?>