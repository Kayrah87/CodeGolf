<?php

class CodeGolf
{

    public static function findPangrams($phrases)
    {
        //this can be done with Regexp but lets get it working first

        $correctPhrases = [];
        foreach ($phrases as $phrase) {
            $checkingCharacters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

            foreach ($checkingCharacters as $index => $checkingCharacter) {
                if (strpos(strtolower($phrase), $checkingCharacter) !== false) {
                    unset($checkingCharacters[$index]);
                }
            }
            if (count($checkingCharacters) == 0) {
                $correctPhrases[] = $phrase;
            }
        }

        return $correctPhrases;
    }
}

$phrases = [
    'I am coming in out of the cold for some soup',
    'The quick brown fox jumps over the lazy dog', //correct
    'I am the walrus coo coo cachoo',
    'The Kids are not alright',
    'Glib jocks quiz nymph to vex dwarf.', //correct
];

var_dump(CodeGolf::findPangrams($phrases));

?>