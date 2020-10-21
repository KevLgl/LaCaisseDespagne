<?php 
class Account {
    protected $id;
    protected $amout;
    protected $opening_date;
    protected $account_type;
    protected $user_id;


    public function setId(int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setAmount(int $amount){
        $this->amount = $amount;
    }
    public function getAmount(){
        return $this->amount;
    }

    public function setOpening_date(int $opening_date){
        $this->opening_date = $opening_date;
    }
    public function getOpening_date(){
        return $this->opening_date;
    }

    public function setAccount_type(string $id){
        $this->account_type = $account_type;
    }
    public function getAccount_type(){
        return $this->account_type;
    }

    public function setUser_id(int $user_id){
        $this->user_id = $user_id;
    }
    public function getUser_id(){
        return $this->user_id;
    }
}