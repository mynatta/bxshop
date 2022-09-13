
<?php $__env->startSection('title'); ?> BikeShop | รายการสินค้า <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container">
    <h1>เพิ่มข้อมูลสินค้า </h1>
    <ul class="breadcrumb">
        <li><a href="<?php echo e(URL::to('product')); ?>">หน้าแรก</a></li>
        <li class="active">เพิ่มสินค้า </li>
    </ul>
    
    <?php if($errors->any()): ?>
<div class="alert alert-danger">
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div><?php echo e($error); ?></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
        <?php echo Form::open(array('action' => 'App\Http\Controllers\ProductController@insert','method'=>'post', 'enctype' => 'multipart/form-data')); ?>

        <div class="panel panel-default">
            <div class="panel-heading">
            <div class="panel-title">
            <strong>ข้อมูลสินค้า </strong>
            </div>
            </div>
            <div class="panel-body">
        <table>
            <tr>
                <td><?php echo e(Form::label('code', 'รหัสสินค้า ')); ?></td>
                <td><?php echo e(Form::text('code', Request::old('code'), ['class' => 'form-control'])); ?></td>
            </tr>

            <tr>
                <td><?php echo e(Form::label('name', 'ชื่อสินค้า ')); ?></td>
                <td><?php echo e(Form::text('name', Request::old('name'), ['class' => 'form-control'])); ?></td>
                </tr>
                <tr>
                <td><?php echo e(Form::label('category_id', 'ประเภทสินค้า ')); ?></td>
                <td><?php echo e(Form::select('category_id', $categories, Request::old('category_id'),
                ['class' => 'form-control'])); ?></td>
                </tr>
                
                <tr>
                <td><?php echo e(Form::label('stock_qty', 'คงเหลือ')); ?></td>
                <td><?php echo e(Form::text('stock_qty', Request::old('stock_qty'), ['class' => 'form- control'])); ?></td>
                </tr>
                
                <tr>
                <td><?php echo e(Form::label('price', 'ราคาขายต่อหน่วย')); ?></td>
                <td><?php echo e(Form::text('price', Request::old('price'), ['class' => 'form-control'])); ?></td>
                </tr>
                <tr>
                    <td><?php echo e(Form::label('image', 'เลือกรูปภาพสินค้า ')); ?></td>
                    <td><?php echo e(Form::file('image')); ?></td>
                </tr>
        </table>
    </div>
    <div class="panel-footer">
        <a href="javascript:history.back()" type="reset" class="btn btn-danger" >ยกเลิก</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</button>
    </div>
    </div>
</div>
        <?php echo Form::close(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\bikeshop\resources\views/product/add.blade.php ENDPATH**/ ?>