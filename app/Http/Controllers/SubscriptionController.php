<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Newsletter;

class SubscriptionController extends Controller
{
    //
    public function subscribe()
    {
        $input = $this->validatedEmail();
        $subscription = new Subscription ;
        $subscription->email = $input['email'];

        // call mailChimp api and register user on compaign
        if (! Newsletter::isSubscribed($input['email'])) {
            Newsletter::subscribe($input['email']);
        }
        $subscription->save();

        $subscribed = true;
        
        return view('welcome', compact('subscribed'));
    }

    protected function validatedEmail()
    {
        return request()->validate([
        'email' => 'required|email',
         ]);
    }

    public function reset()
    {
        $subscribed = false;
        redirect('/');
        return view('welcome', compact('subscribed'));
    }
}
