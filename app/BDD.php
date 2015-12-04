<?php

// classe qui fait le lien avec la base de donnée

class BDD
{
    private $bdd;

    /**
     * BDD constructor.
     */
    public function __construct($dsn, $user, $password)
    {
        $this->bdd = new PDO($dsn, $user, $password);
    }


    /**
     * @param $table : nom de la table en BDD
     * @param $data : tableau de valeur array(champ => valeur) ex : array("name"=>'toto',"pwd"=>123)
     * @return bool
     */
    public function InsertBDD($table, $data)
    {
        if(is_array($data) && (sizeof($data) > 0) && (!empty($table))) {
            $key = array_keys($data);
            $champs = implode(",", $key);
            $values = ":" . str_replace(",", ", :", $champs);

            $req = $this->bdd->prepare("INSERT INTO " . $table . "(" . $champs . ") VALUES (" . $values . ")");

            if ($req->execute($data)) {
                return true;
            } else {
                return false;
            }
        }else{
            return false;
        }
    }

    /**
     * @param $table
     * @param $data
     * @return null or value
     */
    public function SelectBDD($table, $data)
    {
        if(is_array($data) && (sizeof($data) > 0) && (!empty($table))) {
            
        }else{
            return null;
        }
    }

    /**
     * @return mixed
     */
    public function getBdd()
    {
        return $this->bdd;
    }
}
