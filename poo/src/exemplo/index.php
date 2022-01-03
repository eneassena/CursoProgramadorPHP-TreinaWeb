<?php 

require __DIR__."/vendor/autoload.php";

date_default_timezone_set("America/Bahia");
// date_default_timezone_get();


use Poo\poo01\Exemplo;
// use \stdClass;

$exp = new stdClass;
$exp->nome = "Eneas";
$exp->email = "eneas@eneas.com";
$exp->senha = "123456987";
$exp->token = md5("123456987:60*60*1");
$exp->refresh_token = md5("123456987:60*60*3");

$h = (int) date('H');
$m = (int) date('i');
$limit = 45;
if($m + $limit < 60) {
    $m += $limit; 
} else {
    $r = $m + $limit;
    $temp = 0;
    if($r - 60 > 0){
        $temp = $r - 60;
        // $m = $temp;
        $m = strlen($temp) == 1 ? '0'.$temp : $temp;
    }
    $h += 1;
    $exp->time_exp = "$h:$m:".date('s');
    // var_dump($r - 60 > 0, "$h:$m:".date('s'));
}

// $exp->time_cre = date('H:i:s');
// var_dump($_COOKIE['user_cliente']);
// $data = serialize($_POST);




$form = "
    <h1>Login User</h1>
    <form action='#' method='POST'  >
        <label>Login</label>
        <input type='text' name='login' />
        <label>Login</label>
        <input type='password' name='senha'/>
        <input type='submit' value='Logar' />
    </form>
";

echo $form;
echo '<pre>';


var_dump($_POST);
// var_dump($_COOKIE);

// $ex = new Exemplo($exp=$exp);

// printf("%s", var_export($ex));




