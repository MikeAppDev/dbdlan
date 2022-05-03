<?php
//FONCTION INTERNAUTE AUTHENTIFIE
function connect()
{
        //Si l'indice User n'est pas défini dans la session, cela veut dire que l'internaute ne s'est pas connecté ou n'est pas inscrit sur le site.
    if(!isset($_SESSION['user']))
    {
        return false;
    }
    else // Sinon l'indice 'user' est définit dans la session, l'internaute est bien authentifié.
    {
        return true;
    }
}

// FONCTION INTERNAUTE ADMINISTRATEUR
function adminconnect()
{
    //Si l'internaure est authentifié et que l'indice statut dans la session a bien pour valeur 'admin', cela veut dire que l'internaute est l'administrater du site.
    if(connect() && $_SESSION['user']['statut'] == 'admin')
    {
        return true;
    }
    else // Sinon, l'internaute n'est pas 'admin' et n'est peut être même pas connecté ni inscrit.
    {
        return false;
    }
}