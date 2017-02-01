<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

/**
 *
 * @SWG\Definition (
 *      definition="ResetPasswordRequest",
 *      @SWG\Property(
 *          property="token",
 *          description="token",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="password",
 *          description="password",
 *          type="string"
 *      )
 *     )
 */
class ResetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return Config::get('boilerplate.reset_password.validation_rules');
    }

    public function authorize()
    {
        return true;
    }
}
