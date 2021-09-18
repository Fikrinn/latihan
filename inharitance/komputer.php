<?php
class komputer
{
    public $merk;
    public $processor;
    public $memori;

    public function belikomputer()
    {
        return "Beli komputer baru";
    }
}

class laptop extends komputer
{
    public function lihatspec()
    {
        return "merk: $this->merk, processor: $this->processor,
         memori: $this->memori";
    }
}

$laptop = new laptop();
$laptop->merk = "Asus";
$laptop->processor = "intel core 18";
$laptop->memori = "25GB";

echo $laptop->belikomputer() . "<br>";
echo $laptop->lihatspec();
