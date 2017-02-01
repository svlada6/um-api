<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

/**
 * @SWG\Definition (
 *      definition="LoginAPIRequest",
 *      required={},
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      )
 * )
 **/

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return Config::get('boilerplate.login.validation_rules');
    }

    public function authorize()
    {
        return true;
    }
}
