<?php
const PI = 3.14; // float
define("EARTH_IS_FLAT", false); // boolean
const UNKNOWN = null; // null
define("APP_ENV", "dev"); // string
const MAX_SESSION_TIME = 60 * 60; // integer, using (scalar) expressions is ok
const APP_LANGUAGES = ["de", "en"]; // arrays
define("BETTER_APP_LANGUAGES", ["lu", "de"]); // arrays

echo EARTH_IS_FLAT;
echo PI;
var_dump(BETTER_APP_LANGUAGES);
?>