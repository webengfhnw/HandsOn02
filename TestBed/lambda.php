<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 09.10.2017
 * Time: 08:51
 */

// Regular function
function helloRegularFunction()
{
    return "Say hello to my regular function\r\n";
}

echo helloRegularFunction(); // Returns "Say hello to my regular function"

// Anonymous function
function ()
{
    return "Say hello to my anonymous function\r\n";
};

// Lambda function (anonymous function, which is assigned to a variable)
$helloLambda = function () {
    return "Say hello to my Lambda function\r\n";
};

// Call Lambda function
echo $helloLambda(); // Returns "Say hello to my Lambda function"

// Passing Lambda to a function, which is known as a callback.
function regularFunctionSimple($callbackFunction)
{
    echo $callbackFunction(); //Call the callback
}

// Call regular function and passing an anonymous function
regularFunctionSimple(function () {
    return "Say hello to my anonymous function\r\n";
}); // Returns "Say hello to my anonymous function"

// Call regular function and passing a Lambda function
regularFunctionSimple($helloLambda); // Returns "Say hello to my Lambda function"

// Passing Lambda to a function and call it explicitly with the call_user_func function
function regularFunctionExplicit($callbackFunction)
{
    echo call_user_func($callbackFunction); //Call the callback
}

// Call regular function and passing a Lambda function
regularFunctionExplicit($helloLambda); // Returns "Say hello to my Lambda function"

// Lambda function (anonymous function, which is assigned to a variable) with two parameters
$helloLambdaParameter = function ($param1, $param2) {
    return "Say hello to my Lambda function with ". $param1 . " and " . $param2 . "\r\n";
};

// Passing Lambda and an array containing parameters to a function, and call it with the call_user_func_array function
function regularFunction($callbackFunction, $param_array)
{
    echo call_user_func_array($callbackFunction, $param_array); //Call the callback and passing the parameters
}

// Call regular function and passing a Lambda function with a parameter array
regularFunction($helloLambdaParameter, array("param one","param two")); // Returns "Say hello to my Lambda function with param one and param two"