<?php

namespace App\Livewire;

use App\Models\Xcrate;
use App\Table\Column;
use Illuminate\Database\Eloquent\Builder;

class XrTable extends Table
{
    public function query() : Builder
{
    return Xcrate::query();
}

public function columns() : array
{
  return [
    Column::make('countryName', 'Country Name'),
    Column::make('countryCode', 'Country Code'),
    Column::make('currencyName','Currency Name'),
    Column::make('currencyCode', 'Currency Code'),
    Column::make('rateNew', 'Exchange rate '),
    Column::make('period', 'Period'),
   ];
}


}
