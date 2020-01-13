<section>
    <h1>BIO</h1>
<?php
    $user = getUserData();
foreach ($user as $userKey => $val){
    if($userKey == "experiences"){
        echo $userKey."<br>";
        foreach ($val as $key => $val2){
            foreach ($val2 as $key2 => $val3){
                echo $key2." : ".$val3."<br>";
            }
        }
    }elseif($userKey == "first_name") {
        echo "first name : ".$val."<br>";
    }else {
        echo $userKey." : ".$val."<br>";
    }
}
?>
</section>