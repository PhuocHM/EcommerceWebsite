<?php

namespace App\Exports;

use App\Models\Admin\Orders;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExcelExports implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $lates = Orders::where('created_at', '>', 'DATE_SUB(CURDATE(), INTERVAL 5 MONTH)')->orderBy('created_at', 'ASC')->get();
        return $lates;
    }
}
