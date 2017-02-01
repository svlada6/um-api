<?php

namespace App\Api\V1\Controllers;

use App\Api\V1\Requests\SignUpRequest;
use Config;
use App\User;
use Tymon\JWTAuth\JWTAuth;
use App\Http\Controllers\Controller;
use App\Api\V1\Requests\LoginRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SignUpController extends Controller
{
    /**
     *
     * @SWG\Post(
     *      path="/auth/signup",
     *      summary="Sign up new user",
     *      tags={"Account"},
     *      description="Store Account",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Account that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/SignUpRequest")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="status",
     *                  type="string"
     *              )
     *          )
     *      ),
     *      @SWG\Response(
     *          response=422,
     *          description="validaton error",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="errors",
     *                  type="object"
     *              )
     *          )
     *      )
     * )
     * @param LoginRequest $request
     * @param JWTAuth $JWTAuth
     * @return \Illuminate\Http\JsonResponse
     */

    public function signUp(SignUpRequest $request, JWTAuth $JWTAuth)
    {
        $user = new User($request->all());
        if(!$user->save()) {
            throw new HttpException(500);
        }

        if(!Config::get('boilerplate.sign_up.release_token')) {
            return response()->json([
                'status' => 'ok'
            ], 201);
        }

        $token = $JWTAuth->fromUser($user);
        return response()->json([
            'status' => 'ok',
            'token' => $token
        ], 201);
    }
}
