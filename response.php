<?php
$number = $_POST['From'];
$body = $_POST['Body'];
$url = 'https://api.myjson.com/bins/xcw81';
$file = file_get_contents($url);
$data = json_decode($file, true);
    foreach ($data as $character) {
        if($character['country'] == $body) {
          $city = $character['city'];
            echo "<Response>
    <Message>
           Capital of " . $body . " is " . $city . "
    </Message>
</Response>
";
            break;
        }
    }
header('Content-Type: text/xml');
?>
