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
        $key = array_keys($data);
        $champs = implode(",", $key);
        $values = ":" . str_replace(",", ", :", $champs);

        $req = $this->bdd->prepare("INSERT INTO " . $table . "(" . $champs . ") VALUES (" . $values . ")");
        $req->execute($data);
    }

    /**
     * @param $table
     * @param $site_id
     * @param $page_id
     * @return value
     */
    public function SelectBDD($table, $site_id, $page_id)
    {
        $res = array();
        $resultats = $this->bdd->query("SELECT * FROM $table WHERE SITE_ID=$site_id AND PAGE_ID=$page_id ORDER BY ZONE_ORDER");

        while($resultat = $resultats->fetch(PDO::FETCH_OBJ))
        {
            if(!empty($resultat->ZONE_TITRE1)){
                $res['COLOR'] = array(
                    'color1' => $resultat->ZONE_COLOR1,
                    'titre1' => $resultat->ZONE_TITRE1,
                    'text1' => $resultat->ZONE_TEXTE1,

                    'color2' => $resultat->ZONE_COLOR2,
                    'titre2' => $resultat->ZONE_TITRE2,
                    'text2' => $resultat->ZONE_TEXTE2,

                    'color3' => $resultat->ZONE_COLOR3,
                    'titre3' => $resultat->ZONE_TITRE3,
                    'text3' => $resultat->ZONE_TEXTE3
                );
            }else{
                $res['BLOC'][] = array(
                    'order' => $resultat->ZONE_ORDER,
                    'titre' => $resultat->ZONE_TITRE_BLOC,
                    'text' => $resultat->ZONE_TEXT_BLOC,
                    'media1' => $resultat->MEDIA1,
                    'media2' => $resultat->MEDIA2
                );
            }
        }
        $resultats->closeCursor();

        return $res;
    }

    public function DeleteBDD($table, $site_id, $page_id)
    {
        $req = $this->bdd->prepare("DELETE FROM " . $table . " WHERE SITE_ID=:site_id AND PAGE_ID=:page_id");
        $req->bindParam(':site_id', $site_id, PDO::PARAM_INT);
        $req->bindParam(':page_id', $page_id, PDO::PARAM_INT);

        $req->execute();
    }

    public function CheckFileBDD($table, $file)
    {
        $req = $this->bdd->prepare("SELECT * FROM $table WHERE ZONE_TEXT_BLOC LIKE '%".$file."%'");
        $req->execute();
        $count = $req->rowCount();
        if($count > 0){
            return false;
        }else{
            return true;
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
