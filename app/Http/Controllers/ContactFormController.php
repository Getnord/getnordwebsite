<?php

namespace App\Http\Controllers;

use Spatie\Newsletter\NewsletterFacade as Newsletter;
use Validator;
use Lang;
use Illuminate\Http\Request;
use App\Mail\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * Handle the form submit request coming from
     * the contact page
     *
     * @param Illuminate\Http\Request
     */

    public function __invoke(Request $request)
    {
        /**
         * laravel uses the current local to determine what
         * error message to send.
         * We store the current local in the session,
         * that way we can always have the same local when we go to another page
         */
        if (session()->has('locale')) {
            app()->setLocale(session()->get('locale'));
        } else {
            app()->setLocale('uk');
        };
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'recaptcha' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->getMessageBag()]);
        } else {

            Mail::to('getnordforms@gmail.com')
                ->send(new ContactRequest($request));
            if (!Mail::failures()) {
                // we add the user to mailchimp
                Newsletter::subscribe($request->input('email'), ['FNAME' => $request->input('name'), 'lastName' => ''], 'list_' . app()->getLocale());
                return response()->json(['success' => Lang::get('contact.email_sent')]);
            }
        };

    }
}
