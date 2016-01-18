<?php

require '../vendor/autoload.php';

use Gettext\Translations;
use Gettext\Translator;

$locales = array('en', 'es', 'nb');

$text = "Hello, untranslated world!";
echo "<p>Original string: $text</p>";

foreach ($locales as $locale) {
    // START setup
    echo '<p>';
    echo "Trying to set locale: $locale";
    echo '<br>';
    $translations = Translations::fromPoFile("../locale/$locale/LC_MESSAGES/test1.po");
    echo '<br>';
    $t = new Translator();
    $t->loadTranslations($translations);
    Translator::initGettextFunctions($t);
    // END setup
    echo __($text);
    echo '<br>';
    echo '</p>';
}
?>
