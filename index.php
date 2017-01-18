<?php
echo '
    <title>Temperature Converter</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <form method = "post" action = "index.php">
    <h1>Temperature Converter</h1>
    Enter a temperature <input type ="number" step="0.01" name="TempDegree" /><br />
    <br>
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
    <br>
    <input type ="submit" value="Convert" /><br />
    <div>
    ';
if($_POST){//show data
    $temp1 = $_POST['Temp1'];
    $temp2 = $_POST['Temp2'];
    $tempIn = $_POST['TempDegree'];
   
    if($tempIn == NULL){
        echo 'Enter a temperature';
    }
    else if($temp1 == $temp2){
        if($temp1 == 'f')
        {
            echo $tempIn.'&#8457';
        }else if($temp1 == 'c')
        {
            echo $tempIn.'&#8451';    
        }else if($temp1 == 'k')
        {
            echo $tempIn.'&#8490';    
        }
        
        
    }else if($temp1 == 'f' && $temp2 == 'c'){
        echo $tempIn.'<span class="F">&#8457</span> = '.round(5/9*($tempIn-32),2).'<span class="C">&#8451</span>';
        
    }else if($temp1 == 'f' && $temp2 == 'k'){
        echo $tempIn.'<span class="F">&#8457</span> = '.round(5/9*($tempIn-32)+273,2).'<span class="K">&#8490</span>';
        
    }else if($temp1 == 'c' && $temp2 == 'f'){
        echo $tempIn.'<span class="C">&#8451</span> = '.round(9/5*($tempIn)+32,2).'<span class="F">&#8457</span>';
        
    }else if($temp1 == 'c' && $temp2 == 'k'){
        echo $tempIn.'<span class="C">&#8451</span> = '.round($tempIn+273,2).'<span class="K">&#8490</span>';
        
    }else if($temp1 == 'k' && $temp2 == 'f'){
        echo $tempIn.'<span class="K">&#8490</span> = '.round(9/5*($tempIn-273)+32,2).'<span class="F">&#8457</span>';
        
    }else if($temp1 == 'k' && $temp2 == 'c'){
        echo $tempIn.'<span class="K">&#8490</span> = '.round($tempIn-273,2).'<span class="C">&#8451</span>';
        
    }
    
}
echo 
    '
    </div>
    </form>
    ';
