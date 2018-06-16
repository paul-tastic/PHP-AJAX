<?php

$AIGuess[] = "avoid the IRS";
$AIGuess[] = "bake cookies (I like that one too)";
$AIGuess[] = "catch a tiger's tail";
$AIGuess[] = "donate used scratch-off tickets to friends";
$AIGuess[] = "fall on top of a spire";
$AIGuess[] = "shine shoes";
$AIGuess[] = "golf (this is the only normal hobby I have in my list)";
$AIGuess[] = "integrate new curtains into your home decor";
$AIGuess[] = "justify your tiny-spoon collection";
$AIGuess[] = "kindle an old flame";
$AIGuess[] = "lament that you sold your Apple stock in the 90's";
$AIGuess[] = "make a triceratops toy for your nephew";
$AIGuess[] = "navigate down the mississippi river";
$AIGuess[] = "order 3 new cats from Amazon";
$AIGuess[] = "question authority";
$AIGuess[] = "restore furniture legs for other people";
$AIGuess[] = "sing Adele songs on the street";
$AIGuess[] = "tuck other people's shirts in";
$AIGuess[] = "underestimate your fencing opponent";
$AIGuess[] = "vacuum your nail clippers";
$AIGuess[] = "wind up your drone";
$AIGuess[] = "xray your cat";
$AIGuess[] = "yawn... enough said";
$AIGuess[] = "zero in on some sushi!";
$AIGuess[] = "hang pictures";
$AIGuess[] = "hangman";
$AIGuess[] = "hand someone a hammer";
$AIGuess[] = "mow yard";
$AIGuess[] = "burn CDs";
$AIGuess[] = "farm tomatoes";
$AIGuess[] = "eat shoe leather";
$AIGuess[] = "rack billiards";
$AIGuess[] = "dig a trench";
$AIGuess[] = "pop ballons";
$AIGuess[] = "pop goes the weasel";
$AIGuess[] = "pop pimples";
$AIGuess[] = "pop rocks";
$AIGuess[] = "play hide and go seek";
$AIGuess[] = "play dressup";
$AIGuess[] = "play doctor";
$AIGuess[] = "play cassette tapes";
$AIGuess[] = "eat steaks";
$AIGuess[] = "eat crow";
$AIGuess[] = "eat pieces of **** for breakfast";

$q = $_REQUEST["q"];

$guess = "";

// look up guess from the array
if ($q !== "") {
	// show guess
	$q = strtolower($q);
	$length = strlen($q);
	foreach($AIGuess as $guessName) {
		if (stristr($q, substr($guessName, 0, $length))) {
			if ($guess === "") {
				$guess = $guessName;
			} else {
				$guess .= ", or $guessName";
			}
		}
	}
}

echo $guess === "" ? "you are so unique I have no ideas" : $guess;

?>