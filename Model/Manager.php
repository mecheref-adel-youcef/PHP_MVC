<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=mini-projet-mca;charset=utf8', 'root', '');
        return $db;
    }
}