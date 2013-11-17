<html>
	<head>
	<title>Matt's form</title>
	</head>
	<body>

	<h1>Adding an entry:</h1>
	<form action="index.php" method='post'>
	<label for='example'>Example:</label><input name='example' /><br />
	<label for='gloss'>Gloss:</label><input name='gloss' /><br />
	<label for='tags'>Tags:</label><input name='tags' /><br />


	<input type='submit' value='Add text'>
	</form>


	<?php

	// Create the data array
	$example = $_POST['example'];
	$gloss = $_POST['gloss'];
	$tags = $_POST['tags'];

	$data = "Example: $example\nGloss: $gloss\nTags: $tags\n";

	echo "New entry added:\n$data";

	// Open the text file
	$f = fopen("records.txt", "a");

	// Write text
	fwrite($f, $data);

	// Close the text file
	fclose($f);

	// Open file for reading, and read the line
	$f = fopen("records.txt", "r");

	//echo "Data submitted.";

	// Read text
	//echo fgets($f); 
	//fclose($f);

	?>

	
	</body>

	</html>