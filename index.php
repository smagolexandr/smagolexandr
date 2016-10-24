<?php
require 'vendor/autoload.php';
use Gregwar\Captcha\CaptchaBuilder;
use php_rutils\RUtils;



$builder = new CaptchaBuilder;
$builder->build();


$numeral = RUtils::numeral();
echo RUtils::numeral()->getRubles(100.25);

//phpinfo();
?>
<img src="<?php echo $builder->inline(); ?>" />