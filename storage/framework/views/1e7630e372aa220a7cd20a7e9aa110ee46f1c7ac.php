
<?php $__env->startSection('title'); ?> BikeShop | แก้ไขข้อมูลประเภทสินค้า <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1> แก้ไขประเภทสินค้า </h1>

            <ul class="breadcrumb">
                <li><a href="<?php echo e(URL::to('product')); ?>"> หน้าแรก </a></li>
                <li class="active"> แก้ไขประเภทสินค้า </li>
            </ul>

            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div> <?php echo e($error); ?> </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>

        </div>
        <?php echo Form::model($category, array('action' => 'App\Http\Controllers\CategoryController@update', 'method' => 'post', 'enctype' => 'multipart/form-data')); ?>

        <input type="hidden" name="id" value="<?php echo e($category->id); ?>">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">
                    <strong> ข้อมูลประเภทสินค้า </strong>
                </div>
            </div>
            <div class="panel-body">
                <table>
                    <tr>
                        <td><?php echo e(Form::label('name', 'ชื่อประเภทสินค้า')); ?></td>
                        <td><?php echo e(Form::text('name', $category->name, ['class' => 'form-control'])); ?></td>
                    </tr>
                </table>
            </div>
            <div class="panel-footer">
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</button>
            </div>
        </div>
        <?php echo Form::close(); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\bikeshop\resources\views/category/edit.blade.php ENDPATH**/ ?>