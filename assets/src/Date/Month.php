<?php

//Création du namespace, cela permet de cibler la classe au cas ou il y aurait une classe qui se nommerais de la même façon:
namespace App\Date;

class Month {

    private $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    private $month;
    private $year;

    //Création du constructeur qui nous permettra de créer l'objet
    /**
     * Month constructor
     * @param int $month: le mois compris entre 1 et 12
     * @param int $year: l'année
     * @throw permet de déclarer une exception \Exception
     */
    public function __construct(?int $month = null, ?int $year = null)
    {
        if ($month === null) {
            $month = intval(date ('m'));//intval est une méthode qui prend une val et l'a converti en entier 
        }
        if ($year === null) {
            $year = intval(date ('Y'));
        }
        if ($month < 1 || $month > 12) {
            throw new \Exception("Le mois $month n'est pas valide !");
        }
        if ($year < 1970) {
            throw new \exception("L'année $year est inférieur à 1970 !");
        }
        $this->month = $month;
        $this->year = $year;
    }

    /**
     * Retourne le mois en chaîne de caractères
     * @param string
     */
    public function toString(): string {
        return $this->months[$this->month - 1] . ' ' . $this->year;
    }

    public function getWeeks (): int {
        $start = new \DateTime("{$this->year}-{$this->month}-01");
        $end = (clone $start)->modify('+1 month -1 day');//clone va permettre de cloner la variable $start afin d'éviter de la modifer
        $weeks = intval($end->format('W')) - intval($start->format('W'));

        if ($weeks < 0) {
            $weeks = intval($end->format('W'));
        }
        return $weeks;
    }
}

