<?php
require __DIR__ . '/include/vrch.php';

// kedze v tomto projekte pouzivame databazu iba na jednom mieste, pripojime sa priamo tu.
// ak by sme chceli databazu vyuzivat na vsetkych strankach, pripojime sa v subore vrch.php
// ak by sme chceli databazu vyuzivat iba na niektorych strankach, pripojime sa v subore vrch.php, ak databazu treba

// sem pride pripojenie na databazu:


// tu pride ziskanie riadkov z tabulky:


?>
<div class="container">
    <form class="form-inline">
        <div class="input-group">
            <input type="text" class="form-control input-sm" name="meno" placeholder="Hľadať podľa mena">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-info btn-sm">
                    <i class="glyphicon glyphicon-search"></i>
                    Hľadaj
                </button>
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