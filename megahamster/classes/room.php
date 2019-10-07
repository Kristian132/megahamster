<?php
/**
 * Created by PhpStorm.
 * User: Kristian Kraljevic
 * Date: 23.09.2019
 * Time: 12:39
 */

class room
{
    protected $bezeichnung = "";
    protected $preis = 0;
    protected $laenge = 0;
    protected $breite = 0;
    protected $hoehe = 0;
    protected $zusatzausstattung = "";


    function __construct(string $bezeichnung, float $preis, float $laenge, float $breite, float $hoehe)
    {
        $this->bezeichnung = $bezeichnung;
        $this->preis = $preis;
        $this->laenge = $laenge;
        $this->breite = $breite;
        $this->hoehe = $hoehe;

    }

    /**
     * @return float|int
     */
    public function getPreis(): float
    {
        return $this->preis;
    }

    /**
     * @return string
     */
    public function getBezeichnung(): string
    {
        return $this->bezeichnung;
    }

    /**
     * @return float|int
     */
    public function getLaenge(): string
    {
        return $this->laenge;
    }

    /**
     * @return float|int
     */
    public function getBreite(): float
    {
        return $this->breite;
    }

    /**
     * @return float|int
     */
    public function getHoehe(): float
    {
        return $this->hoehe;
    }

}
