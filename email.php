<?php
require __DIR__ . '/include/vrch.php';
?>
<div class="container">
    <form>
        <div class="mb-3">
            <label class="form-label" for="prijemca">Príjemca:</label>
            <input type="text" id="prijemca" name="prijemca" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="predmet">Predmet:</label>
            <input type="text" id="predmet" name="predmet" class="form-control" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="sprava">Správa:</label>
            <textarea id="sprava" name="sprava" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" id="submit" class="btn btn-primary">
                <i class="bi bi-send"></i>
                Odoslať
            </button>
        </div>

    </form>
</div>
<?php
require __DIR__ . '/include/spodok.php';