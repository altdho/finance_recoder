<?php /* C:\xampp\htdocs\FinancialRecord\resources\views/financial/create.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h3>New Finance</h3>
    </div>
  </div>
  <?php if(session('status')): ?>
  <div class="alert alert-success">
    <p><?php echo e(session('status')); ?></p>
  </div>
  <?php endif; ?>

  <form action="<?php echo e(route('financial.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="row">
      <div class="col-md-12">
        <strong>Nama :</strong>
        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
      </div>
      <div class="col-md-12">
        <strong>Keterangan :</strong>
          <textarea class="form-control" placeholder="Keterangan" name="katagori" required></textarea><br>
      </div>
      <div class="col-md-12">
        <strong>Total Harga :</strong>
          <input class="form-control" type="number" name="jumlah" required></textarea><br>
      </div>
      <div class="col-md-12">
        <a href="<?php echo e(route('financial.index')); ?>" class="btn btn-sm btn-success">Back</a>
        <button type="submit" class="btn btn-sm btn-primery">Submit</button>
      </div>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>