# Pig Latin in PHP

Implement a function that returns true/false if word is Pig Latin

Pig Latin is a made-up children's language that's intended to be
confusing. It obeys a few simple rules (below), but when it's spoken
quickly it's really difficult for non-children (and non-native speakers)
to understand.


- **Rule 1**: If a word begins with a vowel sound, add an "ay" sound to
  the end of the word.
- **Rule 2**: If a word begins with a consonant sound, move it to the
  end of the word, and then add an "ay" sound to the end of the word.
- **Rule 3**:If a word begins with a consonant sound, move it to the end 
  of the word and then add an "ay" sound to the end of the word. Consonant 
  sounds can be made up of multiple consonants, a.k.a. a consonant cluster 
  (e.g. "chair" -> "airchay").
- **Rule 4**:If a word contains a "y" after a consonant cluster or as the 
  second letter in a two letter word it makes a vowel sound 
  (e.g. "rhythm" -> "ythmrhay", "my" -> "ymay").


**Technology**

- PHP

- PHPUnit


 **Main Packages**

- PHPUnit =>7.0 was used for testing


 **How to run**
- Clone from Github
```bash
git clone https://github.com/sethbilly/pigify_pig_latin.git

cd pigify_pig_latin


## Making the Test Suite Pass

1. Execute the tests for the PigLatin function.
        % composer test



-There are a few more rules for edge cases, and there are regional
variants too.

-See <http://en.wikipedia.org/wiki/Pig_latin> for more details.
