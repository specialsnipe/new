<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class FertilizerFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const NORM_NITROGEN_FROM = 'norm_nitrogenFrom';
    public const NORM_NITROGEN_TO = 'norm_nitrogenTo';
    public const NORM_PHOSPHORUS_FROM = 'norm_phosphorusFrom';
    public const NORM_PHOSPHORUS_TO = 'norm_phosphorusTo';
    public const NORM_POTASSIUM_FROM = 'norm_potassiumFrom';
    public const NORM_POTASSIUM_TO = 'norm_potassiumTo';
    public const CROPS_ID = 'crops_id';
    public const AREA = 'area';
    public const PRICE_FROM = 'priceFrom';
    public const PRICE_TO = 'priceTo';
    public const DESCRIPTION = 'description';
    public const PURPOSE = 'purpose';
    public const ORDER_BY_TITLE = 'orderByTitle';
    public const ORDER_BY_PRICE = 'orderByPrice';


    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::NORM_NITROGEN_FROM => [$this, 'norm_nitrogen_From'],
            self::NORM_NITROGEN_TO => [$this, 'norm_nitrogen_To'],
            self::NORM_PHOSPHORUS_FROM => [$this, 'norm_phosphorus_From'],
            self::NORM_PHOSPHORUS_TO => [$this, 'norm_phosphorus_To'],
            self::NORM_POTASSIUM_FROM => [$this, 'norm_potassium_From'],
            self::NORM_POTASSIUM_TO => [$this, 'norm_potassium_To'],
            self::CROPS_ID => [$this, 'crops_id'],
            self::AREA => [$this, 'area'],
            self::PRICE_FROM => [$this, 'price_From'],
            self::PRICE_TO => [$this, 'price_To'],
            self::DESCRIPTION => [$this, 'description'],
            self::PURPOSE => [$this, 'purpose'],
            self::ORDER_BY_TITLE => [$this, 'order_By_Title'],
            self::ORDER_BY_PRICE => [$this, 'order_By_Price'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }


    public function norm_nitrogenFrom(Builder $builder, $from)
    {
        $builder->where('norm_nitrogen', '>', $from);
    }

    public function norm_nitrogenTo(Builder $builder, $to)
    {
        $builder->where('norm_nitrogen', '<', $to);
    }


    public function norm_potassiumFrom(Builder $builder, $from)
    {
        $builder->where('norm_potassium', '>', $from);
    }

    public function norm_potassiumTo(Builder $builder, $to)
    {
        $builder->where('norm_potassium','<', $to);
    }

    public function norm_phosphorusFrom(Builder $builder, $from)
    {
        $builder->where('norm_phosphorus','>', $from);
    }

    public function norm_phosphorusTo(Builder $builder, $to)
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

    public function OrderByTitle(Builder $builder, $value)
    {
        $builder->orderBy('title', $value);
    }
    public function OrderByPrice(Builder $builder, $value)
    {
        $builder->orderBy('price', $value);
    }
}
