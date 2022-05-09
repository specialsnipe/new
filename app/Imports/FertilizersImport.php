<?php

namespace App\Imports;

use App\Models\Fertilizer;
use App\Models\ImportStatus;
use App\Service\ImportService;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;

class FertilizersImport implements ToCollection, WithHeadingRow,WithValidation, SkipsOnFailure
{


    private $statusId;

    public function __construct($statusId)
    {
        $this->statusId = $statusId;
    }

    /**
     * @param Collection $collection
     */

    public function collection(Collection $collection)
    {

        try {
            foreach ($collection as $item) {
                if ($item->filter()->isNotEmpty()) {
                    Fertilizer::firstOrCreate([
                        'title' => $item['naimenovanie']
                    ], [
                        'title' => $item['naimenovanie'],
                        'norm_nitrogen' => $item['norma_azot'],
                        'norm_phosphorus' => $item['norma_fosfor'],
                        'norm_potassium' => $item['norma_kalii'],
                        'crops_id' => $item['gruppa_kultur'],
                        'area' => $item['raion'],
                        'price' => $item['stoimost'],
                        'description' => $item['opisanie'],
                        'purpose' => $item['naznacenie'],
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
            'norma_azot' => 'required|numeric',
            'norma_fosfor' => 'required|numeric',
            'norma_kalii' => 'required|numeric',
            'gruppa_kultur' => 'required|integer|exists:crops,id',
            'raion' => 'required',
            'stoimost' => 'required|numeric',
            'opisanie' => 'required|string',
            'naznacenie' => 'required|string',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'naimenovanie.required' => 'Отсутствует поле Наименование',
            'naimenovanie.string' => 'Поле наименование должно быть строкой',
            'norma_azot.required' => 'Отсутствует поле Норма Азота',
            'norma_azot.numeric' => 'В поле дата должно быть число',
            'norma_fosfor.required' => 'Отсутствует поле Норма Фосфора',
            'norma_fosfor.numeric' => 'В поле стоимость поставки должна быть цифра',
            'norma_kalii.required' => 'Отсутствует поле Норма Калия',
            'norma_kalii.numeric' => 'В поле стоимость поставки должна быть цифра',
            'gruppa_kultur.required' => 'Отсутствует поле группа культур',
            'gruppa_kultur.integer' => 'В поле стоимость поставки должна быть цифра',
            'gruppa_kultur.exists:crops,id' => 'Не существует такой группы культур в базе данных',
            'raion.required' => 'Отсутствует поле Район',
            'stoimost.required' => 'Отсутствует поле Стоимость поставки',
            'stoimost.numeric' => 'В поле стоимость поставки должна быть цифра',
            'opisanie.required' => 'Отсутствует поле Описание',
            'opisanie.string' => 'Поле наименование должно быть строкой',
            'naznacenie.required' => 'Отсутствует поле Назначение',
            'naznacenie.string' => 'Поле наименование должно быть строкой',
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
            'norma_azot' => 'Норма Азота',
            'norma_fosfor' => 'Норма фосфора',
            'norma_kalii' => 'Норма калия',
            'gruppa_kultur' => 'Группа культур',
            'raion' => 'Район',
            'stoimost' => 'Стоимость',
            'opisanie' => 'Описание',
            'naznacenie' => 'Назначение',
        ];
    }

}
