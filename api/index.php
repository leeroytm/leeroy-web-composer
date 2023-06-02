<?php

require_once __DIR__ . '/../vendor/autoload.php';

Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT);

// Your PHP code to generate the content goes here
$content = '<h1>Hello, PHP!</h1>';
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Page</title>
</head>
<body>
    <?php echo $content; ?>
</body>
</html>
