

<div class="d-flex">
    <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
    <a href="<?php echo e(route('barang.edit', ['list' => $list->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

    <div>
        <form action="<?php echo e(route('lists.destroy',
        ['list' => $list->id])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
        </form>
    </div>
</div>
</td>
<?php /**PATH C:\Users\Dell\masterBarangUts\resources\views/list/action.blade.php ENDPATH**/ ?>