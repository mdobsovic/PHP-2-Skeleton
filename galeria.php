<?php
require __DIR__ . '/include/vrch.php';
?>
<div class="container">
    <div class="row g-2">
        <?php for ($i=1; $i<=12; $i++) { ?>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <div class="card">
                    <img src="http://placehold.it/150x150" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Obrázok <?= $i; ?></h3>
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="bi bi-hand-thumbs-up-fill"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php
require __DIR__ . '/include/spodok.php';