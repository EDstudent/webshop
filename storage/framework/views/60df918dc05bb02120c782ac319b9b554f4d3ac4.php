<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('/users/update')); ?>" class='form-horizontal'>
            <table class="table table-hover">
            <tr class="toprow">
                <th></th>
                <th>User</th>
                <th>Email</th>
                <th>Role<th>
            </tr>
            <?php $i=1; $roles=array('none','admin','creator');?>
             <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><tr>
                <td><?php echo e($i++); ?></td>
             <td><?php echo e($user->name); ?> </td> 
             <td><?php echo e($user->email); ?> </td> 
             <td>
                <select name="role<?php echo e($user->id); ?>" class="form-control" id="role<?php echo e($user->id); ?>">
                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($r); ?> 
                            <?php if($r==$roles[$user->role-1]): ?> selected <?php endif; ?>
                            ><?php echo e($r); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                             </td>
                </tr><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            <?php echo csrf_field(); ?>
            <input class="btn right btn-a " type="submit" value="update">
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => 'Users'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\wamp64\www\myshop\resources\views/users.blade.php */ ?>