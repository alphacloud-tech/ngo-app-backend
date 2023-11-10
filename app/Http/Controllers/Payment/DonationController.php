<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class DonationController extends Controller
{
    // redirectToGateway


    public function donation()
    {
        return view('frontend.pages.donation.donation');
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request, Paystack $paystack)
    {
        // dd($request->all());
        try {
            // Validate the donation form data
            $this->validate($request, [
                // 'amount' => 'required|numeric',
                'fname' => 'required|string',
                'lname' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'country' => 'required|string',
            ]);

            // Retrieve donation details from the form
            // $Amount = $request->input('Amount') * 100; // Convert to kobo
            $firstName = $request->input('fname');
            $lastName = $request->input('lname');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $country = $request->input('country');
            $cause = $request->input('cause');

            // You can also retrieve custom donation amount if provided
            $customAmount = $request->input('custom') * 100; // Convert to kobo

            // Define the payload for Paystack
            $payload = [
                'email' => $email,
                'amount' => $customAmount ? $customAmount : $amount,
                'metadata' => [
                    'custom_amount' => $customAmount ? $customAmount : $amount,
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'phone' => $phone,
                    'country' => $country,
                ],
                'reference' => Paystack::genTranxRef(),
                'currency' => 'NGN',
            ];

            // Redirect to the Paystack payment gateway with the payload
            return $paystack->getAuthorizationUrl($payload);
            // return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback(Request $request, Paystack $paystack)
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
