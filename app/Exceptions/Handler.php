<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
{
    // Grab the HTTP status code from the Exception, or default response of 400
    $statusCode = $this->isHttpException($e) ? $e->getStatusCode() : 400;

    // If is validation exception and json request
    if ($e instanceof ValidationException && $request->wantsJson())
    {
        // Apply pluralization
        $messages = $e->validator->errors()->all();
        $message = array_shift($messages);
        if ($additional = count($messages)) {
            $pluralized = $additional === 1 ? __('error') : __('errors');
            $message .= __("validation.additional", compact('additional', 'pluralized'));
        }
        // Send pluralized message with errors
        return response()->json(['message' => $message, 'errors' => $e->errors()], $statusCode);
    }

    // Default to the parent handler class implementation
    return parent::render($request, $e);
}
}
