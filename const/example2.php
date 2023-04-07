<?php
// FORBIDDEN CONSTANT NAMES
define("true", false); // internal constant
define("false", true); // internal constant
define("CURLOPT_AUTOREFERER", "something"); // will fail if curl extension is loaded
// echo true;
// echo false;
// echo CURLOPT_AUTOREFERER;
?>