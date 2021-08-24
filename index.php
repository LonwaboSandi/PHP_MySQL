
<?php 

    error_reporting(E_ALL); 
    ini_set("display_errors","1"); 

    //Connect to mySql 
    $mysql = mysqli_connect('localhost','root','','mytutorial'); 

    if(!$mysql){
        echo "Error: unable to connect to MySql"; 
        echo "Debugging errno " . mysqli_connect_errno(); 
    }
    else{
        echo "Success able to connect to mysql"; 
    }


    $userTable = "INSERT into user(firstName,lastName,emailAddress,pass) 
    VALUES ('Lonwabo','Sandi','l.sandiAcademy@gmail.com','123er')"; 


    mysqli_query($mysql,$userTable); 

    mysqli_close($mysql); 

?>