<?php

function saberUri()
{
  $uri = $_SERVER['REQUEST_URI'];
  $uriSeparada = explode('/', $uri);
  array_shift($uriSeparada);
  var_export($uriSeparada);
}
