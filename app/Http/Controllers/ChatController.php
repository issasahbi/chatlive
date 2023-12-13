<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Http\Requests\MessageRequest;

class ChatController extends Controller
{
    public function send(MessageRequest $request){
        ChatEvent::dispatch($request->message);
    }
}
