<?php
/**
 * Created by PhpStorm.
 * User: cris
 * Date: 9/26/2017
 * Time: 12:08 AM
 */

namespace amuu\Validators;

use GuzzleHttp\Client;

class ReCaptcha
{
    public function validate(
        $attribute,
        $value,
        $parameters,
        $validator
    ){

        $client = new Client();

        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=>env('GOOGLE_RECAPTCHA_SECRET'),
                    'response'=>$value

                ]
            ]
        );

        $body = json_decode((string)$response->getBody());
        return $body->success;
    }

}