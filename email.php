<?php
require __DIR__ . '/include/vrch.php';
?>
<div class="container">
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-4" for="prijemca">Príjemca:</label>
            <div class="col-md-4">
                <input type="text" id="prijemca" name="prijemca" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4" for="predmet">Predmet:</label>
            <div class="col-md-4">
                <input type="text" id="predmet" name="predmet" class="form-control" value="">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4" for="sprava">Správa:</label>
            <div class="col-md-4">
                <textarea id="sprava" name="sprava" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" id="submit" class="btn btn-primary">
                    <i class="glyphicon glyphicon-send"></i>
                    Odoslať
                </button>
            </div>
        </div>

    </form>
</div>
<?php
require __DIR__ . '/include/spodok.php';