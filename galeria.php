<?php
require __DIR__ . '/include/vrch.php';
?>
<div class="container">
    <div class="row">
        <?php for ($i=1; $i<=12; $i++) { ?>
            <div class="col-xs-6 col-md-3 col-lg-2">
                <div class="thumbnail">
                    <img src="http://placehold.it/150x150" alt="">
                    <div class="caption">
                        <h3>Obrázok <?= $i; ?></h3>
                        <p>
                            <a href="#" class="btn btn-info btn-sm">
                                <i class="glyphicon glyphicon-thumbs-up"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php
require __DIR__ . '/include/spodok.php';