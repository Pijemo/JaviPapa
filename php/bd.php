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
            if($pass===$repass){
                $pass_hashed= password_hash($pass, PASSWORD_DEFAULT);
                    $sql="INSERT INTO usuario(mail,nombre,apellidos,password,nacimiento,rol,sexo) VALUES (?,?,?,?,?,?,?)";
                    $stmt=$this->pdo->prepare($sql);    
                        $stmt->bindParam(1,$email,PDO::PARAM_STR);
                        $stmt->bindParam(2,$nombre,PDO::PARAM_STR);
                        $stmt->bindParam(3,$ape,PDO::PARAM_STR);
                        $stmt->bindParam(4,$pass_hashed,PDO::PARAM_STR);
                        $stmt->bindParam(5,$nac,PDO::PARAM_STR);
                        $stmt->bindParam(6,$rol,PDO::PARAM_INT);
                        $stmt->bindParam(7,$sex,PDO::PARAM_STR);
                    $resultado=$stmt->execute();
        echo "Se ha agragado correctamente el usuario";
            }
            else{
                throw new Exception("Las contraseñas no coinciden");
            }
       
        if(!$resultado){
            throw new Exception("No se ha podido completar el Insert");
        }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
       
        $this->closeBD();
    }
    public function checkUser($user,$pass){
        try{
        $sql="SELECT password from usuario where mail=?";
        $stmt=$this->pdo->prepare($sql);
        $stmt->bindParam(1,$user,PDO::PARAM_STR);
        $stmt->execute();
        if($result=$stmt->fetch(PDO::FETCH_OBJ)){
            $password=$result->password;
            if(password_verify($pass, $result->password)){
            return true;
        }
        else{
            throw new Exception("Contraseña incorrecta");
        }
        }
        else{
        throw new Exception("Usuario no encontrado");
        }             
        }
       catch (Exception $ex) {
           echo $ex->getMessage();
        
      
        }
        
        
        
        
    }
}

