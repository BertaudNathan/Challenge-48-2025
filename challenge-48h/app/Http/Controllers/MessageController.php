<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSent;


class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'message' => 'required',
        ]);

        $message = Message::create($request->all());
        broadcast(new MessageSent($message))->toOthers();
        return redirect("/map");
    }
}
