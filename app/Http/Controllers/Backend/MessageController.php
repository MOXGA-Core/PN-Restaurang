<?php

namespace App\Http\Controllers\Backend;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index() {
        $messages = Message::orderBy('id', 'DESC')->paginate(10);
        return view('backend.messages.index', compact('messages'));
    }

    public function update(Request $request, Message $message) {
        $message->read = !$message->read;
        $message->save();
        return redirect()->back()->with('alert', 'success');
    }
}
