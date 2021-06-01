<h1 class="d-flex justify-content-center">Résultats de recherche : <i><?= isset($_GET['s']) ? $_GET['s'] : '' ?></i></h1>
<?php foreach ($tab as $row) { ?>
<h2><a href="index.php?id=<?= $row['ID'] ?>"><?= $row['post_title'] ?></a></h2>
<p><?= $row['post_content_tr'] ?></p>
<p>Date : <?= $row['post_date'] ?></p>
<?php } ?>