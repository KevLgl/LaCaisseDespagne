<?php 
//connect to database
try{
    $db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
} catch(PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


//if the new account form has been submited
if(!empty($_POST) && isset($_POST["new_account"])){
    $query = $db->prepare(
        "INSERT INTO Account(amount, opening_date, account_type, user_id)
         VALUES(:amount, NOW(), :account_type, 2)"
         );
           $result = $query->execute([
            "amount" => $_POST["amount"],
            "account_type" => $_POST["account_type"]
         ]);
}



//send query to mysql
$query = $db->query("SELECT * FROM Account");
//extract data from the query as an associaty array
$accounts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Ma premiere base de données</h1>

    <form action="" method="POST">
        <div>
            <p>Montant</p>
            <input type="number" name="amount">
        </div>
         
        <div>
        <p>Type de compte :</p>
            <select name="account_type">
                <option value="Compte courant">Compte courant</option>
                <option value="Livret A">Livret A</option>
            </select>
        </div>

        <div>
            <input type="submit" name="new_account" value="Envoyer">
        </div>
    
    </form>

<h2>Les comptes</h2>
<?php 
foreach($accounts as $key => $account){
    echo "<p>" . $account["account_type"] . ":" .  $account["amount"] ."</p>";
}

?>

