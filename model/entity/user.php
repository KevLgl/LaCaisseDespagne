<?php 
class User{
    
    protected $id;
    protected $lastname;
    protected $firstname;
    protected $email;
    protected $city;
    protected $city_code;
    protected $adress;
    protected static $sexe = ["F","M"];
    protected $password;
    protected $birth_date;


    public function setId(int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setLastname(string $lastname){
        $this->lastname = $lastname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function setFirstname(string $firstname){
        $this->firstname = $firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setCity(string $city){
        $this->city = $city;
    }
    public function getCity(){
        return $this->city;
    }
    public function setCity_code(int $city_code){
        $this->city_code = $city_code;
    }
    public function getCity_code(){
        return $this->city_code;
    }
    public function setAdress(string $adress){
        $this->adress = $adress;
    }
    public function getAdress(){
        return $this->adress;
    }
    public function setSexe(string $sexe){
        if(in_array($sexe, [])){
            $this->sexe = $sexe;
        }
    }
    public function getSexe(){
        return $this->sexe;
    }
    public function setPassword(string $password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setBirth_date(int $birth_date){
        $this->birth_date = $birth_date;
    }
    public function getBirth_date(){
        return $this->birth_date;
    }

    
}