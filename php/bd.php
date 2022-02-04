<?php
Class BD{
    private $ruta;
    private $user;
    private $pass;
    private $pdo;
    public function __construct($ruta,$user,$pass) {
        $this->ruta=$ruta;
        $this->user=$user;
        $this->pass=$pass;
    }
    public function loadBD(){
        try{
            $this->pdo= new PDO($this->ruta, $this->user, $this->pass);
            
        } catch (Exception $ex) {

        }
    }
    public function closeBD() {
        $this->pdo=null;
        
    }
    public function addUser($email,$pass,$repass,$nombre,$ape,$nac,$sex,$rol){
        try{
            
             $sql="INSERT INTO usuario(mail,nombre,apellidos,password,rol,sexo) VALUES (?,?,?,?,?,?)";
        $stmt=$this->pdo->prepare($sql);    
        $stmt->bindParam(0,$email,PDO::PARAM_STR);
        $stmt->bindParam(1,$nombre,PDO::PARAM_STR);
        $stmt->bindParam(2,$ape,PDO::PARAM_STR);
        $stmt->bindParam(3,$pass,PDO::PARAM_STR);
        $stmt->bindParam(4,$rol,PDO::PARAM_INT);
        $stmt->bindParam(5,$sex,PDO::PARAM_STR);
        $resultado=$stmt->execute();
        if(!$resultado){
            throw new Exception("No se ha podido completar el Insert");
        }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
       
        $this->closeBD();
    }
}

