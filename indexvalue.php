<?php
date_default_timezone_set('Europe/Berlin');

// data array
$data_array = [];

// info for the array
$info_a = "Lorem Ipsum.";
$info_b = "Nulla consequat massa.";

// add elements to the array with indices
addElement($data_array, $info_a);
addElement($data_array, $info_b);

// display output
echo printArray($data_array, 'Array with additional indices');

// additional info for the array
$data_array[] = ['value'=>"Lorem ipsum dolor sit amet."];
$data_array[] = ['value'=>"At vero eos et accusam et justo."];
$data_array[] = ['value'=>"Cum sociis natoque."];

// display output
echo printArray($data_array, 'Added elements without indices');

// add missing indices
addIndices($data_array);

// display output
echo printArray($data_array, 'Added the indices');


/* --------------- function declaration --------------- */

function addElement(&$array, $info)
{
    // add info to the array
    $array[] = [
        'value'=>$info
    ];
    // get the key of the current array
    end($array);
    $key = key($array);
    // reset the pointer
    reset($array);
    // add this information to the array
    $array[$key]['data_array_index'] = $key;
}

function addIndices(&$data_array)
{
    // find highest defined index
    $highest_index = 0;
    foreach ($data_array as $data) {
        if (isset($data['data_array_index']) && $data['data_array_index'] > $highest_index) {
            $highest_index = $data['data_array_index'];

        }
    }
    // apply index where necessary
    foreach ($data_array as &$data) {
        if (!isset($data['data_array_index'])) {
            $data['data_array_index'] = ++$highest_index;
        }
    }
    
}

function printArray($data_array, $headline = '')
{
    $str = '';
    $str .= !empty($headline) ? '<b>'.$headline.'</b><br/>' : '';
    $str .= '<pre>'.PHP_EOL;
    $str .= print_r($data_array, true).PHP_EOL;
    $str .= '</pre>'.PHP_EOL;
    return $str;
}
