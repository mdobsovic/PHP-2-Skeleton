<?php
require __DIR__ . '/include/vrch.php';
?>
<div class="container">
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-md-4" for="subor">Nahrať súbor:</label>
            <div class="col-md-4">
                <input type="file" id="subor" name="subor" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" id="submit" class="btn btn-success">
                    <i class="glyphicon glyphicon-upload"></i>
                    Nahrať na server
                </button>
            </div>
        </div>
    </form>
</div>
<?php
require __DIR__ . '/include/spodok.php';