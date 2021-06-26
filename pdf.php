<?php

class pdf{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function output():bool{
        if(file_exists($this->path)){
            $pdf = file_get_contents($this->path);
            header("Content-Type: application/pdf");
            echo $pdf;
            exit();
        }else{
            header("HTTP/1.1 404 Not Found");
            /*Add your 404 page link or include 404 file.*/
            exit(0);
        }
    }
}