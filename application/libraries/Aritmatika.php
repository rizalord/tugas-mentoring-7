<?php 
class Aritmatika {
    public function sum($a, $b)
    {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Parameter a dan b harus berupa angka.");
            }
            return $a + $b;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function difference($a, $b)
    {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Parameter a dan b harus berupa angka.");
            }
            return $a - $b;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function times($a, $b)
    {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Parameter a dan b harus berupa angka.");
            }
            return $a * $b;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function divide($a, $b)
    {
        try {
            if (!is_numeric($a) || !is_numeric($b)) {
                throw new Exception("Parameter a dan b harus berupa angka.");
            }
            if ($b == 0) {
                throw new Exception("Pembagian oleh nol tidak diizinkan.");
            }
            return $a / $b;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
