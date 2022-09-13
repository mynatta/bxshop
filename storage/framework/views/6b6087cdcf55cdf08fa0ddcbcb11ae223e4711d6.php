
<?php $__env->startSection('title'); ?> BikeShop | รายการประเภทสินค้า <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>รายการประเภทสินค้า </h1>
    <div class="panel panel-default">
    <div class="panel-heading">
    <div class="panel-title"><strong>รายการ</strong></div>
</div>
<div class="panel-body">
    <form action="<?php echo e(URL::to('/category/search')); ?>" method="post" class="form-inline">
        <?php echo e(csrf_field()); ?>

        <input type="text" name="q" class="form-control" placeholder="พิมพ์รหัสหรือชื่อเพื่อค้นหา">
        <button type="submit" class="btn btn-primary">ค้นหา</button>
        <a href="<?php echo e(URL::to('/category/edit')); ?>" class="btn btn-success pull-right">เพิ่มประเภทสินค้า</a>
    </form>
    </div>
 
    <table class="table table-bordered bs-table">
    <thead>
    <tr>
    <th>รหัส </th>
    <th>ชื่อประเภท </th>
    <th>การทํางาน</th>
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        
   
        <td><?php echo e($c->id); ?></td>
        <td><?php echo e($c->name); ?></td>

        <td class="bs-center">
        <a href="<?php echo e(URL::to('category/edit/'.$c->id)); ?>"  class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข</a>
        <a href="#" class="btn btn-danger btn-delete" id-delete="<?php echo e($c->id); ?>" ><i class="fa fa-trash"></i> ลบ</a>
        </td>

        
        </tr> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>

        </tfoot>
    </table>
        <div class="panel-footer"><span>แสดงข้อมูลจํานวน <?php echo e(count($categories)); ?> รายการ</span>
        </div>
       
    </div>
    <script>
        // ใช้เทคนิค jQuery
        $('.btn-delete').on('click', function() { if(confirm("คุณต้องการลบข้อมูลสินค้าหรือไม่?")) {
        var url = "<?php echo e(URL::to('category/remove')); ?>"
        + '/' + $(this).attr('id-delete'); window.location.href = url;
        }
        });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\bikeshop\resources\views/category/index.blade.php ENDPATH**/ ?>