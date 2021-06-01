<div class="row">
    <div class="col-md-6">
        <form action="search.php">
            <div class="mb-3">
                <label for="search" class="form-label">Recherche</label>
                <input class="form-control" type="text" name="s" id="search">
            </div>
            <span class="d-flex justify-content-start">
                <input class="btn btn-primary" type="submit" value="Chercher">
            </span>
        </form>
    </div>
</div>
<h1 class="d-flex justify-content-center">Accueil blog</h1>
<?php foreach ($tab as $row) { ?>

<h2><a href="index.php?id=<?= $row['ID'] ?>"><?= $row['post_title'] ?></a></h2>
<p><?= $row['post_content_tr'] ?></p>
<p>Rédigé par : <?= $row['display_name'] ?> - Date : <?= $row['post_date'] ?></p>

<?php } ?>
