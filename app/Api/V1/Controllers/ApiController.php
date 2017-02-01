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
