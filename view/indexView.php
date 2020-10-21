<?php
include 'template/nav.php';
include 'template/header.php';
?>

<main>
  <h2 class="text-center mb-5">VOS COMPTES</h2>
  <div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
      <div class="row" id="cardContainer">

        <?php 
        foreach ($accounts as $key => $account) {
        ?>
          
          <a href="acount.php?id=<?php echo $account->getId(); ?>">

          <!-- Create bootstrap card for all acounts -->
            <div class="card col-3">
              <div class="card-body">
                <h5 class="card-title"><?php echo $account->getAccount_type(); ?></h5>
                <p class="card-text"><?php echo "N° compte: " . $account->getId() .  "<br>";  ?></p>
                <p class="card-text">
                <?php echo $_SESSION['user']['firstname'] ." ".  $_SESSION['user']['lastname']. "<br>"; ?>
                </p>
                <p class="card-text">
                <?php echo $account->getAmount() . "€" . "<br>"; ?>
                </p>
                <p class="card-text">
                  <p>Last operation</p>
                </p>
                <a href="#" class="card-link">Depot</a>
                <a href="#" class="card-link">Retrait</a>
                <a href="#" class="card-link">Supprimer</a>
              </div>
            </div>   
            </a> 
       <?php } ?>
</main>
<?php include 'template/footer.php' ?> 