<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;

class TurnstileValidation implements InvokableRule
{
    protected $ChallengeURI = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        // TODO: Tohle ještě nějak upravit a refactorovat (není to přímo ideální ale funguje, když to funguje tak na to jen tak nešahej že :D)

        $siteSecret = env('TURNSTILE_SITEKEY_APP');

        $remoteIP = Request::ip();

        $response = Http::asForm()->post($this->ChallengeURI, [
            'secret' => $siteSecret,
            'response' => $value,
            'remoteip' => $remoteIP
        ]);

        $data = json_decode($response->body(), true);

        $success = $data['success'];
        $error = $data['error-codes'];

        if(!$success && $error)
        {
            $fail("turnstileValidation.$error[0]")->translate();
        }

        return $success;
    }


}
