<?php
    $conn = new mysqli("localhost", "root", "", "bank");
    $accno = time();
    
    $conn->query("insert into users (email,password,accountno,name,uid,gender,phnno,address,dob) values ('$_POST[email]','$_POST[password]','$accno','$_POST[name]','$_POST[uid]','$_POST[gender]','$_POST[phnno]','$_POST[address]','$_POST[dob]');");
    echo '<script > 
    alert("Account Successfully Created!")</script>';
    
   
    ?>  