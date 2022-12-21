<?php
mb_internal_encoding("UTF-8");

$token = '43860fd88ad7c06c4c3a21ff2729800eed9badbb47955b9b7feb8678a4117519ce81597c9e280bb61e161';

$request = 'https://api.vk.com/method/market.add?owner_id=-163352573&category_id=1&main_photo_id=1&name=Диагностиканоутбуков&description=dfgdfgsdfgsdfgdsfgsdfgsdfgsdfgsfvsfdvsfdvsfvsdfvsfvsfvsfvsfvsfdvsdfvs&price=0&access_token='.$token.'&v=5.120';

$ansver_json = file_get_contents($request);
$ansver_arr = json_decode($ansver_json, true);

echo '<pre>';
print_r($ansver_arr);