
<?php $__env->startSection('candidate_login'); ?>


<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row justify-content-center w-100">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card">
                <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="Logo" class="logo">
                <div class="card-body">
                    <h5 class="card-title text-center">Candidate Login</h5>
                    <?php if(Session::has('error')): ?>
                    <strong><?php echo e(session::get('error')); ?></strong>
                    <?php endif; ?>
                    
                    <form  action="<?php echo e(route('candidate.login')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="text" class="form-control"  name="email" placeholder="Enter your username" required>
                        </div>
                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control"  name="password" placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4 w-100">Login</button>
                    </form>
                    <a href="register.html" class="register-link">New user? Create an account</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master_layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aligned_version_2\resources\views/candidate/candidate_login.blade.php ENDPATH**/ ?>