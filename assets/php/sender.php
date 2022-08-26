<?php

session_start();

$bodyM = "null";

$receipt = "fl.ahmedbadia@gmail.com";

$name_tour     = $_POST['name_tour'];
if ($name_tour == "contact") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $comments = $_POST['message'];

    $bodyM = " Nouvelle  Contact ==>\n   Name :  $name \n Email : $email \n Message : $comments";
} else if ($name_tour == "transfer") {
    $genre_tour     = $_POST['genre_tour'];
    if ($genre_tour == "Arival") {
        $type_tour     = $_POST['type_tour'];
        $passenger     = $_POST['passenger'];
        $arrival     = $_POST['arrival'];
        $timearrival     = $_POST['timearrival'];
        $flightnumber     = $_POST['flightnumber'];
        $destinition     = $_POST['destinition'];
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $phone     = $_POST['phone'];
        $comments = $_POST['message'];

        $bodyM = " Nouvelle  Reservation ==> $name_tour  \n Type  : $type_tour \n Genre :  $genre_tour \n Date Arrival : $arrival \n Time Arrival : $timearrival \n Number of Flight : $flightnumber \n  Destination : $destinition  \n  Nombre Travelers : $passenger  \n Name :  $name \n Email : $email \n Number : $phone \n Message : $comments";

    }
    else if ($genre_tour == "Departure") {
        $type_tour     = $_POST['type_tour'];
        $passenger     = $_POST['passenger'];
        $departure     = $_POST['departure'];
        $timearrival     = $_POST['timedeparture'];
        $flightnumber     = $_POST['flightnumber'];
        $destinition     = $_POST['pickupadresse'];
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $phone     = $_POST['phone'];
        $comments = $_POST['message'];

        $bodyM = " Nouvelle  Reservation ==> $name_tour  \n Type  : $type_tour \n Genre :  $genre_tour \n Date Departure : $departure \n Time Departure : $timearrival \n Number of Flight : $flightnumber \n  Pick Up Point : $destinition  \n  Nombre Travelers : $passenger  \n Name :  $name \n Email : $email \n Number : $phone \n Message : $comments";

    }
    else{
        
        $type_tour     = $_POST['type_tour'];
        $passenger     = $_POST['passenger'];
        $arrival     = $_POST['arrival'];
        $timearrival     = $_POST['timearrival'];
        $flightnumber     = $_POST['arrivalflightnumber'];
        $flightnumberdeparture     = $_POST['departurflightnumber'];
        $destinition     = $_POST['destinationadresse'];
        $departure     = $_POST['departure'];
        $timedeparture     = $_POST['timedeparture'];
        $pickup     = $_POST['pickupadresse'];
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $phone     = $_POST['phone'];
        $comments = $_POST['message'];

        $bodyM = " Nouvelle  Reservation ==> $name_tour  \n Type  : $type_tour \n Genre :  $genre_tour \n Date Arrival : $arrival \n Date Departure : $departure \n Time Arrival : $timearrival  \n Time Departure : $timedeparture \n Number of Flight : $flightnumber \n Flight Number of Departure : $flightnumberdeparture  Destination : $destinition  \n Pick Up Point : $pickup \n  Nombre Travelers : $passenger  \n Name :  $name \n Email : $email \n Number : $phone \n Message : $comments";

    }
} else {

    $type_reservation     = $_POST['type_reservation'];
    $type_tour     = $_POST['type_tour'];

    $date     = $_POST['date'];
    $totalprice     = "12";
    $numbertravels     = $_POST['numbertravels'];

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone     = $_POST['phone'];
    $comments = $_POST['message'];
    //if (!(empty($email)) && !(empty($name)) && !(empty($phone)) && !(empty($comments))){
    $bodyM = " Nouvelle  Reservation ==> $type_tour a  $name_tour \n Type  : $type_reservation \n Date : $date \n Total Price : $totalprice \n Number : $numbertravels \n  Name :  $name \n Email : $email \n Number : $phone \n Message : $comments";
}
//$_SESSION["Etat"] = $bodyM;

//header('Location: ../../english/index.php?etat=true');
//mail($receipt, "Contact", $bodyM);
if($bodyM == "null")
    echo "failed";
else
{
    mail($receipt, "Reservation", $bodyM);
    echo "done";

}    


    
    /*
    $_SESSION["etat"] = "true";
    
            echo "Good" ;
            header('Location: ../../thankyou.php');
    }
    else
    {
        echo "not good" ;
    }*/
    
    /*echo "<br>";
    echo "<div class='alert alert-success'>";
	echo "<h3>E-mail envoyé avec succès.</h3>";
	echo "<p>Merci <strong>$name</strong>, votre message nous a été envoyer.</p>";
	echo "</div>";*/
   // header("Location: Contact.php");
    //echo $bodyM ;
