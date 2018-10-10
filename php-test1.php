<!----
URL :

https://www.codementor.io/blog/php-interview-questions-sample-answers-du1080ext

-------------------------->

<!--- Que : 1 -->
<?php

$a = '1';
$b = &$a;
//$b = "2$b";
echo $a.", ".$b; // 21, 21

?>
<!-- PHP Interview Question #14
The value of the variable input is a string 1,2,3,4,5,6,7. How would you get the sum of the integers contained inside input?
-->
<?php
echo array_sum(explode(',',$input));
?>

<!-- Que : 2
Suppose you receive a form submitted by a post to subscribe to a newsletter. This form has only one field, an input text field named email. How would you validate whether the field is empty? Print a message "The email cannot be empty" in this case.
-->
<?php
if(empty($_POST['email'])){
  echo "The email cannot be empty";
}
?>

<!-- Que : 3
Suppose that you have to implement a class named Dragonball. This class must have an attribute named ballCount (which starts from 0) and a method iFoundaBall. When iFoundaBall is called, ballCount is increased by one. If the value of ballCount is equal to seven, then the message You can ask your wish is printed, and ballCount is reset to 0. How would you implement this class?
-->
<?php
class dragonBall{
  private $ballCount;

  public function __construct(){
    $this->ballCount=0;
  }

  public function iFoundaBall(){
    $this->ballCount++;
    if($this->ballCount===7){
      echo "You can ask for your wish.";
      $this->ballCount=0;
    }
  }
}
?>