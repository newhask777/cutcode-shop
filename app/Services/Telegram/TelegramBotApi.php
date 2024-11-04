<?php

declare(strict_types=1);

namespace App\Services\Telegram;

//use App\Services\Telegram\Exceptions\TelegramBotApiException;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

// Better use SDK library if need more request to api
// нужно добавить очередь на Http request
final class TelegramBotApi
{
    public const HOST = 'https://api.telegram.org/bot';

    public static function sendMessage(string $token, int $chatId, string $text)
    {
        Http::get(self::HOST . $token . '/sendMessage', [
            'chat_id' => $chatId,
            'text' => $text
        ]);

    }
}
