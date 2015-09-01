<?
// кодировка страницы
header('Content-Type: text/html;charset=UTF-8');
  
$ip = '83.149.47.116'; // IP, который будем проверять
$typeData = 'json'; // в каком виде мы получим данные. json или xml
  
// формируем URL для запроса
$url = "http://ru.smart-ip.net/geoip-$typeData/$ip";
// делаем запрос к API
$data = @file_get_contents($url);
// если получили данные
if($data){
    // декодируем полученные данные
    $dataDecode = json_decode($data);
     
    // выводим данные
    echo "Страна: " . $dataDecode->countryName . "<br/>"; 
    echo "Код страны: " . $dataDecode->countryCode . "<br/>";   
    echo "Город: " . $dataDecode->city . "<br/>";    
    echo "Область: " . $dataDecode->region . "<br/>";
    echo "Широта: " . $dataDecode->latitude . "<br/>";
    echo "Долгота: " . $dataDecode->longitude . "<br/>";
    echo "Часовой пояс: " . $dataDecode->timezone . "<br/>";
 
}else{
    echo "Сервер не доступен!";
}
?>