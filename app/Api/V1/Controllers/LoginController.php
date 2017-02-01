<?php

namespace App\Api\V1\Controllers;

use Symfony\Component\HttpKernel\Exception\HttpException;
use Tymon\JWTAuth\JWTAuth;
use App\Api\V1\Requests\LoginRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class LoginController extends ApiController
{
    /**
     * @param LoginRequest $request
     * @SWG\Post(
     *      path="/auth/login",
     *      summary="Authorize user",
     *      tags={"Authentication"},
     *      description="Authorize user",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="auth",
     *          in="body",
     *          description="Auth info",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/LoginAPIRequest")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="status",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="token",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request, JWTAuth $JWTAuth)
    {
        $credentials = $request->only(['email', 'password']);

        try {
            $token = $JWTAuth->attempt($credentials);

            if(!$token) {
                throw new AccessDeniedHttpException();
            }

        } catch (JWTException $e) {
            throw new HttpException(500);
        }

        return response()
            ->json([
                'status' => 'ok',
                'token' => $token
            ]);
    }
}
