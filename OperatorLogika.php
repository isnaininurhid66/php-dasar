<?php

var_dump(true && true);
var_dump(false && true);
var_dump(true && false);
var_dump(false && false);    //AND

var_dump(true || false);
var_dump(true || true);  
var_dump(false || true);  
var_dump(false || false);     // OR

var_dump(true xor false);   // XOR
var_dump(false xor true);
var_dump(true xor true);
var_dump(false xor false);  //NOT

var_dump(!true);
var_dump(!false);