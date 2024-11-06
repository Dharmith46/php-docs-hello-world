
<?php $__env->startSection('landing'); ?>




   <!-- Hero Section -->
   <h2>Employer Landing Page</h2>
   <div class="hero-section px-4 py-5">
    <h1 class="display-5 fw-bold">TRANSFORMING YOUR HIRING EXPERIENCE!</h1>
  </div>
  <a href="<?php echo e(route('login_form')); ?>" class="btn btn-primary">Login</a>

  <!-- START THE FEATURETTES -->

  <div class="featurette-divider"></div>

  <div class="row featurette section-one">
    <div class="col-md-7">
      <h2 class="featurette-heading">Objective Hiring</h2>
      <p class="lead">
        Our platform ensures your hiring process is free from unconscious
        biases, providing a fair opportunity for every candidate.
      </p>
    </div>
    <div class="col-md-5">
      <img
        src="assets/img/objective.jpg"
        alt="Objective Hiring"
        class="featurette-image img-fluid mx-auto"
      />
    </div>
  </div>

  <div class="featurette-divider"></div>

  <div class="row featurette section-two">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Diverse Talent Pool</h2>
      <p class="lead">
        Unlock opportunities to explore candidates from various industries and
        prevent skills shortages. Our platform broadens your talent horizon,
        allowing you to tap into a diverse and skilled workforce.
      </p>
    </div>
    <div class="col-md-5 order-md-1">
      <img
        src="assets/img/diverse.jpg"
        alt="Diverse Talent Pools"
        class="featurette-image img-fluid mx-auto"
      />
    </div>
  </div>

  <div class="featurette-divider"></div>

  <div class="row featurette section-three">
    <div class="col-md-7">
      <h2 class="featurette-heading">Save Time, Hire Smarter</h2>
      <p class="lead">
        Streamline your hiring process, reduce time-to-hire, and minimize
        costly errors.
      </p>
    </div>
    <div class="col-md-5">
      <img
        src="assets/img/savetime.jpg"
        alt="Save Time, Hire Smarter"
        class="featurette-image img-fluid mx-auto"
      />
    </div>
  </div>

  <div class="featurette-divider"></div>

  <!-- /END THE FEATURETTES -->

  <!-- New Card Section -->
  <section class="card-section">
    <h1>READY TO TRANSFORM YOUR RECRUITMENT STRATEGY?</h1>

    <h3>HOW IT WORKS?</h3>
    <div class="container">
      <div class="row centered-row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="features-icon mb-3">
              <i class="bi bi-1-circle-fill"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Job Posting</h5>
              <p class="card-text">
                Create job postings with ease, showcasing the essence of the
                role, required skills, and team values.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="features-icon mb-3">
              <i class="bi bi-2-circle-fill"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Candidate Applications</h5>
              <p class="card-text">
                Receive applications filtered based on assessments, ensuring
                you connect with candidates who align.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="features-icon mb-3">
              <i class="bi bi-3-circle-fill"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Comprehensive Reports</h5>
              <p class="card-text">
                Dive into detailed candidate reports to make informed hiring
                decisions.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="features-icon mb-3">
              <i class="bi bi-4-circle-fill"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Talent Search</h5>
              <p class="card-text">
                Proactively build a talent pool by searching for passive
                candidates based on their skills, behaviors, and values.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="features-icon mb-3">
              <i class="bi bi-5-circle-fill"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title">Interview Tracking</h5>
              <p class="card-text">
                Streamline your interview process by scheduling and tracking
                candidate progress directly through the platform.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 1 - Request a Demo -->
  <section id="request-demo" class="section card-section">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-md-6 d-flex align-items-center form-card-left">
          <div class="content">
            <h1>REQUEST A DEMO</h1>
            <p>
              Discover how Aligned can transform your hiring process. Request
              a demo today to see our advanced recruitment technology in
              action and learn how our data-driven assessments can help you
              streamline hiring, reduce time-to-hire, and connect with top
              talent more effectively. Experience firsthand how Aligned makes
              hiring smarter and more efficient.
            </p>
          </div>
        </div>
        <div class="col-md-6 form-card-right demo-form">
          <form>
            <input type="text" placeholder="Full Name" required />
            <input type="email" placeholder="Email" required />
            <input type="text" placeholder="Company" />
            <input type="text" placeholder="Job Title" />
            <textarea placeholder="Message" rows="3"></textarea>
            <label for="terms-checkbox-demo">
              <input type="checkbox" id="terms-checkbox-demo" required />
              I agree to the <a href="#">Terms & Conditions</a> &
              <a href="#">Privacy Policy</a>
            </label>
            <button type="submit">Request a Demo</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 2 - Call to Action (CTA) -->
  <section class="cta-section text-center">
    <div class="container">
      <h1>Lorem ipsum dolor sit amet.</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus,
        nihil sequi cumque impedit nulla tenetur, eum repellat odit similique
        nesciunt praesentium ipsam, magni sit dolorum doloremque aliquam
        voluptate modi ducimus.
      </p>
      <h3>Lorem, ipsum dolor.</h3>
    </div>
  </section>

  <!-- Section 3 - Register -->
  <section id="register" class="section card-section">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-md-6 d-flex align-items-center form-card-left">
          <div class="content">
            <h1>READY TO JOIN US?</h1>
            <p>
              Ready to revolutionize your hiring process? Register with
              Aligned to start leveraging our advanced technology and
              data-driven assessments.
            </p>
          </div>
        </div>
        <div class="col-md-6 form-card-right register-form">
          <form>
            <input type="text" placeholder="Full Name" required />
            <input type="email" placeholder="Email" required />
            <input type="password" placeholder="Password" required />
            <input type="password" placeholder="Confirm Password" required />
            <label for="terms-checkbox-register" class="form-check-inline">
              <input type="checkbox" id="terms-checkbox-register" required />
              I agree to the <a href="#">Terms & Conditions</a> &
              <a href="#">Privacy Policy</a>
            </label>
            <button type="submit">Register</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="newsletter-section text-center p-5">
    <div class="container">
      <h2>Subscribe to Our Newsletter</h2>
      <p>Get the latest updates directly to your inbox.</p>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div
            class="newsletter-form d-flex flex-column flex-lg-row align-items-center"
          >
            <input
              type="email"
              class="form-control me-lg-2 mb-2 mb-lg-0 email-input"
              placeholder="Enter your email"
            />
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Footer -->
  <footer class="bg-light text-center py-5">
    <div class="container">
      <div class="row">
        <!-- Left Side -->
        <div class="col-md-4 d-flex flex-column align-items-center mb-4">
          <a
            href="https://landingpage.idrisforid.com/index.html"
            class="footer-logo-link d-flex align-items-center mb-3"
          >
            <img src="assets/img/logo.png" alt="Logo" class="footer-logo" />
            <span class="brand-name">ALIGN</span>
          </a>
          <p class="footer-description">
            Aligned revolutionizes recruitment with advanced technology and
            data-driven assessments, helping companies streamline hiring and
            build diverse, high-performing teams efficiently.
          </p>
        </div>
        <!-- Middle Side -->
        <div class="col-md-4 mb-4">
          <h5>Quick Links</h5>
          <ul class="list-unstyled">
            <li>
              <a href="https://landingpage.idrisforid.com/index.html">Home</a>
            </li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="employerhelpcenter.html">Help Center</a></li>
          </ul>
        </div>
        <!-- Right Side -->
        <div class="col-md-4 mb-4">
          <h5>Legal</h5>
          <ul class="list-unstyled">
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="privacy.html">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>



<?php $__env->stopSection(); ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      const requestDemoBtn = document.getElementById("requestDemoBtn");
      const registerBtn = document.getElementById("registerBtn");
      const requestDemoSection = document.getElementById("request-demo");
      const registerSection = document.getElementById("register");

      // Smooth scroll to Request a Demo section
      requestDemoBtn.addEventListener("click", function () {
        const headerOffset = document.querySelector(".header").offsetHeight;
        const elementPosition =
          requestDemoSection.getBoundingClientRect().top;
        const offsetPosition =
          elementPosition + window.scrollY - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      });

      // Smooth scroll to Register section
      registerBtn.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default action
        const headerOffset = document.querySelector(".header").offsetHeight;
        const elementPosition = registerSection.getBoundingClientRect().top;
        const offsetPosition =
          elementPosition + window.scrollY - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      });
    });
  </script>
<?php echo $__env->make('master_layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aligned\resources\views/employer/landing.blade.php ENDPATH**/ ?>