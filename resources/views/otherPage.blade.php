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
    

    $ar1 = array('token' => 123321,'amount' => 12,'desc' => "yep" );
   $object= new stdClass();
   $object->one=123;
   $object->gate="force";
   $object->gate=(object)$ar1;
    echo "<pre>";
   var_dump($object);
    // $data=session()->pull('missing');
    //  var_dump($data);
    //  $data =session('missing');
    //  var_dump($data);
    
    ?>
</body>
</html>