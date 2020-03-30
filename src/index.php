<?php

$sErrorPseudo = '';
$sErrorLogin = '';

if (isset($_POST))
{
    if (isset($_POST['pseudo']))
    {
        if (strlen($_POST['pseudo']) > 10)
        {
            $sErrorPseudo = 'Pseudo trop grand, 10 caractères max.';
        }
        elseif (empty($_POST['pseudo']))
        {
            $sErrorPseudo = 'Pseudo vide.';
        }
    }

    if (isset($_POST['login']))
    {
        if (strlen($_POST['login']) > 255)
        {
            $sErrorLogin = 'Mail trop grand, 10 caractères max.';
        }
        elseif (empty($_POST['login']))
        {
            $sErrorLogin = 'Mail vide.';
        }
    }
}

if (!empty($sErrorPseudo))
{
    echo '<div class="errorpseudo">'.$sErrorPseudo.'</div>';
}

if (!empty($sErrorLogin))
{
    echo '<div class="errorlogin">'.$sErrorLogin.'</div>';
}

include('index.html');