<?php
echo 'This is a simple string<br>';

echo 'You can also have embedded newlines in strings this way as it is okay to do<br>';

//outputs: Arnold once said I'll be back"
echo 'Arnold once said : "I\'ll be back"<br>';

//outputs: You deleted C:\*.*?
echo 'You Deleted C:\\*.*?<br>';

//outputs: You deleted C:\*.*?
echo 'You Deleted C:\*.*?<br>';

//outputs: this will not expand: \n in a newline
echo nl2br ("This will not expand: \n in a newline<br>");

//Outputs: Variabels do not $expand $either
echo "Variabels do not $expand $either<br>";
?>