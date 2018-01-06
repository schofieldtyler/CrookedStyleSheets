<?php
session_start();

$action = $_REQUEST['action'];

if(!empty($_REQUEST['orientation']))
    $_SESSION['orientation'] = $_REQUEST['orientation'];

if(!empty($_REQUEST['width']))
    $_SESSION['width'] = $_REQUEST['width'];

if(!empty($_REQUEST['height']))
    $_SESSION['height'] = $_REQUEST['height'];


switch($action)
{
    case "screen_start":
        $_SESSION["started"] = date(DATE_RFC822);
        $_SESSION["device"] = "Screen";
    break;
    case "link1_clicked":
        $_SESSION["link1_clicked"] = date(DATE_RFC822);
        break;
    case "link2_clicked":
        $_SESSION["link2_clicked"] = date(DATE_RFC822);
        break;
    case "link3_clicked":
        $_SESSION["link3_clicked"] = date(DATE_RFC822);
        break;
    case "reset":
        session_unset();
        print("Results were cleared!");
        break;
}