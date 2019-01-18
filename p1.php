<?php

    $conversion = $_POST['Conversion'];
    $temp = $_POST['temperature'];

switch($conversion){
        
    case 'FtoC': 
        
        $equation = ($temp - 32) * 5/9;
        
    break;
        
    case 'CtoF': 
        $equation = ($temp * 9/5) + 32;
        
    break;
        
    case 'FtoK': 
        $equation = ($temp - 32) * 5/9 + 273.15;
        
    break;
        
    case 'KtoF': 
        $equation = ($temp - 273.15) * 9/5 + 32;
        
    break;
        
    case 'CtoK': 
        $equation = $temp + 273.15;
        
    break;
        
    case 'KtoC': 
        $equation = $temp - 273.15;
       
    break;
        
        
}  

if(isset($_POST['Conversion'])){// show conversion
    
    echo "<h2 align=center><font color=blue>". $temp ."</font> degrees converts to ";
  	echo "<font color=red>" . (round($equation, 2)) ."</font>!";
  	echo '<br><a href="http://www.ibssawado.dreamhosters.com/itc250/p1.php">Reset page</a>';
    
}else{// show form
    echo '
    <form action="" method="post">
    Please select the conversion method: <br/>
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