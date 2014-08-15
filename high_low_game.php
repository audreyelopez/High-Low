<?php

$random_number = mt_rand(1, 100);

	if ($argc == 3) {
		echo "The answer is between {$argv[1]} and {$argv[2]}\n";
		
		fwrite(STDOUT, "Guess!");
	}  else {
        echo "Pick a random number between 1 and 100\n"; 
		}





do {
	// prompt
	$guess = trim(fgets(STDIN));

	if($guess > $random_number) {
		fwrite(STDOUT, "Nope, Guess Lower!");
	}

	elseif($guess < $random_number) {
        fwrite(STDOUT, "Nuh-uh. -Guess Higher!");
    }

	else  {
		fwrite(STDOUT, "YOU WIN, YOU BEAUTIFUL GUESSER!!");
	}


} 	while ($guess != $random_number);
   

?>














