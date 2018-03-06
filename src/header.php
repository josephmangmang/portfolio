<?php

function printHostName() {
    echo gethostname();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Joseph Mangmang &ndash; Android developer</title>
        <meta name="description" content="Joseph Mangmang &ndash; an Android engineer living in Carmen, Bohol, Philippines.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="google-site-verification" content="TODO">
        <meta name="theme-color" content="#111111">

        <meta name="og:type" content="website">
        <meta name="og:title" content="<?php printHostName() ?>">
        <meta name="og:description" content="Joseph Mangmang &ndash; an Android engineer living in Carmen, Bohol, Philippines.">
        <meta name="og:site_name" content="Joseph Mangmang">
        <meta name="og:url" content="http://<?php printHostName() ?>">
        <meta name="og:image" content="http://<?php printHostName() ?>/res/bg.jpg">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,700" type="text/css">
        <link rel="stylesheet" href="res/main.css" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <link rel="icon" type="image/png" sizes="192x192" href="res/favicon-192.png">
        <link rel="icon" type="image/png" sizes="64x64" href="res/favicon-64.png">
        <link rel="icon" type="image/png" sizes="16x16" href="res/favicon-16.png">
    </head>
