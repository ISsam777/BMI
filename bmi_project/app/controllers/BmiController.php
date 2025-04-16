<?php
class BmiController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function calculateBmi($user_id, $name, $weight, $height)
    {
        $bmi = $weight / (($height / 100) ** 2);
        $status = $this->getBmiStatus($bmi);

        $this->model->saveBmiRecord($user_id, $name, $weight, $height, $bmi, $status);

        return [
            'name' => $name,
            'weight' => $weight,
            'height' => $height,
            'bmi' => round($bmi, 2),
            'status' => $status
        ];
    }

    private function getBmiStatus($bmi)
    {
        if ($bmi < 18.5)
            return 'Underweight';
        if ($bmi < 25)
            return 'Normal weight';
        if ($bmi < 30)
            return 'Overweight';
        return 'Obesity';
    }
}
?>

