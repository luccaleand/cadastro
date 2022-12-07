<?php

// criação de token JWT (que será reutilizado no futuro)

function base64UrlEncode($data){
    return str_replace(['+','/','='], ['-', '_', ''], base64_encode($data));
}
//cabeçalho
$header = base64UrlEncode('{"alg":"HS256", "TYP": "JWT"}');
//variavel que armazenará os dados do usuário (login, senha, chave pix)
$payload = base64UrlEncode(
    '{
    "sub":"'.md5(time()) '", 
    "name": "Lucca Leandro",
    "iat": '.time().'
    }');
//assinatura
$signature = base64UrlEncode(
    hash_hmac('sha256', $header. '.'.$payload, 'confirma', true)
    
);
echo $header. '.'.$payload.'.'.$signature;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>