<?php

namespace App\Http\Controllers;

use App\Conversations\BotConversation;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Telegram\TelegramDriver;
use Illuminate\Http\Request;

class BotmanController extends Controller
{
    public function handle()
    {
        DriverManager::loadDriver(TelegramDriver::class);

        $config = [
            "telegram" => [
                "token" => env('TELEGRAM_TOKEN')
            ]
        ];
        $botman =  BotManFactory::create($config, new LaravelCache());

        $botman->hears('/start|mulai|start', function(BotMan $bot){
            $user = $bot->getUser();
            $bot->reply('Selamat datang '.$user->getFirstName().' di Aplikasi Bank Sekolah SMAN 1 Tenggarang Telegram Bot');
            $bot->startConversation(new BotConversation());
        })->stopsConversation();

        $botman->hears('/tanya|tanya|ask', function(BotMan $bot){
            $bot->reply('Ini merupakan bot milik Aplikasi Bank Sekolah, Cara menggunakannya adalah dengan mengetikkan /start, start, mulai (TANPA KOMA DAN PILIH SALAH SATU)');
        })->stopsConversation();

        $botman->listen();
    }
}
