<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Http\Resources\Car\CarCollection;
use App\Http\Resources\Car\CarResource;
use App\Http\Services\CarService;

class CarsController extends Controller
{
    /**
     * @param  CarService  $service
     */
    public function __construct(
        private CarService $service
    )
    {}

    public function index(): CarCollection
    {
        return new CarCollection(
            $this->service->getCarList()
        );
    }

    public function store(CarRequest $request): CarResource
    {
        $requestList = $request->validated();

        $savedCar = $this->service->createCar(
            $requestList['data']
        );

        return new CarResource($savedCar);
    }
}
