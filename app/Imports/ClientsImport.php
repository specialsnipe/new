<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\ImportStatus;
use App\Service\ImportService;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ClientsImport implements ToCollection, WithHeadingRow, WithValidation, SkipsOnFailure
{
    private $statusId;

    public function __construct($statusId)
    {
        $this->statusId = $statusId;
    }

    public function collection(Collection $collection)
    {
        try {
            foreach ($collection as $item) {
                if ($item->filter()->isNotEmpty()) {
                    Client::firstOrCreate([
                        'title' => $item['naimenovanie']
                    ], [
                        'title' => $item['naimenovanie'],
                        'date' => Date::excelToDateTimeObject($item['data_dogovora']),
                        'price' => $item['stoimost_postavki'],
                        'region' => $item['region'],
                    ]);
                }
            }

        } catch (\Exception $exception) {
        }

    }

    public function rules(): array
    {

        return [
            'naimenovanie' => 'required|string',
            'data_dogovora' => 'required|numeric',
            'stoimost_postavki' => 'required|numeric',
            'region' => 'required'
        ];
    }

    public function customValidationMessages()
    {
        return [
            'naimenovanie.required' => 'Отсутствует поле Наименование',
            'naimenovanie.string' => 'Поле наименование должно быть строкой',
            'data_dogovora.required' => 'Отсутствует поле Дата договора',
            'data_dogovora.numeric' => 'В поле дата должно быть число',
            'stoimost_postavki.required' => 'Отсутствует поле Стоимость поставки',
            'stoimost_postavki.numeric' => 'В поле стоимость поставки должна быть цифра',
            'region.required' => 'Отсутствует поле Регион',
        ];
    }

    public function onFailure(Failure ...$failures)
    {
        $map = [];
        foreach ($failures as $failure) {
            $row = $failure->row();
            $attribute = $failure->attribute();
            $arr = [];
            foreach ($failure->errors() as $error) {
                $arr['row'] = $row . ' ряд в таблице';
                $arr['attribute'] = $this->getAttributesMap()[$attribute];
                $arr['message'] = $error;
            }
            $map[] = $arr;
        }
            ImportService::updateJson($this->statusId, ImportStatus::FAIL, $map);
    }


    private function getAttributesMap()
    {
        return [
            'naimenovanie' => 'Наименование',
            'data_dogovora' => 'Дата договора',
            'stoimost_postavki' => 'Стоимость поставки',
            'region' => 'Регион',
        ];
    }
}








