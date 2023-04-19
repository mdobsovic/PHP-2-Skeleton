<?php
require __DIR__ . '/include/vrch.php';
?>
<div class="container">
    <form class="row g-3">
        <div class="col-auto">
            <label class="col-form-label" for="subor">Nahrať súbor:</label>
        </div>
        <div class="col-auto">
            <input type="file" id="subor" name="subor" class="form-control">
        </div>
        <div class="col-auto">
            <button type="submit" id="submit" class="btn btn-primary">
                <i class="bi bi-cloud-upload"></i>
                Nahrať na server
            </button>
        </div>
    </form>
</div>
<?php
require __DIR__ . '/include/spodok.php';