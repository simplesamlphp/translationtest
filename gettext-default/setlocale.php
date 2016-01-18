<?php

bindtextdomain('test1', '../locale');

$locales = array('en_US', 'es_ES', 'nb_NO', 'sv_FI', 'nonexistent');

$text = "Hello, untranslated world!";
echo "<p>Original string: $text</p>";

foreach ($locales as $locale) {
    echo '<p>';
    echo "Trying to set locale: $locale";
    echo '<br>';
    $res = setlocale(LC_ALL, $locale);
    textdomain('test1');
    echo "Result of setlocale: $res\n";
    echo '<br>';
    echo _($text);
    echo '<br>';
    echo '</p>';
}
?>
