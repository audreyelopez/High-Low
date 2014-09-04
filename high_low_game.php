<?php

$random_number = mt_rand(1, 100);

	if ($argc == 3) { 
		$random_number = mt_rand($argv[1] , $argv[2]);
		echo "The answer is between {$argv[1]} and {$argv[2]}\n";
		
		fwrite(STDOUT, "Guess!");
	}  else {
        echo "Pick a random number between 1 and 100\n"; 
		}



$times_guessed = 0;

do {
	// prompt
	$guess = trim(fgets(STDIN));
    $times_guessed++; 

	if($guess > $random_number) {
		fwrite(STDOUT, "Nope, Guess Lower!");
	}

	elseif($guess < $random_number) {
        fwrite(STDOUT, "Nuh-uh. -Guess Higher!");
    }

	else  {
		fwrite(STDOUT, "YOU WIN, YOU BEAUTIFUL GUESSER!!\nYou guessed my number in $times_guessed times!!");
	}


} 	while ($guess != $random_number);
   

?>














