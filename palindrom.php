<?php
if(isset($_POST['submit'])){
    $userPalindrom = $_POST['palindrom']; 
}
function IsPalindrome($userPalindrom){
    $userPalindrom =  mb_strtolower($userPalindrom);
    $userPalindrom = trim($userPalindrom);
    $length = mb_strlen( $userPalindrom);
    $halfLength = floor($length / 2);
    $lastCharIndex = $length - 1;
    for ( $i = 0; $i < $halfLength; $i++ ) {
        if ( $userPalindrom[$i] != $userPalindrom[$lastCharIndex - $i] )
          return false;
      }
      return true;
}
$result = IsPalindrome($userPalindrom) ? '<p>Your text is palindrom</p>' : '<p>Your text is not palindrom</p>';
echo $result;
?>