<?php

include_once __DIR__.'/SlackBot.php';
include_once __DIR__.'/SlackBotInfo.php';

// 引数チェック
if ($argc != 3) {
    exit('usage: php post2slack.php <url> <message>');
}

$url = $argv[1];
$message = $argv[2];

// メッセージをポスト
$bot = new SlackBot();
print_r($bot->post_message(new SlackBotInfo($url, $message)));
