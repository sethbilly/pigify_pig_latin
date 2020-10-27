<?php
class PigLatin 
{
    public const TAIL = "ay";

    public static function pigify(string $string) 
    {
        $words = explode(" ", $string);
        return implode(" ", array_map("PigLatin::pigifyWord", $words));
    }

    public static function pigifyWord(string $word)
    {
        $oddities = ["ch", "qu", "squ", "thr", "th", "sch"];
        
        // First rule 
        if (self::isVowel($word)) {
            return $word . self::TAIL;
        }

        // Second rule
        foreach($oddities as $oddity) 
        {
            if (substr($word, 0, strlen($oddity)) === $oddity) {
                return substr($word, strlen($oddity)) . $oddity . self::TAIL;
            }
        }

        // Third rule
        return substr($word, 1) . substr($word, 0, 1) . self::TAIL;
    }

    public static function isVowel($word) 
    {
        $vowels = ["a", "e", "i", "o", "u", "xr", "yt"];  // Includes pseudo-vowels xr,yt
        foreach($vowels as $vowel) 
        {
            if (substr($word, 0, strlen($vowel)) === $vowel) {
                return true;
            }
        }
        return false;
    }

    public static function isWordPigLatin(string $word) 
    {
        $len = strlen($word);
        if($len == 0 || $len < 4) {
            return false;
        }
        if(self::isVowel($word) & substr_compare($word, self::TAIL, -strlen(self::TAIL)) === 0) {
            return true;
        }
    }
}

?>