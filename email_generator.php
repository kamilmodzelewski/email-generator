<?php

function generate_emails($number = 1, $username_length = 24) {
    if (is_numeric($number) && $number != 0) {
        if ($number > 1000) { //put hard limit on generate request
            $number = 1000; 
        }
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $tld = array("com", "net", "biz"); 
        for ($i=0; $i<$number; $i++){
            $randomName = ''; 
            for($j=0; $j<$username_length; $j++){
                $randomName .= $characters[rand(0, strlen($characters) -1)];
            }
            $k = array_rand($tld); 
            $extension = $tld[$k]; 
            $fullAddress = $randomName . "@" ."example.".$extension; 
            $generated_emails[] = $fullAddress; 	
        }
            
    }
    
    return $generated_emails[0];
}