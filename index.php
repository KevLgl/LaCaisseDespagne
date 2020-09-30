
    <?php include 'template/nav.php' ?>
    <?php include 'template/header.php' ?>
    <?php require_once 'acounts.php'  ?>

<main>
  <h2 class="text-center mb-5">VOS COMPTES</h2>
  <div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
      <div class="row" id="cardContainer">
        <?php 
        $accounts = get_accounts();// Create variable for use it on foreeach
        foreach ($accounts as $key => $account) {
        ?>
        <!-- Create link for all acounts(on url for get them with GET method) -->
        <a href="acount.php?id=<?php echo $key; ?>">

        <!-- Create bootstrap card for all acounts -->
          <div class="card col-3">
            <div class="card-body">
              <h5 class="card-title"><?php echo $account['name'] .  "<br>"; ?></h5>
              <p class="card-text"><?php echo "N° compte: " . $account['number'] .  "<br>";  ?></p>
              <p class="card-text">
              <?php echo $account['owner'] .  "<br>"; ?>
              </p>
              <p class="card-text">
              <?php echo $account['amount'] . "€" . "<br>"; ?>
              </p>
              <p class="card-text">
              <?php echo "derniere opération: " . $account['last_operation'] .  "<br>"; ?>
              </p>
              <a href="#" class="card-link">Depot</a>
              <a href="#" class="card-link">Retrait</a>
              <a href="#" class="card-link">Supprimer</a>
            </div>
          </div>   
          </a> 
        
        <?php } ?> 
        <!-- Card " creat account " -->
        <a href="new_account.php">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Creer un nouveau compte</h5>
            <h6 class="card-subtitle mb-2 text-muted">+</h6>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div> 
</main>
    <?php include 'template/footer.php' ?>
 