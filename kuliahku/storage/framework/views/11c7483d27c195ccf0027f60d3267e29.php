

<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header bg-primary text-white">
        Detail Anggota
    </div>

    <div class="card-body">

        <p><strong>Kode Anggota:</strong> <?php echo e($anggota['kode']); ?></p>

        <p><strong>Nama Lengkap:</strong> <?php echo e($anggota['nama']); ?></p>

        <p><strong>Email:</strong> <?php echo e($anggota['email']); ?></p>

        <p><strong>Telepon:</strong> <?php echo e($anggota['telepon']); ?></p>

        <p><strong>Alamat:</strong> <?php echo e($anggota['alamat']); ?></p>

        <p>
            <strong>Status:</strong>

            <span class="badge bg-success">
                <?php echo e($anggota['status']); ?>

            </span>
        </p>

        <a href="<?php echo e(route('anggota.index')); ?>"
           class="btn btn-secondary">
           Kembali
        </a>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\semester 4\matkul pemweb2\kuliah\kuliahku\resources\views/anggota/show.blade.php ENDPATH**/ ?>