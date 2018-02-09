<?php
/*
 * autoload.php
 *
 * @package AMDG
 * @author Domokos Endre János <domokos.endrejanos@gmail.com>
 * @copyright 2018 Domokos Endre János
 * @license GNU General Public License v3 (https://opensource.org/licenses/GPL-3.0)
 *
 * @param string $class_name The fully-qualified class name.
 * @return void
 *
 */


define("DS", DIRECTORY_SEPARATOR);
define("PRD", dirname($_SERVER['DOCUMENT_ROOT'])); // Projekt Root Directory
define("PUB", $_SERVER['DOCUMENT_ROOT']); // PUBlic directory (e.g. public_html)
define("APP", PRD."/app"); // APPlication root directory
define("SRC", PRD."/src"); // SouRCe root directory


spl_autoload_register(function ($class_name) {

  $fully_qualified_name = explode("\\", $class_name);
  $prefix = strtolower(array_shift($fully_qualified_name));
  $class = array_pop($fully_qualified_name);
  $namespace = strtolower(implode(DS, $fully_qualified_name));

  $root = ($prefix == "app") ? APP.DS : SRC.DS ;
  $file = $root.$namespace.DS."src".DS.$class.".php";

  if (file_exists($file)) {
    # Begin gettext config
    bindtextdomain($class, $root.$namespace.DS."locale");
    bind_textdomain_codeset($class, 'UTF-8');
    textdomain($class);
    # end gettext config
    require $file;
  }

});

?>
