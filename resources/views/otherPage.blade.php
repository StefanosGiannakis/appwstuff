<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>I am the other Page</h1>
    <?php
    
    
    $data=session()->pull('missing');
     var_dump($data);
     $data =session('missing');
     var_dump($data);
    
    ?>
</body>
</html>