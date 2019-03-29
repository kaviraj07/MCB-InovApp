<?php

class Header
{
    private $link;

    public function __construct($link) {
        $this->link = $link;
    }

    public function output(){
        $outputLink = "";

        if($this->link !== ""){
            $outputLink =  "<link rel='stylesheet' href='assets/css/".$this->link."'>";
        }

        echo
        "<!doctype html>
        <html lang='en'>
        
        <head>
            <!-- Required meta tags -->
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        
            <!-- Bootstrap CSS -->
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>".$outputLink.
            
            "<title>Homepage</title>
        </head>

        <body>";
    }
}