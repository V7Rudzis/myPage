<?php


const SECRET_KEY = 'eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6ImNsYzRtYy0wMCIsInVzZXJfaWQiOiI3OTI4OTA3MzM5MiIsInNlY3JldCI6Ijc0ZjRjYzMxNDE2MjFkMzk4YjhjZDg4YTQxZjYzNDAzZTJkMTQwNDZhOGIxY2IzMjhkYmFmNjFlYzNhMGY1MzUifX0=';
$publicKey = '48e7qUxn9T7RyYE1MVZswX1FRSbE6iyCj2gCRwwF3Dnh5XrasNTx3BGPiMsyXQFNKQhvukniQG8RTVhYm3iPpZL6tKcPBHsFrLLRgp2QiVdaUuK132fTrtGctPJKgvewTXQd5Lk8whPvGX5QKShpCtPbjjtnAKucG2SBUcM9UVVhQLiqYYTbS2kF5q6oM';

function gen_password($length = 8) {				
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	return substr(str_shuffle($chars), 0, $length);
}

?>