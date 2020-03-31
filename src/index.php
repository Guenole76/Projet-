<?php

$sErrorPseudo = '';
$sErrorLogin = '';
$sErrorPassword = '';
$sErrorPasswordComfirm = '';

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
            $sErrorLogin = 'Mail trop grand, 255 caractères max.';
        }
        elseif (empty($_POST['login']))
        {
            $sErrorLogin = 'Mail vide.';
        }
    }
    if (isset($_POST['password']))
    {
        if (strlen($_POST['password']) > 12)
        {
            $sErrorLogin = 'password trop grand, 12 caractères max.';
        }
        elseif (empty($_POST['password']))
        {
            $sErrorLogin = 'Password vide.';
        }
    }
    if (isset($_POST['password_confirm']))
    {
        if (strlen($_POST['password_confirm']) > 255)
        {
            $sErrorLogin = 'Password trop grand, 10 caractères max.';
        }
        elseif (empty($_POST['password_confirm  ']))
        {
            $sErrorLogin = 'Mot de passe comfirmer vide.';
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

if (!empty($sErrorPassword))
{
    echo '<div class="errorpassword">'.$sErrorPassword.'</div>';
}

if (!empty($sErrorPasswordComfirm))
{
    echo '<div class="errorpasswordcomfirm">'.$sErrorPasswordComfirm.'</div>';
}

include('index.html');