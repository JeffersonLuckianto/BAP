<?php
use App\Models\Matakuliah;
?>


<?php $__env->startSection('title', 'Profil'); ?>
<?php $__env->startSection('content'); ?>
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA MAHASISWA</p>
    <div class="d-flex justify-content-center">
        <table style="width:70%; margin-bottom: 24px">
            <tr>
                <th>ID</th>
                <th>Kode Matakuliah</th>
                <th>Nama matakuliah</th>
                <th>SKS</th>
            </tr>
            <tr>
                <?php $__currentLoopData = $matakuliahs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <tr>
                        <td><?php echo e($matakuliah->id); ?></td>
                        <td><?php echo e($matakuliah->kode_matakuliah); ?></td>
                        <td><?php echo e($matakuliah->nama_matakuliah); ?></td>
                        <td><?php echo e($matakuliah->sks); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        th {
            border: 1px solid black;
            padding: 8px;
            font-weight: bold;
            text-align: center
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center
        }
        .bold-font {
            font-weight: bold;
        }
    </style>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\BAP\resources\views/matakuliah.blade.php ENDPATH**/ ?>