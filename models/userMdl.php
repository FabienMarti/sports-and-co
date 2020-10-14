<?php
class user
{
    public $id = 0;
    public $username = '';
    public $password = '';
    public $insDate = '0000-00-00 00:00:00';

    private $db = NULL;
    
    //Méthode magique pour me connecter a ma BDD facilement entre chaque methodes
    public function __construct() {
        //récupère l'instance de PDO de la classe database avec la méthode statique getInstance()
        $this->db = database::getInstance();
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }

    //! Ajout utilisateur
    public function addUser(){
        $addUserQuery = $this->db->prepare(
            'INSERT INTO 
                `pr0g_users` (`username`, `password`, `inscDate`, `age`, `weight`, `height`, `sex`)
            VALUES (:username, :password, :inscDate, :age, :weight, :height, :sex)
            ');
        $addUserQuery->bindvalue(':username', $this->username, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':password', $this->password, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':inscDate', date('Y-m-d H:i:s'), PDO::PARAM_STR);
        $addUserQuery->bindvalue(':age', $this->age, PDO::PARAM_INT);
        $addUserQuery->bindvalue(':weight', $this->weight, PDO::PARAM_INT);
        $addUserQuery->bindvalue(':height', $this->height, PDO::PARAM_STR);
        $addUserQuery->bindvalue(':sex', $this->sex, PDO::PARAM_STR);
        return $addUserQuery->execute();
    }
  
    public function checkUserUnavailability(){
       
        $checkUserUnavailabilityByFieldName = $this->db->prepare(
            'SELECT COUNT(`id`) AS `isUnavailable`
            FROM `pr0g_users`
            WHERE `username` = :username
        '); 
        $checkUserUnavailabilityByFieldName->bindValue(':username', $this->username, PDO::PARAM_STR);
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

