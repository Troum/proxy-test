<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ProxyService
{
    /**
     * @return mixed
     */
    public function getPhoneNumber(): mixed
    {
        return Http::get(config('proxy.api_url'), [
            'action' => 'getNumber',
            'country' => config('proxy.country'),
            'service' => config('proxy.service'),
            'token' => config('proxy.token')
        ])
            ->json();
    }

    /**
     * @param int $activation
     * @return mixed
     */
    public function getSMS(int $activation): mixed
    {
        return Http::get(config('proxy.api_url'), [
            'action' => 'getSms',
            'activation' => $activation,
            'token' => config('proxy.token')
        ])
            ->json();
    }
}
