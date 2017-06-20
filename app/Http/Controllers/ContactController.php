<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmitRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactSubmitRequest $request) {
        $ipAddress = $request->getClientIp();

        if($this->checkIpCooldown($ipAddress)) {
            $message = new Message;
            $message->name = $request->name;
            $message->email = $request->email;
            $message->phoneNo = $request->phoneNo;
            $message->message = $request->message;
            $message->ipAddress = $ipAddress;
            $message->save();
            return ['action' => 'success', 'msg' => '<i class="fa fa fa-check-circle"></i> Thank you for your message.'];
        }
        return ['action' => 'danger', 'msg' => '<i class="fa fa-clock-o"></i> Please try again after 15 min.'];
    }

    private function checkIpCooldown($ipAddress) {
        return Message::where('ipAddress', $ipAddress)->where('created_at', '>=', date('Y-m-d H:i:s', strtotime('-15 minutes')))->count() == 0;
    }
}
