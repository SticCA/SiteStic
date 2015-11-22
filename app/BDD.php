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


    public function InsertBDD($table, $data)
    {
        $key = array_keys($data);
        $champs = implode(",",$key);
        $values = ":" . str_replace(",", ", :", $champs);

        $req = $this->bdd->prepare("INSERT INTO " . $table . "(".$champs.") VALUES (".$values.")");

        if($req->execute($data)){
            return true;
        }else{
            return false;
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
