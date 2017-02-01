<?php

namespace App\Api\V1\Controllers;

use App\Http\Controllers\Controller;

/**
 * @SWG\Swagger(
 *   basePath="/api",
 *   @SWG\Info(
 *     title="UM API",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class ApiController
 */
class ApiController extends Controller
{

}

/**
 *
 * @SWG\Definition (
 *      definition="ID",
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      )
 *     )
 */

/**
 *
 * @SWG\Get(
 *      path="/hello",
 *      summary="Public endpoint",
 *      tags={"Public"},
 *      description="Public endpoint",
 *      produces={"application/json"},
 *      @SWG\Parameter(
 *          type="string",
 *          name="Authorization",
 *          in="header",
 *          required=true
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *          @SWG\Schema(
 *              type="object",
 *              @SWG\Property(
 *                  property="message",
 *                  type="string"
 *              )
 *          )
 *      )
 *   )
 **/

/**
 *
 * @SWG\Get(
 *      path="/protected",
 *      summary="Protected endpoint",
 *      tags={"Protected"},
 *      description="Protected endpoint",
 *      produces={"application/json"},
 *
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *          @SWG\Schema(
 *              type="object",
 *              @SWG\Property(
 *                  property="message",
 *                  type="string"
 *              )
 *          )
 *      )
 *   )
 **/