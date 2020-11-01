<!DOCTYPE html>
<html>
<body>

<h1>debdut My first PHP page</h1>

<?php
echo "Hello World!";



    $command = escapeshellcmd('python2 test.py');
    $output = shell_exec($command);
    echo $output;



?>

</body>
</html>
