<?php
class sports
{
    private $id = 0;


    private $db = NULL;
    private $table = '`sp0rtz_sportsList`';
    
    //Méthode magique pour me connecter a ma BDD facilement entre chaque methodes
    public function __construct() {
        //récupère l'instance de PDO de la classe database avec la méthode statique getInstance()
        $this->db = database::getInstance();
        $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    
    public function getAllSports(){
        $getAllSportsQuery = $this->db->query(
            'SELECT
                `id`
                , `name`
            FROM
                ' . $this->table
            );
        return $getAllSportsQuery->fetchAll(PDO::FETCH_OBJ);
    }
    
    //Permet de vérifier que le sport est présent dans la BDD
    public function checkSportExistsInList(){
        $checkSportExistsInListQuery = $this->db->prepare(
            'SELECT 
                COUNT(`id`) AS isSportExists
            FROM '
                . $this->table . '
            WHERE
                `id` = :sport_id
            ');
        $checkSportExistsInListQuery->bindValue(':sport_id', $this->sport_id, PDO::PARAM_INT);
        $checkSportExistsInListQuery->execute();
        return $checkSportExistsInListQuery->fetch(PDO::FETCH_OBJ)->isSportExists;

    }
}

