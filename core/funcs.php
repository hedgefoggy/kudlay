<?php



function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data) //dump and die
{
    dump($data);
    die;
}

function abort($code = 404)
{
    http_response_code(404);
    require VIEWS . "/errors/{$code}.tpl.php";
    die;
}




