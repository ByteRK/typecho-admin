<?php
include 'common.php';
include 'header.php';
include 'menu.php';
?>

<?php include 'menu_title.php'; ?>

<div class="container-fluid mt--6">
    <div class="row">
        <div class="main col">
            <div class="body container card">
                <div class="card-header">
                    <h3 class="mb-0"> <div class="typecho-page-title">
                            <?php include 'page-title.php'; ?>
                        </div>
                    </h3>
                </div>
                <div class="row typecho-page-main" role="form">
                    <div class="col-mb-12 col-tb-6 col-tb-offset-3">
                        <?php \Widget\Users\Edit::alloc()->form()->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer-html.php';?>
</div>

<?php
include 'common-js.php';
include 'form-js.php';
include 'footer.php';
?>
