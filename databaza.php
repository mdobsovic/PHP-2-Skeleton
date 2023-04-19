<?php
require __DIR__ . '/include/vrch.php';

// kedze v tomto projekte pouzivame databazu iba na jednom mieste, pripojime sa priamo tu.
// ak by sme chceli databazu vyuzivat na vsetkych strankach, pripojime sa v subore vrch.php
// ak by sme chceli databazu vyuzivat iba na niektorych strankach, pripojime sa v subore vrch.php, ak databazu treba

// sem pride pripojenie na databazu:


// tu pride ziskanie riadkov z tabulky:


?>
<div class="container">
    <form>
        <div class="mb-3">
            <div class="row">
                <div class="col-auto">
                    <input type="text" class="form-control form-control-sm" name="meno" placeholder="Hľadať podľa mena" autocomplete="off">
                </div>
                <div class="col-auto">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="bi bi-search"></i>
                            Hľadaj
                        </button>
                    </div>
                </div>
        </div>
    </form>
    <hr>
    <table class="table table-hovered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Meno</th>
                <th>Priezvisko</th>
                <th>Telefón</th>
                <th>E-mail</th>
                <th>Možnosti</th>
            </tr>
        </thead>
        <tbody>
        <?php
            // sem pride vypis ziskanych riadkov
        ?>
        </tbody>
    </table>
</div>
<?php
require __DIR__ . '/include/spodok.php';