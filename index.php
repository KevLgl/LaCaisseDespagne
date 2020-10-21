
 <?php
 
include 'template/nav.php';
include 'template/header.php';
require_once 'acounts.php'; 
 

$pdo = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
$query = $pdo->prepare(
'SELECT a.id , a.amount, a.account_type
FROM Account AS a
WHERE a.user_id = :id
');
$query->execute([
  "id" => $_SESSION['user']['id']
]);

if($query === false){
  var_dump($pdo->errorInfo());
  die('erreur SQL');
}
$accounts = $query->fetchAll(PDO::FETCH_ASSOC);        
?> 

<main>
  <h2 class="text-center mb-5">VOS COMPTES</h2>
  <div class="jumbotron jumbotron-fluid">
    <div class="container-fluid">
      <div class="row" id="cardContainer">

        <?php 
        foreach ($accounts as $key => $account) {
        ?>
          
          <a href="acount.php?id=<?php echo $account["id"]; ?>">

          <!-- Create bootstrap card for all acounts -->
            <div class="card col-3">
              <div class="card-body">
                <h5 class="card-title"><?php echo $account['account_type'] ?></h5>
                <p class="card-text"><?php echo "N° compte: " . $account['id'] .  "<br>";  ?></p>
                <p class="card-text">
                <?php echo $_SESSION['user']['firstname'] ." ".  $_SESSION['user']['lastname']. "<br>"; ?>
                </p>
                <p class="card-text">
                <?php echo $account['amount'] . "€" . "<br>"; ?>
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
     


 