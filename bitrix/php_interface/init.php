<?
function dump($var, $buffer = false, $die = false, $all = true): void
{
    global $USER;
    global $APPLICATION;
    if ($buffer) {
        $APPLICATION->RestartBuffer();
    }
    if ((is_object($USER) && $USER->IsAdmin()) || $all) {
        echo "<pre>" . print_R($var, true) . "</pre>";
    }
    if ($die) {
        die();
    }
}
?>