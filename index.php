
 <?php
 session_start();
 // If $_SESSION[user] not exist or $_SESSION[user] is empty, -> login.php
 if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
  header("Location: login.php");
}
// get entitys
require "model/entity/user.php";
require "model/entity/account.php";
require "model/accountManager.php";

//Create $accountManeger for have acces to ->getAccounts
$accountManager = new AccountManager();
//Save the result of getAccounts in $accounts
$accounts = $accountManager->getAccounts();


require "view/indexView.php";

  
?> 

     


 