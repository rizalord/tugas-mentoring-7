<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('dateutils');
        $this->load->helper('converter');
    }

    public function index()
    {
        $firstNumber = 10;
        $secondNumber = 7;

        echo "Angka romawi dari $firstNumber adalah <b>" . numberToRomanNumerals($firstNumber) . "</b>";
        echo "<br>";
        echo "Angka romawi dari $secondNumber adalah <b>" . numberToRomanNumerals($secondNumber) . "</b>";

        echo "<br>";
        echo "<br>";

        $firstRomanNumber = "XV";
        $secondRomanNumber = "VII";

        echo "Angka desimal dari $firstRomanNumber adalah <b>" . romanNumeralsToNumber($firstRomanNumber) . "</b>";
        echo "<br>";
        echo "Angka desimal dari $secondRomanNumber adalah <b>" . romanNumeralsToNumber($secondRomanNumber) . "</b>";

        echo "<br>";
        echo "<br>";

        echo "Tanggal sekarang dalam format `y-m-d` adalah <b>" . $this->dateutils->currentDateYMD() . "</b>";
        echo "<br>";
        echo "Tanggal sekarang dalam format `d M Y` adalah <b>" . $this->dateutils->currentDateDMY() . "</b>";

    }
}
