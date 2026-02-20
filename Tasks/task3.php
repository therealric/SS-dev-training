<?php

class Palindrome
{
    public static function isPalindrome($word)
    {
        $word = str_replace(" ", "", strtolower($word));
        $reverse = strrev($word);

        if ($reverse === $word) {
            return true;
        }

        return false;
    }
}

if (Palindrome::isPalindrome('Never Odd Or Even')) {
    echo 'Palindrome';
} else {
    echo 'Not palindrome';
}
