<?php 
class AccountManager {

    protected $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=banque_php', 'BanquePHP', 'banque76');
    }

    //for get all accounts of connected user
    public function getAccounts(){  
        $query = $this->db->prepare(
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
        return $query->fetchAll(PDO::FETCH_CLASS, "Account"); 
    }
    //for get the selected account account
    public function getAccount(){

    }
}