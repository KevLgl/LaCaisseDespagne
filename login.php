<?php include 'template/nav.php';
        include 'template/header.php'; ?> 

<?php 
//if a login form is submited
if(!empty($_POST) && isset($_POST["login"])) {
    //connecte to database
    //FAIRE UN INCLUDE
    try{
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
    } catch(PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $query = $db -> prepare(
        "SELECT * FROM User
        WHERE email = :email"
    );

    $query ->execute([
        "email" => $_POST["email"]
    ]);
    // if user has been match 
    $user = $query->fetch(PDO::FETCH_ASSOC);
    //if password match
    if($user){
        if(password_verify($_POST["password"], $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            header("location: index.php");
        }
        else{

        }
    }
}
//VERIFIER SI EMAIL/PASSEWORD EST VIDE(VOIR FILTRE NETOYAGE PHP)
?>

<h1>Accedez à votre espace personnel </h1>



<div class="form-container">
    <form action="" method="post">
        <div class="form-group">
            <label for="InputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="InputPassword1">Mot de passe</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div>
            <input class="btn btn-primary" type="submit" name="login" value="Se connecter">
        </div>
    </form>
</div>

<?php include 'template/footer.php' ?> 