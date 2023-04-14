<?php
require_once __DIR__.'/Movie.php';
require_once __DIR__.'/Genere.php';

var_dump(new Movie("pierino",148,5,[new Genere("commedia","Lorem iillum. Illo deleniti laudan"),new Genere("dramma","Lorem iillum. Illo deleniti laudan")]));
var_dump(new Movie("boh",148,5,["prova"]));