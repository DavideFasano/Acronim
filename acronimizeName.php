<?php

function acronimizeName($name){
    $explodeName = explode(" ",$name);
    $correctNames = array_map('correctCase',$explodeName);
    return implode($correctNames);
}

function correctCase($name){
    // aAAa | AAA   ->  aaa
    $nameLowerCase = strtolower($name);
    //aaaa   ->   Aaaa
    $upperCaseName = ucfirst($nameLowerCase);
    $acronimName = preg_replace('/[a-z ]+/m','.',$upperCaseName);
    return $acronimName;
}