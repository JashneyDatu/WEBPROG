<?php
$age = -8 ;

if ($age >=0 and $age <=12){
    echo "Child";
}elseif ($age >=13 and $age <=17){
    echo "Teenager";
}elseif ($age >=18 and $age <=59){
    echo "Adult";
}elseif ($age >=60){
    echo "Senior Citizen";
}else{
    echo "invalid";
}

?>