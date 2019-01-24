<?php
    
if(isset($_POST['Conversion'])){//show conversion
    $conversion = $_POST['Conversion'];
    $temp = $_POST['temperature'];
    
    switch($conversion){
        case 'FtoC': 
            $equation = ($temp - 32) * 5/9;
            $unitOfMeasure1 = "Fahrenheit";
            $unitOfMeasure2 = "Celcius";   
        break;

        case 'CtoF': 
            $equation = ($temp * 9/5) + 32;
            $unitOfMeasure1 = "Celcius";
            $unitOfMeasure2 = "Fahrenheit"; 
        break;

        case 'FtoK': 
            $equation = ($temp - 32) * 5/9 + 273.15;
            $unitOfMeasure1 = "Fahrenheit";
            $unitOfMeasure2 = "Kelvin";   
        break;

        case 'KtoF': 
            $equation = ($temp - 273.15) * 9/5 + 32;
            $unitOfMeasure1 = "Kelvin";
            $unitOfMeasure2 = "Fahrenheit"; 
        break;

        case 'CtoK': 
            $equation = $temp + 273.15;
            $unitOfMeasure1 = "Celcius";
            $unitOfMeasure2 = "Kelvin"; 
        break;

        case 'KtoC': 
            $equation = $temp - 273.15;
            $unitOfMeasure1 = "Kelvin";
            $unitOfMeasure2 = "Celcius"; 
        break;      
                
    }  
    
    if(is_numeric($temp)){
        echo "<h2 align=center><font color=blue>". $temp ."</font> degrees ". $unitOfMeasure1 . " converts to ";
  	    echo "<font color=red>" . (round($equation, 2)) ."</font> degrees ". $unitOfMeasure2 . ".";
  	    echo '<br><a href="">Reset page</a>';
    } else {
        echo "enter a numberic variable";
        echo '<br><a href="">Reset page</a>';
    }     
       
}else{//show form
    echo '
    <form action="" method="post">
    Please select one of the conversion methods: <br/>
    <input type="radio" name="Conversion" value="FtoC"> Fahrenheit to Celsius <br/>
    <input type="radio" name="Conversion" value="CtoF"> Celsius to Fahrenheit <br/>
    <input type="radio" name="Conversion" value="FtoK"> Fahrenheit to Kelvin <br/>
    <input type="radio" name="Conversion" value="KtoF"> Kelvin to Fahrenheit <br/>
    <input type="radio" name="Conversion" value="CtoK"> Celsius to Kelvin <br/>
    <input type="radio" name="Conversion" value="KtoC"> Kelvin to Celsius <br/>
    
    Enter the temperature: <input type="text" name="temperature" /> <br/>
        <input type="submit" value="Calculate!" />   
    </form>
    ';
}

//THIS IS IBSSA'S EDIT TO THE CODE
//This is Liyun's edit to the code
//This is Michael's edit to the code