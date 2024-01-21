<?php

namespace App\Services\Utils;

use Illuminate\Support\Facades\Mail;

class MailService
{
    public function __construct()
    {
    }

    public function sendMail(string $to, string $subject, string $body): void
    {
        Mail::send('email.user_register_confirm', [
            'body' => $body,
        ], function ($message) use ($to, $subject) {
            $message->to($to)
                ->subject($subject);
        });
    }




}
