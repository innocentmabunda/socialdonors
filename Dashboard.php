<?php
include "Includes.php";
if(isset($_SESSION['username']))
{

}
else
{
    /* redirect to Loginform.php */
    header("Location: Loginform.php");
}
?>