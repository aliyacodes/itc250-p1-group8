<?php
echo '
    
    <form method = "post" action = "index.php">
    <h1>Temperature Converter</h1>
    Enter a temperature <input type ="number" name="TempDegree" /><br />
    <select name="Temp1">
        <option value="f">Fahrenheit</option>
        <option value="c">Celsius</option>
        <option value="k">Kelvin</option>
    </select>
    <p>to</p>
    <select name="Temp2">
        <option value="f">Fahrenheit</option>
        <option value="c">Celsius</option>
        <option value="k">Kelvin</option>
    </select>
    <br>
    <input type ="submit" value="Convert" /><br />
    </form>
    ';//User Interface

if($_POST){//show conversion
    $temp1 = $_POST['Temp1'];
    $temp2 = $_POST['Temp2'];
    $tempIn = $_POST['TempDegree'];
   
    //Error message if no input 
    if($tempIn == NULL){
        echo 'Enter a temperature';
    }
    else if($temp1 == $temp2){
        echo $tempIn;
        
    }else if($temp1 == 'f' && $temp2 == 'c'){
        echo '<h3><font color="red">' . 5/9*($tempIn-32) . ' C</font></h3>';
        
    }else if($temp1 == 'f' && $temp2 == 'k'){
        echo '<h3><font color="red">' . 5/9*($tempIn-32)+273 . ' K</font></h3>';
        
    }else if($temp1 == 'c' && $temp2 == 'f'){
        echo '<h3><font color="red">' . 9/5*($tempIn)+32 . ' F</font></h3>';
        
    }else if($temp1 == 'c' && $temp2 == 'k'){
        echo '<h3><font color="red">' . $tempIn+273 . ' K</font></h3>';
        
    }else if($temp1 == 'k' && $temp2 == 'f'){
        echo '<h3><font color="red">' . 9/5*($tempIn-273)+32 . ' F</font></h3>';
        
    }else if($temp1 == 'k' && $temp2 == 'c'){
        echo '<h3><font color="red">' . $tempIn-273 . ' C</font></h3>';
        
    }
    
}
