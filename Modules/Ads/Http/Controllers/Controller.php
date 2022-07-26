<?php

namespace Modules\Ads\Http\Controllers;

use App\Helpers\ApiResponder;
use App\Traits\Api\ApiCrudResources;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests,
        ApiResponder,
        ApiCrudResources;
}
