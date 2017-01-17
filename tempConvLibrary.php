<?php
    /*
    PHP Temperature Conversion Library
 

    This function library allows conversion between temperatures in the following scales:
    Celsius, Delisle, Fahrenheit, Kelvin, Newton, Rankine, Reaumur, and Romer.
 
    */
 
    // Facade function, in case you'd rather not call the individual functions directly or you just like encapsulation.
    
    function convertTemperature($temperature, $originScale, $targetScale)
    {
        // Return the input value for temperature if both scales are identical.
        if (strtoupper($originScale) == strtoupper($targetScale))
        {
            return $temperature;
        }
        else
        {
            switch (strtoupper($originScale))
            {
            case "CELSIUS":
                switch (strtoupper($targetScale))
                {
                    case "DELISLE":
                        return CelsiusToDelisle($temperature);
                        break;
                    case "FAHRENHEIT":
                        return CelsiusToFahrenheit($temperature);
                        break;
                    case "KELVIN":
                        return CelsiusToKelvin($temperature);
                        break;
                    case "NEWTON":
                        return CelsiusToNewton($temperature);
                        break;
                    case "RANKINE":
                        return CelsiusToRankine($temperature);
                        break;
                    case "REAUMUR":
                        return CelsiusToReaumur($temperature);
                        break;
                    case "ROMER":
                        return CelsiusToRomer($temperature);
                        break;
                }
                break;
            case "DELISLE":
                switch (strtoupper($targetScale))
                {
                    case "CELSIUS":
                        return DelisleToCelsius($temperature);
                        break;
                    case "FAHRENHEIT":
                        return DelisleToFahrenheit($temperature);
                        break;
                    case "KELVIN":
                        return DelisleToKelvin($temperature);
                        break;
                    case "NEWTON":
                        return DelisleToNewton($temperature);
                        break;
                    case "RANKINE":
                        return DelisleToRankine($temperature);
                        break;
                    case "REAUMUR":
                        return DelisleToReaumur($temperature);
                        break;
                    case "ROMER":
                        return DelisleToRomer($temperature);
                        break;
                }
                break;
            case "FAHRENHEIT":
                switch (strtoupper($targetScale))
                {
                    case "CELSIUS":
                        return FahrenheitToCelsius($temperature);
                        break;
                    case "DELISLE":
                        return FahrenheitToDelisle($temperature);
                        break;
                    case "KELVIN":
                        return FahrenheitToKelvin($temperature);
                        break;
                    case "NEWTON":
                        return FahrenheitToNewton($temperature);
                        break;
                    case "RANKINE":
                        return FahrenheitToRankine($temperature);
                        break;
                    case "REAUMUR":
                        return FahrenheitToReaumur($temperature);
                        break;
                    case "ROMER":
                        return FahrenheitToRomer($temperature);
                        break;
                }
                break;
            case "KELVIN":
                switch (strtoupper($targetScale))
                {
                    case "CELSIUS":
                        return KelvinToCelsius($temperature);
                        break;
                    case "DELISLE":
                        return KelvinToDelisle($temperature);
                        break;
                    case "FAHRENHEIT":
                        return KelvinToFahrenheit($temperature);
                        break;
                    case "NEWTON":
                        return KelvinToNewton($temperature);
                        break;
                    case "RANKINE":
                        return KelvinToRankine($temperature);
                        break;
                    case "REAUMUR":
                        return KelvinToReaumur($temperature);
                        break;
                    case "ROMER":
                        return KelvinToRomer($temperature);
                        break;
                }
            case "NEWTON":
                switch (strtoupper($targetScale))
                {
                    case "CELSIUS":
                        return NewtonToCelsius($temperature);
                        break;
                    case "DELISLE":
                        return NewtonToDelisle($temperature);
                        break;
                    case "FAHRENHEIT":
                        return NewtonToFahrenheit($temperature);
                        break;
                    case "KELVIN":
                        return NewtonToKelvin($temperature);
                        break;
                    case "RANKINE":
                        return NewtonToRankine($temperature);
                        break;
                    case "REAUMUR":
                        return NewtonToReaumur($temperature);
                        break;
                    case "ROMER":
                        return NewtonToRomer($temperature);
                        break;
                }
                break;
            case "RANKINE":
                switch (strtoupper($targetScale))
                {
                    case "CELSIUS":
                        return RankineToCelsius($temperature);
                        break;
                    case "DELISLE":
                        return RankineToDelisle($temperature);
                        break;
                    case "FAHRENHEIT":
                        return RankineToFahrenheit($temperature);
                        break;
                    case "KELVIN":
                        return RankineToKelvin($temperature);
                        break;
                    case "NEWTON":
                        return RankineToNewton($temperature);
                        break;
                    case "REAUMUR":
                        return RankineToReaumur($temperature);
                        break;
                    case "ROMER":
                        return RankineToRomer($temperature);
                        break;
                }
                break;
            case "REAUMUR":
                switch (strtoupper($targetScale))
                {
                    case "CELSIUS":
                        return ReaumurToCelsius($temperature);
                        break;
                    case "DELISLE":
                        return ReaumurToDelisle($temperature);
                        break;
                    case "FAHRENHEIT":
                        return ReaumurToFahrenheit($temperature);
                        break;
                    case "KELVIN":
                        return ReaumurToKelvin($temperature);
                        break;
                    case "NEWTON":
                        return ReaumurToNewton($temperature);
                        break;
                    case "RANKINE":
                        return ReaumurToRankine($temperature);
                        break;
                    case "ROMER":
                        return ReaumurToRomer($temperature);
                        break;
                }
                break;
            case "ROMER":
                switch (strtoupper($targetScale))
                {
                    case "CELSIUS":
                        return RomerToCelsius($temperature);
                        break;
                    case "DELISLE":
                        return RomerToDelisle($temperature);
                        break;
                    case "FAHRENHEIT":
                        return RomerToFahrenheit($temperature);
                        break;
                    case "KELVIN":
                        return RomerToKelvin($temperature);
                        break;
                    case "NEWTON":
                        return RomerToNewton($temperature);
                        break;
                    case "RANKINE":
                        return RomerToRankine($temperature);
                        break;
                    case "REAUMUR":
                        return RomerToReaumur($temperature);
                        break;
                }
                break;
            }
        }
    }
 
    // Converts a given temperature from Celsius to Delisle.
    function CelsiusToDelisle($temperature)
    {
        return (100 - $temperature) * 3 / 2;
    }
 
    // Converts a given temperature from Celsius to Fahrenheit.
    function CelsiusToFahrenheit($temperature)
    {
        return ($temperature * 9 / 5) + 32;
    }
 
    // Converts a given temperature from Celsius to Kelvin.
    function CelsiusToKelvin($temperature)
    {
        return $temperature + 273.15;
    }
 
    // Converts a given temperature from Celsius to Newton.
    function CelsiusToNewton($temperature)
    {
        return $temperature * 33 / 100;
    }
 
    // Converts a given temperature from Celsius to Rankine.
    function CelsiusToRankine($temperature)
    {
        return ($temperature + 273.15) * 1.8;
    }
 
    // Converts a given temperature from Celsius to Reaumur.
    function CelsiusToReaumur($temperature)
    {
        return $temperature * 4 / 5;
    }
 
    // Converts a given temperature from Celsius to Romer.
    function CelsiusToRomer($temperature)
    {
        return $temperature * 21 / 40 + 7.5;
    }
 
    // Converts a given temperature from Delisle to Celsius.
    function DelisleToCelsius($temperature)
    {
        return 100 - $temperature * 2 / 3;
    }
 
    // Converts a given temperature from Delisle to Fahrenheit.
    function DelisleToFahrenheit($temperature)
    {
        return 212 - $temperature * 6 / 5;
    }
 
    // Converts a given temperature from Delisle to Kelvin.
    function DelisleToKelvin($temperature)
    {
        return 373.15 - $temperature * 2 / 3;
    }
 
    // Converts a given temperature from Delisle to Newton.
    function DelisleToNewton($temperature)
    {
        return 33 - $temperature * 11 / 50;
    }
 
    // Converts a given temperature from Delisle to Rankine.
    function DelisleToRankine($temperature)
    {
        return 671.67 - $temperature * 6 / 5;
    }
 
    // Converts a given temperature from Delisle to Reaumur.
    function DelisleToReaumur($temperature)
    {
        return 80 - $temperature * 8 / 15;
    }
 
    // Converts a given temperature from Delisle to Romer.
    function DelisleToRomer($temperature)
    {
        return 60 - $temperature * 7 / 20;
    }
 
    // Converts a given temperature from Fahrenheit to Celsius.
    function FahrenheitToCelsius($temperature)
    {
        return ($temperature - 32) * 5 / 9;
    }
 
    // Converts a given temperature from Fahrenheit to Delisle.
    function FahrenheitToDelisle($temperature)
    {
        return (212 - $temperature) * 5 / 6;
    }
 
    // Converts a given temperature from Fahrenheit to Kelvin.
    function FahrenheitToKelvin($temperature)
    {
        return ($temperature - 32) * 5 / 9 + 273.15;
    }
 
    // Converts a given temperature from Fahrenheit to Newton.
    function FahrenheitToNewton($temperature)
    {
        return ($temperature - 32) * 11 / 60;
    }
 
    // Converts a given temperature from Fahrenheit to Rankine.
    function FahrenheitToRankine($temperature)
    {
        return $temperature + 459.67;
    }
 
    // Converts a given temperature from Fahrenheit to Reamur.
    function FahrenheitToReaumur($temperature)
    {
        return ($temperature - 32) * 4 / 9;
    }
 
    // Converts a given temperature from Fahrenheit to Romer.
    function FahrenheitToRomer($temperature)
    {
        return ($temperature - 32) * 7 / 24 + 7.5;
    }
 
    // Converts a given temperature from Kelvin to Celsius.
    function KelvinToCelsius($temperature)
    {
        return $temperature - 273.15;
    }
 
    // Converts a given temperature from Kelvin to Delisle.
    function KelvinToDelisle($temperature)
    {
        return (373.15 - $temperature) * 3 / 2;
    }
 
    // Converts a given temperature from Kelvin to Fahrenheit.
    function KelvinToFahrenheit($temperature)
    {
        return ($temperature - 273.15) * 9 / 5 + 32;
    }
 
    // Converts a given temperature from Kelvin to Newton.
    function KelvinToNewton($temperature)
    {
        return ($temperature - 273.15) * 33 / 100;
    }
 
    // Converts a given temperature from Kelvin to Rankine.
    function KelvinToRankine($temperature)
    {
        return $temperature * 1.8;
    }
 
    // Converts a given temperature from Kelvin to Reaumur.
    function KelvinToReaumur($temperature)
    {
        return ($temperature - 273.15) * 4 / 5;
    }
 
    // Converts a given temperature from Kelvin to Romer.
    function KelvinToRomer($temperature)
    {
        return ($temperature - 273.15) * 21 / 40 + 7.5;
    }
 
    // Converts a given temperature from Newton to Celsius.
    function NewtonToCelsius($temperature)
    {
        return $temperature * 100 / 33;
    }
 
    // Converts a given temperature from Newton to Delisle.
    function NewtonToDelisle($temperature)
    {
        return (33 - $temperature) * 50 / 11;
    }
 
    // Converts a given temperature from Newton to Fahrenheit.
    function NewtonToFahrenheit($temperature)
    {
        return $temperature * 60 / 11 + 32;
    }
 
    // Converts a given temperature from Newton to Kelvin.
    function NewtonToKelvin($temperature)
    {
        return $temperature * 100 / 33 + 273.15;
    }
 
    // Converts a given temperature from Newton to Rankine.
    function NewtonToRankine($temperature)
    {
        return $temperature * 60 / 11 + 491.67;
    }
 
    // Converts a given temperature from Newton to Reaumur.
    function NewtonToReaumur($temperature)
    {
        return $temperature * 80 / 33;
    }
 
    // Converts a given temperature from Newton to Romer.
    function NewtonToRomer($temperature)
    {
        return $temperature * 35 / 22 + 7.5;
    }
 
    // Converts a given temperature from Rankine to Celsius.
    function RankineToCelsius($temperature)
    {
        return ($temperature / 1.8) - 273.15;
    }
 
    // Converts a given temperature from Rankine to Delisle.
    function RankineToDelisle($temperature)
    {
        return (671.67 - $temperature) * 5 / 6;
    }
 
    // Converts a given temperature from Rankine to Fahrenheit.
    function RankineToFahrenheit($temperature)
    {
        return $temperature - 459.67;
    }
 
    // Converts a given temperature from Rankine to Kelvin.
    function RankineToKelvin($temperature)
    {
        return $temperature / 1.8;
    }
 
    // Converts a given temperature from Rankine to Newton.
    function RankineToNewton($temperature)
    {
        return ($temperature - 491.67) * 11 / 60;
    }
 
    // Converts a given temperature from Rankine to Reaumur.
    function RankineToReaumur($temperature)
    {
        return ($temperature * 5 / 9 - 273.15) * 4 / 5;
    }
 
    // Converts a given temperature from Rankine to Romer.
    function RankineToRomer($temperature)
    {
        return ($temperature - 491.67) * 7 / 24 + 7.5;
    }
 
    // Converts a given temperature from Reaumur to Celsius.
    function ReaumurToCelsius($temperature)
    {
        return $temperature * 5 / 4;
    }
 
    // Converts a given temperature from Reaumur to Delisle.
    function ReaumurToDelisle($temperature)
    {
        return (80 - $temperature) * 15 / 8;
    }
 
    // Converts a given temperature from Reaumur to Fahrenheit.
    function ReaumurToFahrenheit($temperature)
    {
        return $temperature * 9 / 4 + 32;
    }
 
    // Converts a given temperature from Reaumur to Kelvin.
    function ReaumurToKelvin($temperature)
    {
        return $temperature * 5 / 4 + 273.15;
    }
 
    // Converts a given temperature from Reaumur to Newton.
    function ReaumurToNewton($temperature)
    {
        return $temperature * 33 / 80;
    }
 
    // Converts a given temperature from Reaumur to Rankine.
    function ReaumurToRankine($temperature)
    {
        return $temperature * 9 / 4 + 491.67;
    }
 
    // Converts a given temperature from Reaumur to Romer.
    function ReaumurToRomer($temperature)
    {
        return $temperature * 21 / 32 + 7.5;
    }
 
    // Converts a given temperature from Romer to Celsius.
    function RomerToCelsius($temperature)
    {
        return ($temperature - 7.5) * 40 / 21;
    }
 
    // Converts a given temperature from Romer to Delisle.
    function RomerToDelisle($temperature)
    {
        return (60 - $temperature) * 20 / 7;
    }
 
    // Converts a given temperature from Romer to Fahrenheit.
    function RomerToFahrenheit($temperature)
    {
        return ($temperature - 7.5) * 24 / 7 + 32;
    }
 
    // Converts a given temperature from Romer to Kelvin.
    function RomerToKelvin($temperature)
    {
        return ($temperature - 7.5) * 40 / 21 + 273.15;
    }
 
    // Converts a given temperature from Romer to Newton.
    function RomerToNewton($temperature)
    {
        return ($temperature - 7.5) * 22 / 35;
    }
 
    // Converts a given temperature from Romer to Rankine.
    function RomerToRankine($temperature)
    {
       return ($temperature - 7.5) * 24 / 7 + 491.67;
    }
 
    // Converts a given temperature from Romer to Reaumur.
    function RomerToReaumur($temperature)
    {
        return ($temperature - 7.5) * 32 / 21;
    }
?>
