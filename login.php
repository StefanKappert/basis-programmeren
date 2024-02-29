<?php

$gebruikersnaam = readline("geef gebruikersnaam:");

$wachtwoord = readline("geef wachtwoord:");

if($wachtwoord == 'deltion' && $gebruikersnaam == 'deltion'){
    echo "welkom je bent ingelogd";
}else{
    echo "geen toegang";
}

