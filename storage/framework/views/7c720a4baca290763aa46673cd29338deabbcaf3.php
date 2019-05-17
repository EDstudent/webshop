<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add a new event</div>
                <div class="card-body">
                    <?php echo Form::open(['action' => 'OffersController@store', 'files' => false, 'class' => 'form-horizontal']); ?>

                    <!--    auth save ??  -->
                    <div class="form-group row">
                    <?php echo Form::label('product', 'Product name', ['class' => 'col-md-4 control-label text-md-right']); ?>

                    <div class="col-md-6">
                    <?php echo Form::select('product', $name, '', ['class' => 'form-control']); ?>

                    </div>
                    </div>
                     <?php if($errors->has('product')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('product')); ?></strong>
                        </span>
                    <?php endif; ?> 
                    
                    <div class="form-group row">
                    <?php echo Form::label('price', 'Price of the product', ['class' => 'col-md-4 control-label text-md-right']); ?>

                    <div class="col-md-6">
                    <?php echo Form::text('price', '', ['class' => 'form-control']); ?>                     
                    </div></div>
                    
                    <div class="form-group row">
                    <?php echo Form::label('country', 'Country', ['class' => 'col-md-4 control-label text-md-right']); ?>

                    <div class="col-md-6">
                    <?php echo Form::text('country', '', ['class' => 'form-control']); ?>                  
                    </div>
                    </div>  
                    
                    <div class="form-group row">
                    <?php echo Form::label('description', 'Description', ['class' => 'col-md-4 control-label text-md-right']); ?>

                    <div class="col-md-6">
                    <?php echo Form::textArea('description', '', ['class' => 'form-control']); ?>                  
                    </div>
                    </div>                    
                    <?php echo Form::submit('submit data', ['class' => 'btn btn-primary']); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>