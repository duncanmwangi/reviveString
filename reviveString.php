<?php

/**
 * reviveString calculates all unique possible substrings of the given string $string,
 * sorts them lexigraphically (for a string 'abc': 'a', 'ab', 'abc', 'b', 'bc', ...),
 * concatenates all substrings and returns the $k-th letter (1-indexed).
 * 
 * @param string str The string to be checked
 * @param int    k   The 1-indexed letter to be returned
 *
 * @return string The letter at the $k-th position
 */


function reviveString(string $string, int $k): string {
	$substrings = [];
    for($i=0; $i<strlen($string); $i++){
    	$sub = substr($string, $i);
    	for($r=1; $r<=strlen($sub);$r++) {
    		$newstr = substr($sub,0, $r);
    		if(!in_array($newstr, $substrings)){
    			$substrings[]=$newstr;
    			$newstr = null;
    		}
    		
    	}
    	$sub = null;
    }
    sort($substrings);
    $sorted_str = implode('', $substrings);
    $kth_letter = substr($sorted_str, $k-1,1);
    $substrings=null;
    $sorted_str=null;
    return $kth_letter;

}
