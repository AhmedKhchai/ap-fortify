<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index()
    {
        //
        $sent = false;
        return view('contact', compact('sent'));
    }

    public function saveContact(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required'
        // ]);
        $newContact = new Contact;
        $newContact->name = $request['name'];
        $newContact->email = $request['email'];
        $newContact->message = $request['description'];
        $newContact->save();
        // return $newContact;
        \Mail::send(
            'contact_email',
            array(
                'newContact' => $newContact,
             ),
            function ($message) use ($request) {
                $message->from($request->email);
                $message->to('testorino667@gmail.com');
            }
        );
        $sent = true;
        return view('contact', compact('sent'));
    }
    public function rgpd_show()
    {
        $subscribed = true;
        return view('rgpd', compact('subscribed'));
    }
    public function destroy(Contact $contact)
    {
        //
        $contact->delete();
        return back();
    }
}
