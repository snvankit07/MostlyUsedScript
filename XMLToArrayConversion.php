<?php

function xml2array($input, $callback = null, $recurse = false) {
// Get input, loading an xml string with simplexml if its the top level of recursion
    $data = ((!$recurse) && is_string($input)) ? simplexml_load_string($input) : $input;
// Convert SimpleXMLElements to array
    if ($data instanceof SimpleXMLElement || $data instanceof stdClass) {
        $data = (array) $data;
        if (count($data) == 0)
            $data = '';
    }

// Recurse into arrays
    if (is_array($data))
        foreach ($data as &$item)
            $item = xml2array($item, $callback, true);
// Run callback and return
    return (!is_array($data) && is_callable($callback)) ? call_user_func($callback, $data) : $data;
}
