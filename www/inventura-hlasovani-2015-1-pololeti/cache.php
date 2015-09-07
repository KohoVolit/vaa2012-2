<?php
  // Adapted for The Art of Web: www.the-art-of-web.com
  // Based on PHP code by Dennis Pallett: www.phpit.net
  // Please acknowledge use of this code by including this header.


  // location and prefix for cache files
  // note: it requires whole path
  $path_array = explode('/',$_SERVER['SCRIPT_FILENAME']);
  array_pop($path_array);
  define('CACHE_PATH', implode('/',$path_array) . "/cache/");

  // how long to keep the cache files (hours)
  define('CACHE_TIME', 12);

  // return location and name for cache file
  function cache_file()
  {
    return CACHE_PATH . md5($_SERVER['REQUEST_URI']);
  }

  // display cached file if present and not expired
  function cache_display()
  {
    $file = cache_file();

    // check that cache file exists and is not too old
    if(!file_exists($file)) return;
    if(filemtime($file) < time() - CACHE_TIME * 3600) return;

    // if so, display cache file and stop processing
    echo gzuncompress(file_get_contents($file));
    exit;
  }

  // write to cache file
  function cache_page($content)
  {
    $f = fopen(cache_file(), 'w');
    if(false !== $f) {
      fwrite($f, gzcompress($content));	
      fclose($f);
    }
    return $content;
  }

  // execution stops here if valid cache file found
  cache_display();

  // enable output buffering and create cache file
  ob_start('cache_page');

?>
