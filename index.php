<?php

// Challenge 1
// $movieName = "Indiana Jones et la dernière croisade" ; 
// echo $movieName;

// $isSeen = false;
// echo $isSeen;

// $firstYearOfDiffusion = 1989;
// echo $firstYearOfDiffusion;

// $imdbRate = 8.3;
// echo $imdbRate;


// Challenge 3
// function codeBreakMachine ($message)
// {
//   $keyNumber = strlen($message) / 2;
//   $message = substr($message, 5, $keyNumber);
//   $message = str_replace ("@#?", " ", $message);
//   $message = strrev($message);
//   echo $message . PHP_EOL;
// }

// $mysteryMessage1 = "0@sn9sirppa@#?ia'jgtvryko1";
// $mysteryMessage2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
// $mysteryMessage3 = "aopi?sgnirts@#?sedhtg+p9l!";

// codeBreakMachine ($mysteryMessage1);
// codeBreakMachine ($mysteryMessage2);
// codeBreakMachine ($mysteryMessage3);

// Challenge 4.1
// $indianaMovies = ["Arche perdue" => 1981, "Temple maudit" => 1984, "Dernière croisade" => 1989];

// $indianaMovies;
// arsort($indianaMovies);

// foreach ($indianaMovies as $key => $firstYearOfDiffusion) {
//   echo $firstYearOfDiffusion . " - " . $key . PHP_EOL;
// }

// Challenge 4.2
// $indianaMovies = [
//   "Arche perdue" => ["Harrison Ford", "Karen Allen", "Paul Freeman"], 
//   "Temple maudit" => ["Harrison Ford","Kate Capshaw", "Jonathan Ke Quan"], 
//   "Dernière croisade" => ["Harrison Ford", "Sean Connery", "Denholm Elliott"],
// ];

// foreach ($indianaMovies as $movie => $actors) {
//   echo "Dans le film " . $movie . ", les acteurs principaux sont :" . PHP_EOL;
//   foreach ($actors as $actor) {
//     echo "- " . $actor . PHP_EOL;
//   }
// }

// Challenge 5
// $weapons = ['fists', 'whip', 'gun'];
// $opponentWeapon = $weapons[rand(0,2)];
// echo 'The bad guy comes to fight with his ' . $opponentWeapon . ' !!!' . PHP_EOL;
// match ($opponentWeapon)
// {
//   'fists' => $indyWeapon = 'gun',
//   'whip' => $indyWeapon = 'fists',
//   'gun' => $indyWeapon = 'whip',
// };

// echo 'Indy comes with his ' . $indyWeapon . ' and smashed the bad guy yeah !!!' ;

// Challenge 6
function writeSecretSentence(string $animal, string $element): string
{
  $determinant = "";
  match ($element)
  {
    "feu" => $determinant = "au ",
    "terre" => $determinant = "à la ",
    default => $determinant = "à l' ",
  };
  return "Le " . $animal . " s'incline face " . $determinant . $element;
}

$animals = ["pangolin", "paresseux", "macaque rhésus"];
$animals = $animals[rand(0, 2)];

$elements = ["terre", "air", "feu", "eau"];
$elements = $elements[rand(0, 2)];

echo writeSecretSentence($animals, $elements);


