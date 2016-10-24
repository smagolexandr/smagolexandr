<?php
require 'vendor/autoload.php';
use Gregwar\Captcha\CaptchaBuilder;
use php_rutils\RUtils;
use php_rutils\struct\TimeParams;



$builder = new CaptchaBuilder;
$builder->build();


$params = new TimeParams();
$params->date = null; //это значение по умолчанию
$params->format = 'сегодня d F Y года';
$params->monthInflected = true;
echo RUtils::dt()->ruStrFTime($params);

//phpinfo();
?>
<img src="<?php echo $builder->inline(); ?>" />