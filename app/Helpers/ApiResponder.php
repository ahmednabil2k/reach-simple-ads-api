<?php

namespace App\Helpers;

trait ApiResponder
{
    public function success($data = null, $message = null)
    {
        return response()->success($data, $message);
    }

    public function respondOk($message = '')
    {
        return response()->success(null, $message);
    }

    public function error($errors = null, $status = 400, $data=[])
    {
        return response()->error($errors, $status,  (object)$data);
    }

    public function validationError($errors = [])
    {
        return response()->validationError($errors);
    }
}
