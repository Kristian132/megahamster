<?php
/**
 * Created by PhpStorm.
 * User: Kristian Kraljevic
 * Date: 06.10.2019
 * Time: 23:51
 */

class flat extends room
{

    protected $zusatzausstattung = "";

    function __construct(string $bezeichnung, float $preis, float $laenge, float $breite, float $hoehe, string $zusatzausstattung)
    {
        parent::__construct($bezeichnung, $preis, $laenge, $breite, $hoehe, $zusatzausstattung);
        $this->zusatzausstattung = $zusatzausstattung;

    }

    /**
     * @return string
     */
    public function getZusatzausstattung(): string
    {
        return $this->zusatzausstattung;
    }


}