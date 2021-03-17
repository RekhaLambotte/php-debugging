<?php
echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);

$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

new_exercise(5);

$arr = [];
for ($letter = "a"; $letter <= "z"; $letter++) {
    array_push($arr, $letter);
    if($letter=="z"){
        break;
    };
}
print_r($arr); 

new_exercise(6);
$arr = [];

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    echo implode(" - ", $params);
}

function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }
    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes))][rand(0, 10)];
    return $randname;
}

echo "Here is the name: " . combineNames();

echo "Correction";
// Pas besoin 
//function combineNames($str1 = "", $str2 = "") {
//     $params = [$str1, $str2];
//     foreach($params as &$param) {
//         if ($param == "") {
//             $param = randomHeroName();
//         }
//     }
//     echo implode(" - ", $params);
// }

// function randomGenerate($arr, $amount) {
//     for ($i = $amount; $i > 0; $i--) {
//         array_push($arr, randomHeroName());
//     }
//     return $amount;
// }

function randomHeroNameC()
{
    $hero_firstnamesC = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnamesC = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroesC = [$hero_firstnamesC[array_rand($hero_firstnamesC)], $hero_lastnamesC[array_rand($hero_lastnamesC)]];
    $randnameC = $heroesC[rand(0,count($heroesC))][rand(0, 10)];
    return $randnameC;
}

echo "Here is the name: " . combineNames();

new_exercise(7);
function copyright($year) {
    return "&copy; $year BeCode";
}

echo copyright(date('Y'));

new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith ';
    }
    else return ' No access';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');


new_exercise(10);
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];

$count = count($areTheseFruits);
for($i=0; $i <= $count-1 ; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset ($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);

echo "correction";

$areTheseFruitsC = array_intersect($areTheseFruits, $validFruits);

var_dump($areTheseFruitsC);