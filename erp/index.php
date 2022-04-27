<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ERP</title>
</head>
<body>
  <div><h1>ERP Affärssytem</div>
  <?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8080/inlamning2/wp-json/wc/v3/orders?oauth_consumer_key=ck_bbf769d76a3daf0f497b5647b46a85617670bc65&oauth_signature_method=HMAC-SHA1&oauth_timestamp=1651050846&oauth_nonce=NTIZWTTcQ5X&oauth_version=1.0&oauth_signature=tODZOm5VFaZZwQLJ2C3WmE63svo%253D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Cookie: mailpoet_page_view=%7B%22timestamp%22%3A1651058046%7D'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


$post = json_decode($response);


echo "<table>";
echo "<tr><td>Post ID:</td><td>$post->id</td></tr>";
echo "<tr><td>Slug:</td><td>$post->slug</td></tr>";
echo "<tr><td>Typ:</td><td>$post->type</td></tr>";
$title = $post->title->rendered;
echo "<tr><td>Titel:</td><td>$titel</td></tr>";
echo "</table>";




?>
</body>
</html>