<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

/**
 *
 * @SWG\Definition (
 *      definition="ForgotPasswordRequest",
 *      @SWG\Property(
 *          property="email",
 *          description="email address",
 *          type="string"
 *      )
 *     )
 */
class ForgotPasswordRequest extends FormRequest
{
    public function rules()
    {
        return Config::get('boilerplate.forgot_password.validation_rules');
    }

    public function authorize()
    {
        return true;
    }
}
