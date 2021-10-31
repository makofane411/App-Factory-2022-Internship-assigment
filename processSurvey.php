<?php

include ("connect.php");
include("takeSurvey.php");

//get the inputed values from takeSurvey page
$surname=$_POST["surname"];
$firstName=$_POST["firstName"];
$contactNumber=$_POST["contactNumber"];
$date=$_POST["date"];
$age=$_POST["age"];

//getting the checkbox 
$checkbox1=$_POST["foodName"];


//getting the radio data
$title1="I like to eat out";
$title2="I like to watch movies";
$title3="I like to watch TV";
$title4="I like to listen to the radio";

$out=$_POST["out"];
$movies=$_POST["movies"];
$TV=$_POST["TV"];
$radio=$_POST["radio"];

//process above information to database
//if(isset($_POST['submit']))
//{
  $sql = "INSERT INTO personaldetails (surname, firstName, contactNumber,date,age)
  VALUES ('$surname', '$firstName', $contactNumber,'$date',$age)";

if ($conn->query($sql) === TRUE)
 {
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
         $query = "INSERT INTO demo (name) VALUES ('$item')";
         $query_run = mysqli_query($conn, $query);  
       }  
    //$in_ch=mysqli_query($conn,"INSERT INTO foodtype (name) VALUES ('$chk')");  
   // if($in_ch==1)  
     //  {  
           
       }  else{
        echo "survey failed";

       }

    $sqlout = "INSERT INTO scale (point,title)
    VALUES ($out,'$title1')";
     if ($conn->query($sqlout) === TRUE)
     {
        $sqlmovies = "INSERT INTO scale (point,title)
        VALUES ($movies,'$title2')";
         if ($conn->query($sqlmovies) === TRUE)
         { 
            $sqlTV = "INSERT INTO scale (point,title)
            VALUES ($TV,'$title3')";
            if ($conn->query($sqlTV) === TRUE)
            { 
                $sqlRadio = "INSERT INTO scale (point,title)
                VALUES ($TV,'$title3')";
                 if ($conn->query($sqlRadio) === TRUE)
                 { 
                     echo "survey Successfully submitted";
                 }
            }
        }
     }
       
 
 
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

//}
$conn->close();


?>