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

    //for get just one account selected with his ID
    public function getAccount(){  
        //if id is on url
        if(isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
            }

        $query = $this->db->prepare(
        'SELECT a.id , a.amount, a.account_type, a.opening_date
        FROM Account AS a
        WHERE a.id = :id
        ');
        $query->execute([
        "id" => $_SESSION['user']['id']
        ]);

        return $query->fetchAll(PDO::FETCH_CLASS, "Account"); 
    }

    //for get the details for selected account by $_GET[id]
    public function getAccountOperations(){
        //if id is on url
        if(isset($_GET["id"])){
            $id = htmlspecialchars($_GET["id"]);
          }

            $query = $this->db->prepare(
            'SELECT a.id AS a_id , a.amount AS a_amount, a.account_type, o.id AS o_id, o.operation_type, o.amount AS o_amount, o.label, o.account_id
            FROM Account AS a
            INNER JOIN Operation AS o
            ON a.id = o.account_id
            AND o.account_id = :id
            ');
      
            $query->execute([
            "id" => $id
            ]);
            
            if($query === false){
              var_dump($pdo->errorInfo());
              die('erreur SQL');
            }
            return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}