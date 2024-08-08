<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-send-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = ['name' => 'Mạnh',
            'subject' => "Đây là mail xin chào !",
            'greeting' => "Hi",
            'body' => "hâhah"
            ];
        Mail::send('mail', $data, function ($message) {
//            $message->to('fgirpjr335@oxomail.org', 'HIHI')->subject("Xin chào");
            $message->to('xsqvqgi890@oxomail.org');
        });
    }
}
