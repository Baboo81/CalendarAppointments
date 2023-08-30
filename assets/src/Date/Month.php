<?php

//Création du namespace, cela permet de cibler la classe au cas ou il y aurait une classe qui se nommerais de la même façon:
namespace App\Date;

class Month {

    //Création du constructeur qui nous permettra de créer l'objet
    /**
     * Month constructor
     * @param int $month: le mois compris entre 1 et 12
     * @param int $year: l'année
     * @throw permet de déclarer une exception \Exception
     */
    public function __construct($month, $year)
    {
        if ($month < 1 || $month > 12) {
            throw new \Exception("Le mois $month n'est pas valide !");
        }
        if ($year < 1970) {
            throw new \exception("L'année $year est inférieur à 1970 !");
        }
    }
}

