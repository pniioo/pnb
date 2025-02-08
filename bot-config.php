Bot.txt BOT_TOKEN=5916172934:AAEI03cl0921Tw3R7RtlLsf4122uqYiunSU
CHAT_ID=1554295324
bot-config.php 
<?php
// bot.txt फाइल पढ़ें
$botConfig = file("bot.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// डेटा को असोसिएटिव ऐरे में बदलें
$botDetails = [];
foreach ($botConfig as $line) {
    list($key, $value) = explode("=", $line, 2);
    $botDetails[trim($key)] = trim($value);
}

// JSON में बदलकर आउटपुट करें
header('Content-Type: application/json');
echo json_encode($botDetails);
?>