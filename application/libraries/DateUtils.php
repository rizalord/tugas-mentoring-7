<?php
class DateUtils
{
    public function currentDateYMD()
    {
        try {
            $currentDate = new DateTime();
            return $currentDate->format('Y-m-d');
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function currentDateDMY()
    {
        try {
            $currentDate = new DateTime();
            return $currentDate->format('d M Y');
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
