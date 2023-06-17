<?php

namespace App\Http\Controllers;

use App\Services\ProxyService;
use Illuminate\Http\JsonResponse;

class ProxyController extends Controller
{
    /**
     * @var ProxyService $service
     */
    private ProxyService $service;

    public function __construct(ProxyService $service)
    {
        $this->service = $service;
    }

    /**
     * @return JsonResponse
     */
    public function getPhoneNumber(): JsonResponse
    {
        try {
            return self::success(['result' => $this->service->getPhoneNumber()]);
        } catch (\Exception $exception) {
            return self::error($exception);
        }
    }

    /**
     * @param int $activation
     * @return JsonResponse
     */
    public function getSMSByActivation(int $activation): JsonResponse
    {
        try {
            return self::success(['result' => $this->service->getSMS($activation)]);
        } catch (\Exception $exception) {
            return self::error($exception);
        }
    }
}
