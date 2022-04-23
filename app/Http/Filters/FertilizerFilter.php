<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class FertilizerFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const NORM_NITROGEN_FROM = 'norm_nitrogen_From';
    public const NORM_NITROGEN_TO = 'norm_nitrogen_To';
    public const NORM_PHOSPHORUS_FROM = 'norm_phosphorus_From';
    public const NORM_PHOSPHORUS_TO = 'norm_phosphorus_To';
    public const NORM_POTASSIUM_FROM = 'norm_potassium_From';
    public const NORM_POTASSIUM_TO = 'norm_potassium_To';
    public const CROPS_ID = 'crops_id';
    public const AREA = 'area';
    public const PRICE_FROM = 'price_From';
    public const PRICE_TO = 'price_To';
    public const DESCRIPTION = 'description';
    public const PURPOSE = 'purpose';
    public const ORDER_BY_TITLE = 'order_By_Title';
    public const ORDER_BY_PRICE = 'order_By_Price';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::NORM_NITROGEN_FROM => [$this, 'normNitrogenFrom'],
            self::NORM_NITROGEN_TO => [$this, 'normNitrogenTo'],
            self::NORM_PHOSPHORUS_FROM => [$this, 'normPhosphorusFrom'],
            self::NORM_PHOSPHORUS_TO => [$this, 'normPhosphorusTo'],
            self::NORM_POTASSIUM_FROM => [$this, 'normPotassiumFrom'],
            self::NORM_POTASSIUM_TO => [$this, 'normPotassiumTo'],
            self::CROPS_ID => [$this, 'crops_id'],
            self::AREA => [$this, 'area'],
            self::PRICE_FROM => [$this, 'priceFrom'],
            self::PRICE_TO => [$this, 'priceTo'],
            self::DESCRIPTION => [$this, 'description'],
            self::PURPOSE => [$this, 'purpose'],
            self::ORDER_BY_TITLE => [$this, 'orderByTitle'],
            self::ORDER_BY_PRICE => [$this, 'orderByPrice'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }


    public function normNitrogenFrom(Builder $builder, $from)
    {
        $builder->where('norm_nitrogen', '>', $from);
    }

    public function normNitrogenTo(Builder $builder, $to)
    {
        $builder->where('norm_nitrogen', '<', $to);
    }


    public function normPotassiumFrom(Builder $builder, $from)
    {
        $builder->where('norm_potassium', '>', $from);
    }

    public function normPotassiumTo(Builder $builder, $to)
    {
        $builder->where('norm_potassium','<', $to);
    }

    public function normPhosphorusFrom(Builder $builder, $from)
    {
        $builder->where('norm_phosphorus','>', $from);
    }

    public function normPhosphorusTo(Builder $builder, $to)
    {
        $builder->where('norm_phosphorus','<', $to);
    }

    public function crops_id(Builder $builder, $arrCrops)
    {
        $builder->whereIn('crops_id', $arrCrops);
    }

    public function area(Builder $builder, $arrArea)
    {
        $builder->whereIn('area', $arrArea);
    }

    public function priceFrom(Builder $builder, $from)
    {
        $builder->where('price', '>', $from);
    }

    public function priceTo(Builder $builder, $to)
    {
        $builder->where('price', '<', $to);
    }

    public function description(Builder $builder, $value)
    {
        $builder->where('description', 'like', "%{$value}%");
    }

    public function purpose(Builder $builder, $value)
    {
        $builder->where('purpose', 'like', "%{$value}%");
    }

    public function orderByTitle(Builder $builder, $value)
    {
        $builder->orderBy('title', $value);
    }
    public function orderByPrice(Builder $builder, $value)
    {
        $builder->orderBy('price', $value);
    }
}
