<?php
spl_autoload_register(function($classname) {
  $pattern = "/^(msfidelis\\\\cryptoUtils)\\\\(.*)$/";
  if (preg_match($pattern, $classname)) {
    $classname = preg_replace($pattern, '$2', $classname);
    $filename = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . preg_replace("/(\/|\\\\)/", DIRECTORY_SEPARATOR, $classname) . '.php';
    if (file_exists($filename)) {
      require_once($filename);
    }
    return null;
  }
});
