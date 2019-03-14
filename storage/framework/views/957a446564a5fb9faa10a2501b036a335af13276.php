<?php /* C:\xampp\htdocs\FinancialRecord\resources\views/financial/detail.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Detail Informasi</h3>
      <hr>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <strong>Nama :</strong> <?php echo e($financial->nama); ?>

      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <strong>Keterangan :</strong> <?php echo e($financial->katagori); ?>

      </div>
    </div>
    <div class="col-md-12">
      <a href="<?php echo e(route('financial.index')); ?>" class="btn btn-sm btn-success">Back</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>