<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как стать партнером");
?>салам<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
function test_dump($var, $die = false, $all = false)
{
    global $USER;
    if( ($USER->GetID() == 1) || ($all == true))
    {
        ?>
        <font style="text-align: left; font-size: 10px"><pre><?var_dump($var)?></pre></font><br>
        <?
    }
    if($die)
    {
        die;
    }
}
?>

