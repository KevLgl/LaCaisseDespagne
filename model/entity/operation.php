<?php 

class Operation{
    protected $id;
    protected static $operation_type = ["D", "R"];
    protected $amount;
    protected $registered;
    protected $label;
    protected $account_id;


    public function setId(int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setOperation_type(string $operation_type){
        $this->operation_type = $operation_type;
    }
    public function getOperation_type(){
        return $this->operation_type;
    }
    public function setAmount(int $amount){
        $this->amount = $amount;
    }
    public function getAmount(){
        return $this->amount;
    }
    public function setRegistered(int $registered){
        $this->registered = $registered;
    }
    public function getRegistered(){
        return $this->registered;
    }
    public function setLabel(string $label){
        $this->label = $label;
    }
    public function getLabel(){
        return $this->label;
    }
    public function setAccount_id(int $account_id){
        $this->account_id = $account_id;
    }
    public function getAccount_id(){
        return $this->account_id;
    }



}