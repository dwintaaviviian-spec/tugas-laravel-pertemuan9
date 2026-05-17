

<?php $__env->startSection('content'); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(route('kategori.index')); ?>">
                Kategori
            </a>
        </li>

        <li class="breadcrumb-item active">
            Detail
        </li>
    </ol>
</nav>

<div class="card mb-4">
    <div class="card-body">

        <h3><?php echo e($kategori['nama']); ?></h3>

        <p><?php echo e($kategori['deskripsi']); ?></p>

        <span class="badge bg-primary">
            <?php echo e($kategori['jumlah_buku']); ?> Buku
        </span>

    </div>
</div>

<h4>Daftar Buku</h4>

<table class="table table-bordered">

    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
        </tr>
    </thead>

    <tbody>

        <?php $__currentLoopData = $buku_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($buku['judul']); ?></td>
            <td><?php echo e($buku['penulis']); ?></td>
            <td><?php echo e($buku['tahun']); ?></td>
        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\semester 4\matkul pemweb2\kuliah\kuliahku\resources\views/kategori/show.blade.php ENDPATH**/ ?>