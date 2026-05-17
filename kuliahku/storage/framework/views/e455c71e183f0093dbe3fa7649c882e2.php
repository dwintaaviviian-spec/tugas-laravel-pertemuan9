

<?php $__env->startSection('content'); ?>

<h2>
    Hasil Pencarian:
    <span class="text-danger"><?php echo e($keyword); ?></span>
</h2>

<div class="row mt-4">

<?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kategori): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-md-4 mb-4">

    <div class="card">

        <div class="card-body">

            <h4><?php echo e($kategori['nama']); ?></h4>

            <p><?php echo e($kategori['deskripsi']); ?></p>

            <span class="badge bg-success">
                <?php echo e($kategori['jumlah_buku']); ?> Buku
            </span>

        </div>

    </div>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\semester 4\matkul pemweb2\kuliah\kuliahku\resources\views/kategori/search.blade.php ENDPATH**/ ?>