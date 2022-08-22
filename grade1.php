<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System (Switch)</title>
</head>
<body>
    <?php 
    
    $grade = 85; // user input 

switch ($grade) {
    case $grade <= 33:
        echo "Your garde is F";
        break;
  case $grade <= 39:
    echo "Your garde is D";
    break;
  case $grade <= 49:
    echo "Your garde is C";
    break;
  case $grade <= 59:
    echo "Your garde is B";
    break;
  case $grade <= 69:
    echo "Your garde is A-";
    break;
  case $grade <= 79:
    echo "Your garde is A";
    break;
  case $grade <= 100:
    echo "Your garde is A";
    break;

  default:
    echo "Enter Your Correct Value!";
}
    
    ?>
</body>
</html>