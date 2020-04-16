<?php
if(isset($_POST['submit'])){
    $userText = $_POST['userText'];
    function vowelCount($userText){
        $vowels = Array('a','e','i','o','u');
        $userText = mb_strtolower($userText);
        $userText = trim($userText);
        $total = 0;
        for( $i = 0; $i<strlen($userText); $i++){
            for ($j = 0; $j<5; $j++)
            if ($userText[$i] == $vowels[$j])
            {
                $total++;
            }
        }
       return $total;
    }
    echo "Number of vowels : <span style='color:green; font-weight:bold;'>" .vowelCount($userText)."</span>";
}


?>