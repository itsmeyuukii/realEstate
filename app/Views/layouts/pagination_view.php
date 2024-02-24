<link rel="stylesheet" href="<?= base_url('theme/css/theme.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="<?= base_url('theme/vendors/fontawesome-pro-5/css/all.css'); ?>">
<?= $this->include("layouts/svg") ?>

<!-- Limit to 3 Links each side of the current page -->
<?php $pager->setSurroundCount(2)  ?>
<!-- END-->
 
<div class="mt-6">
    <!-- Pagination -->
     <ul class="pagination rounded-active justify-content-center">
            <!-- Previous and First Links if available -->
            <?php if($pager->hasPrevious()): ?>
                <li class="page-item">
                    <a href="<?= $pager->getFirst() ?>" class="page-link" aria-label="<?= lang('Pager.first') ?>">
                    <i class="far fa-angle-double-left"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a href="<?= $pager->getPrevious() ?>" class="page-link" aria-label="<?= lang('Pager.previous') ?>">
                        <i class="far fa-angle-left"></i>
                    </a>
                </li>
            <?php endif; ?>
            <!-- End of Previous and First -->
 
            <!-- Page Links -->
            <?php foreach ($pager->links() as $link) : ?>
                <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
                
                    <a href="<?= $link['uri'] ?>" class="page-link"><?= $link['title'] ?></a>
                </li>
            <?php endforeach ?>
            <!-- End of Page Links -->
 
            <!-- Next and Last Page -->
            <?php if($pager->hasNext()): ?>
                <li class="page-item">
                    <a href="<?= $pager->getNext() ?>" class="page-link">
                        <i class="far fa-angle-right"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a href="<?= $pager->getLast() ?>" class="page-link">
                        <i class="far fa-angle-double-right"></i>
                    </a>
                </li>
            <?php endif; ?>
            <!-- End of Next and Last Page -->
        </ul>
    
    <!-- End of Pagination -->
 
    <!-- Pagination Details -->
    
    <!-- End of Pagination Details -->
</div>

<!--  -->