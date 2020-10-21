
    <?php 
    session_start();
     // If $_SESSION[user] not exist or $_SESSION[user] is empty, -> login.php
    if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
      header("Location: login.php");
    }
 
  
    include 'model/entity/user.php';
    include 'model/entity/account.php';
    include 'model/accountManager.php';
    //Create $accountManeger for have acces to her methods
    $accountManager = new AccountManager();
    //get account_operations
    $account_operations = $accountManager->getAccountOperations(); 
    var_dump($account_operations);
    //get the account selected
    $account = $accountManager->getAccount();

    

    include 'view/accountView.php';
?> 
    

