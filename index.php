<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello world</title>
</head>
<body>
   <?php 
   
   //Start Class
   class say {
   public $date, $time;
   public $letter="hello";
   
   }
  
$t1 = new say();

$t1->date=date("D-M-Y",time());

$t1->time=time();

echo $t1->date,"<br>", $t1->time, "<br>", $t1->letter;

echo "<br>";

$phone = array("iphone", "samungs3", "nokia");
echo "Best Phone " . $phone[0] . ", " . $phone[1] . "and  " . $phone[2];
 
    ?>
</body>
</html>