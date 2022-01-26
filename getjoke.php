<?php 

$currentday = date("z");

$jokeid = getjokeidfromcsv($currentday);
$actualjoke = getjokefromjokeid($jokeid);

function getjokeidfromcsv($currentday){
    $f =  file_get_contents('jokes.csv');
    $jokearray = explode (",", $f); 
    
    $jokedayid = $jokearray[$currentday];

    return $jokedayid;
}

function getjokefromjokeid($jokeid){
    $options = array(
        'http'=>array(
          'method'=>"GET",
          'header'=>"Accept: application/json" 
        )
    );

    $context = stream_context_create($options);

    $responsejson = file_get_contents('https://icanhazdadjoke.com/j/'.$jokeid, false, $context);
    $response = json_decode($responsejson, true);

    $actualjoke = $response["joke"];

    return $actualjoke;
}

?>