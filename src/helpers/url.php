<?php
function asset($path)
{
    return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/assets" . $path;
}

function assetd($path)
{
    return "http://localhost:5173/dist/" . $path;
}
