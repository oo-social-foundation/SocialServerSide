<?php

 $social = htmlspecialchars($_POST['social']);
 $age = htmlspecialchars($_POST['age']);
 $social2 = htmlspecialchars($_POST['social2']);
 
 $conn = new mysqli("localhost", "root", "", "social");
 
 if($conn->connect_error){
     die("ERROR: NON SI RIESCE A CONNETTERSIII" . $conn->connect_error);
 }
 
 $query = "INSERT INTO dati_form (social, $age, social2) VALUES ('$social', true , '$social2'); ";
 
 try
 {

        $success = $conn->query($quer);    
        if($success)
        {
            header("location: ../html/finish.php"); 
        }
        else
        {
            header("location: ../html/finishBad.php"); 

        }
    } 
    catch (Exception $ex)
    {
        header("location: ../html/finishBad.php"); 
    }
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 

