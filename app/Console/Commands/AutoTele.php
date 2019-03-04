<?php

namespace App\Console\Commands;

use App\Components\Helpers;
use Illuminate\Console\Command;
use Log;

class AutoTele extends Command
{
    protected $signature = 'autoTele';
    protected static $systemConfig;

    public function __construct()
    {
        parent::__construct();
        self::$systemConfig = Helpers::systemConfig();
    }

    public function handle()
    {

        $method = 'sendMessage';
        $backMsg['chat_id'] = '-316804829';
        $backMsg['text'] = self::$systemConfig['website_url'];
        $backMsg['parse_mode'] = 'Markdown';
        tFunction($method,$backMsg);
    }
}
