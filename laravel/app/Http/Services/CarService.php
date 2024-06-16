<?php

namespace App\Http\Services;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;
use Throwable;

class CarService
{
    /**
     * Возвращает все записи из таблицы Car
     * @return Collection
     */
    public function getCarList(): Collection
    {
        return Car::select(
                'Id',
                'RegNumber',
                'Vin',
                'Model',
                'Brand',
            )
            ->where('Brand', '<>', null)
            ->where('Brand', '<>', null)
            ->where('RegNumber', '<>', null)
            ->where('Vin', '<>', null)
            ->get();
    }

    /**
     * Создает новую запись в таблице Car
     * @param  array  $data
     * @return Car
     */
    public function createCar(array $data): Car
    {
        $car = new Car($data);

        try {
            $car->save();
        } catch (Throwable $exception) {
           // $exception->getMessage();  TODO: пишем в логи ошибку
            abort(500, 'Ошибка сохранения машины');
        }

        return $car;
    }
}
