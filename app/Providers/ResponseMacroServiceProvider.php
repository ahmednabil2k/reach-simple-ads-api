<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Handles success response
        response()->macro('success', function ($data = null, $message = null) {
            return response()->json([
                'message'  => $message?? 'Operation done successfully',
                'success'  => true,
                'error'    => false,
                'data'     => $data ?? (object)[],
                'errors'   => (object)[],
            ])->withHeaders([
                'Content-Type' => 'application/json',
            ]);
        });

        // Handles normal failed response
        response()->macro('error', function ($errors = null, $status = 400, $data=[]) {
            $errors = is_string($errors) ?
                      [ ['key' => 'Custom Error', 'error' => $errors] ] :
                      $errors;

            return response()->json([
                'success'  => false,
                'error'    => true,
                'data'     => (object)$data,
                'errors'   => $errors ?? (object)[],
            ], $status)->withHeaders([
                'Content-Type' => 'application/json',
            ]);
        });

        // Handles validation errors response
        response()->macro('validationError', function ($errors = []) {
            $errorMessages = [];

            foreach ($errors as $key => $fieldErrors) {
                foreach ($fieldErrors as  $error) {
                    $error = (isset($error) && is_array($error)) ? $error[0] : $error;

                    $errorMessages[] = [
                        'key'    => $key,
                        'error'  => $error
                    ];
                }
            }

            return response()->error($errorMessages, 422);
        });
    }
}
