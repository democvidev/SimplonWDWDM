

 <?php if (isset($_POST) && isset($_POST['question3'])) { ?>
    <p class="mt-5">Merci pour votre notation : <?= showStars(); ?></p>
 <?php } ?>


 <?php if (isset($_POST['tel_number']) && isset($_POST['call_now']) && $_POST['question3'] === '-1') { ?>
    <p>Vous serez rappelé au numéro <?php showPhoneNumber($_POST['tel_number']); ?></p>
 <?php } ?>
 
 <?php if (isset($_POST) && isset($_POST['question3'])) { ?>
    <p class="mt-5"><a href="index.php" role="button" class="btn btn-danger">Retourner au questionaire</a></p>
 <?php } ?>

 </div>
</body>

</html>