<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p>bienvenue <?php echo e(Auth::user()->name); ?></p>
                <p>Vous etes inscrit depuis : <?php echo e(Auth::user()->created_at->format('d/m/Y   h:i:s')); ?></p>
                </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                   <p>Vous etes connecté</p>

                        <a href="<?php echo e(url('/membre/membre')); ?>">
                            <button type="submit" class="btn btn-primary">
                            <?php echo e(__(' entrer')); ?>

                            </button>
                        </a>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>