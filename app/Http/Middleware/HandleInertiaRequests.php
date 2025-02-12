<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the props that are shared by all pages.
     *
     * @see https://inertiajs.com/shared-data
     * @return array
     */
    public function share(Request $request): array
    {
        return [
            'auth' => [
                'user' => $request->user() ? $request->user()->only(['id', 'name', 'email']) : null,
            ],
        ];
    }
}
