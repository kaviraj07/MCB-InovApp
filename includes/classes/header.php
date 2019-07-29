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
            $outputLink =  "<link rel='stylesheet' href='".$this->link."'>";
        }

        echo
        "<!doctype html>
        <html lang='en'>
        
        <head>
            <!-- Required meta tags -->
            <meta charset='utf-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

            <link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

            <!-- Bootstrap CSS -->
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>".$outputLink.

            "<link rel='stylesheet' href='assets/css/footer.css'>
            
            <title>Homepage</title>
        </head>

        <body>";
    }
}