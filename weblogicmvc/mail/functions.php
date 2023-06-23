<?php

function redirectWithError($error)
{
    $_SESSION['_contact_form_error'] = $error;

  //  $this->redirectToRoute('cliente', 'index');
    // echo "<script>alert('Error: ".$error."');</script>";
    die();
}

function redirectSuccess()
{
    $_SESSION['_contact_form_success'] = true;

   // header('Location: '.$_SERVER['HTTP_REFERER']);
    // echo "<script>alert('Your message was sent successfully!');</script>";
    die();
}
