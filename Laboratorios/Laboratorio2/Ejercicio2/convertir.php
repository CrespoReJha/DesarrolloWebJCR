<?php
class Convertir {
    public function celsiusAFahrenheit($celsius) {
        return ($celsius * 9 / 5) + 32;
    }

    public function fahrenheitACelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5 / 9;
    }

    public function celsiusAKelvin($celsius) {
        return $celsius + 273.15;
    }

    public function kelvinACelsius($kelvin) {
        return $kelvin - 273.15;
    }

    public function fahrenheitAKelvin($fahrenheit) {
        return ($fahrenheit - 32) * 5 / 9 + 273.15;
    }

    public function kelvinAFahrenheit($kelvin) {
        return ($kelvin - 273.15) * 9 / 5 + 32;
    }
}
?>