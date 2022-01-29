<?php $__env->startSection('page', 'splashscreen'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <figure class="logo d-flex align-items-center">
                <img src="<?php echo e(asset('img/logo.png')); ?>" alt="logo raffigurante un gatto sorridente" class="img-fluid" />
                <figcaption>lovepets</figcaption>
            </figure>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec
                tincidunt nisl, non
                vestibulum
                   tellus. Ut sodales tortor vel vestibulum aliquam. Maecenas in tempor risus. Maecenas non erat ac
                orci ornare scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="col-12 d-flex flex-column align-items-center">
            <a class="main-button big d-flex align-items-center justify-content-center">
                <img src="<?php echo e(asset('img/new-fill.svg')); ?>" alt="icona raffigurante un più" class="img-fluid">
                <p>Nuova segnalazione</p>
            </a>
            <p class="oppure">oppure</p>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <a class="main-button d-flex align-items-center justify-content-center">
                <img src="<?php echo e(asset('img/person-fill.svg')); ?>" alt="icona raffigurante una persona" class="img-fluid">
                <p>Login cittadino</p>
            </a>
        </div>
        <div class="col-6 d-flex justify-content-center">
            <a class="main-button d-flex align-items-center justify-content-center">
                <img src="<?php echo e(asset('img/briefcase-fill.svg')); ?>" alt="icona raffigurante una ventiquattro ore"
                     class="img-fluid">
                <p>Login associazione</p>
            </a>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <a href="#" class="registrati">Non sei ancora registrato? Clicca qui!</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\lovepets\resources\views/splashscreen.blade.php ENDPATH**/ ?>