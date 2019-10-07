<?php
/**
 * Created by PhpStorm.
 * User: Kristian Kraljevic
 * Date: 30.09.2019
 * Time: 12:48
 */

class pit
{
    private $bezeichnung = "";
    private $preis = 0;
    private $seitenlänge = 0;
    private $zusatzausstattung = "";

    function __construct(string $bezeichnung, float $preis, float $seitenlänge, string $zusatzausstattung)
    {
        $this->bezeichnung = $bezeichnung;
        $this->preis = $preis;
        $this->seitenlänge = $seitenlänge;
        $this->zusatzausstattung = $zusatzausstattung;
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
    public function getSeitenlaenge(): float
    {
        return $this->seitenlänge;
    }

    /**
     * @return int|string
     */
    public function getZusatzausstattung() : string
    {
        return $this->zusatzausstattung;
    }





}