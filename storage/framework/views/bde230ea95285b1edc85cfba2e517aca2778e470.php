<?php /* C:\xampp\htdocs\FinancialRecord\resources\views/financial/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

<div class="container">
  <div class="row">
    <div class="col-md-1-12">
      <h3>Your Finance</h3>
    </div>
    <div class="col-sm-2">
      <a class="btn btn-sm btn-success" href="<?php echo e(route('financial.create')); ?>">Create New Finance</a>
    </div>
  </div>

  <?php if(session('status')): ?>
  <div class="alert alert-success">
    <p><?php echo e(session('status')); ?></p>
  </div>
  <?php endif; ?>

  <table class="table table-hover table-sm">
    <tr>
      <th width = "50px"><b>No.</b></th>
      <th width = "200  px"><b>Nama</b></th>
      <th>Keterangan</th>
      <th width = "300px"><b>Total Harga</b></th>
      <th width = "300px"><b>Action</b></th>
    </tr>
  <?php $__currentLoopData = $financials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $financial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
      <td><b><?php echo e(++$i); ?>.</b></td>
      <td><b><?php echo e($financial->nama); ?></b></td>
      <td><b><?php echo e($financial->katagori); ?></b></td>
      <td><b><?php echo e($financial->jumlah); ?></b></td>
      <td>
        <a class="btn btn-sm btn-success" href="<?php echo e(route('financial.show', $financial->id)); ?>">Show</a>
        <a class="btn btn-sm btn-success" href="<?php echo e(route('financial.edit', $financial->id)); ?>">Edit</a>
        <form action="<?php echo e(route('financial.destroy', $financial->id)); ?>" method="post" style="display: inline-block;">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="submit" class="btn btn-sm btn-danger"  onclick="return confirm('Are you sure to delete this data from your list ?')">Delete</button>
        </form>
      </td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <?php echo e($financials->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>