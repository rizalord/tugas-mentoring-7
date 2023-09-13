<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Arithmetic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('aritmatika');
    }

    public function index()
    {
        $firstNumber = 2;
        $secondNumber = 4;

        try {
            $sum = $this->aritmatika->sum($firstNumber, $secondNumber);
            $difference = $this->aritmatika->difference($firstNumber, $secondNumber);
            $product = $this->aritmatika->times($firstNumber, $secondNumber);
            $quotient = $this->aritmatika->divide($firstNumber, $secondNumber);

            echo "Hasil penjumlahan $firstNumber dan $secondNumber adalah <b>$sum</b>";
            echo "<br>";
            echo "Hasil pengurangan $firstNumber dan $secondNumber adalah <b>$difference</b>";
            echo "<br>";
            echo "Hasil perkalian $firstNumber dan $secondNumber adalah <b>$product</b>";
            echo "<br>";
            echo "Hasil pembagian $firstNumber dan $secondNumber adalah <b>$quotient</b>";
        } catch (\Exception $te) {
            echo "Error: " . $te->getMessage();
        }
    }
}
