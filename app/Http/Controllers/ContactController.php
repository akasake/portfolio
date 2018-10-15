<?php

namespace App\Http\Controllers;
use \App\Notifications\InboxMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Admin;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function mailToAdmin(ContactFormRequest $message, Admin $admin)
    {        //send the admin an notification
        
		$admin->notify(new InboxMessage($message));
		// redirect the user back
		return redirect()->back()->with('message', 'Your message has been sent! I will get back to you soon!');
	}
}
