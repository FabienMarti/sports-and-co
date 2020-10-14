<?php
class user
{
    public $id = 0;
    public $username = '';
    public $mail = '';
    public $password = '';
    public $city = '';
    public $gender = '';
    public $inscDate = '0000-00-00';
    public $birthDate = '0000-00-00';
    public $profilePicture = '';

    private $db = NULL;
    private $table = '`sp0rtz_user`';
    
    //Méthode magique pour me connecter a ma BDD facilement entre chaque methodes
    public function __construct() {
        //récupère l'instance de PDO de la classe database avec la méthode statique getInstance()
        $this->db = database::getInstance();
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    //! Ajout utilisateur
    public function addUser(){
        $addUserQuery = $this->db->prepare(
            'INSERT INTO '
                . $this->table . ' (`username`, `mail`, `password`, `city`, `gender`, `inscDate`, `birthDate`, `profilePicture`)
            VALUES (:username, :mail, :password, :city, :gender, :inscDate, :birthDate, :profilePicture)
            ');
        $addUserQuery->bindvalue(':username', $this->username, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':mail', $this->mail, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':password', $this->password, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':city', $this->city, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':gender', $this->gender, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':inscDate', date('Y-m-d'), PDO::PARAM_STR);
        $addUserQuery->bindvalue(':birthDate', $this->birthDate, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':profilePicture', $this->profilePicture, PDO::PARAM_STR);
        return $addUserQuery->execute();
    }
  
    //! Verification si les nom d'utilisateur et mail sont disponibles
    public function checkUserUnavailability(){
       
        $checkUserUnavailabilityByFieldName = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isUnavailable`
            FROM ' . $this->table .
            ' WHERE `username` = :username
        '); 
        $checkUserUnavailabilityByFieldName->bindValue(':username', $this->username, PDO::PARAM_STR);
        $checkUserUnavailabilityByFieldName->execute();
        return $checkUserUnavailabilityByFieldName->fetch(PDO::FETCH_OBJ)->isUnavailable;
    }

    public function checkUserUnavailabilityByFieldName($field){
        $whereArray = [];
        foreach($field as $fieldName ){
            $whereArray[] = '`' . $fieldName . '` = :' . $fieldName;
        }
        $where = ' WHERE ' . implode(' AND ', $whereArray);
        $checkUserUnavailabilityByFieldName = $this->db->prepare('
            SELECT COUNT(`id`) as `isUnavailable`
            FROM ' . $this->table 
            . $where
        ); 
        foreach($field as $fieldName ){
            $checkUserUnavailabilityByFieldName->bindValue(':'.$fieldName,$this->$fieldName,PDO::PARAM_STR);
        }
        $checkUserUnavailabilityByFieldName->execute();
        return $checkUserUnavailabilityByFieldName->fetch(PDO::FETCH_OBJ)->isUnavailable;
    }























    //Recupère les information des utilisateurs
    public function getAllUsersInfos(){
        $userInfosQuery = $this->db->query(
            'SELECT
                `usr`.`id` AS `usrId`
                ,`username`
                ,`mail`
                ,DATE_FORMAT(`inscriptionDate`, \'%d/%m/%Y\') AS `inscDate`
                ,`rol`.`name` AS `role`
                , `rol`.`id` AS `rolId`
            FROM
                `r3f3r0_users` AS `usr`
            INNER JOIN `r3f3r0_roles` AS `rol` ON `id_r3f3r0_roles` = `rol`.`id`
            ORDER BY `usr`.`id` ASC
        ');
        return $userInfosQuery->fetchAll(PDO::FETCH_OBJ);
    }

    
}

