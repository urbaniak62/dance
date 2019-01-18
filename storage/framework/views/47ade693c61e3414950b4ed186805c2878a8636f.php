

<?php $__env->startSection('content'); ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('ADMINISTRATION : NOUVELLE VIDEO')); ?></div>

                    <div class="card-body">
                        <form method="POST"  enctype='multipart/form-data'>
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="groupes" required>groupe</label>
                                <select class="form-control <?php echo e($errors->has('groupes') ? ' is-invalid' : ''); ?>"  name="groupes" id="exampleFormControlSelect1" required>
                                <option>Groupe 1</option>
                                <option>Groupe 2</option>
                                </select>

                                <?php if($errors->has('groupes')): ?>
                                <p><?php echo e($errors->first('video')); ?></p>
                                <?php endif; ?>

                            </div>
                            <div class="form-group">
                                <label for="categories">Categorie dance</label>
                                <select class="form-control <?php echo e($errors->has('categories') ? ' is-invalid' : ''); ?>" name="categories"  id="exampleFormControlSelect1" required>
                                <option>rock 4 tps.</option>
                                <option>rock 6 tps.</option>
                                <option>rock swing.</option>
                                <option>Chacha.</option>
                                <option>Tango.</option>
                                <option>Pasodoble</option>
                                <option>foxtrot.</option>
                                <option>Rumba.</option>
                                <option>valse.</option>
                                <option>valse lente.</option>
                                <option>salsa.</option>
                                <option>samba.</option>

                            </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Importer une video.</label>
                                <input type="file" class="form-control-file <?php echo e($errors->has('videos') ? ' is-invalid' : ''); ?>" name="videos"id="exampleFormControlFile1" required>

                                <?php if($errors->has('videos')): ?>
                                    <p><?php echo e($errors->first('video')); ?></p>
                                <?php endif; ?>

                            </div>
                            <div class="form-group">
                                <label for="points_clef">Points clefs du cour.</label>
                                <textarea class="form-control <?php echo e($errors->has('points_clef') ? ' is-invalid' : ''); ?>" name="points_clef"  id="exampleFormControlTextarea1" rows="3"></textarea>

                                <?php if($errors->has('points_clef')): ?>
                                    <p style="color:red;font-weight:bold;" >ce champs doit contenir minimum 10 caractere</p>
                                <?php endif; ?>

                                </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>