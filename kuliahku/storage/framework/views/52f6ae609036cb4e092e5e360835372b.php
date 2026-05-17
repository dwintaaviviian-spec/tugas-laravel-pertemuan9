

<?php $__env->startSection('content'); ?>

<h2 class="mb-4">Daftar Anggota Perpustakaan</h2>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Kode Anggota</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $__currentLoopData = $anggota_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($anggota['kode']); ?></td>
            <td><?php echo e($anggota['nama']); ?></td>
            <td><?php echo e($anggota['email']); ?></td>
            <td>
                <span class="badge bg-success">
                    <?php echo e($anggota['status']); ?>

                </span>
            </td>
            <td>
                <a href="<?php echo e(route('anggota.show', $anggota['id'])); ?>"
                   class="btn btn-primary btn-sm">
                   Detail
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\semester 4\matkul pemweb2\kuliah\kuliahku\resources\views/anggota/index.blade.php ENDPATH**/ ?>