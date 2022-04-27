<?php

namespace App\Imports;

use App\Models\Company;
use App\Models\SearchBreach;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithLimit;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithStartRow;

$index = 0;

class CompanyImport implements ToModel
//    , WithHeadingRow
//    , WithLimit
//    , WithCustomChunkSize

    , WithStartRow

{

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (gettype($row[0]) == 'string') {
            return  Company::create([
                'name' => $row[0],
                'industry' => $row[2],
                'date_of_data_breach' => $row[5],
                'number_of_leaked_accounts' => $row[6],
                'website' => $row[7],
                'detail' => $row[8],
            ]);
        } else {
            $company = Company::select('id','name')->orderBy('id','desc')->first();
            return new SearchBreach([
                'company_id' => $company->id ?? NULL,
                'phone' => $row[3],
                'email' => $row[4],
            ]);
        }

    }



////       dd($row);
//        $num = $row[0];
//
////       if($num>$row[1])
////       {
////                 echo "false";
////       }
//
////       else
////           {
////
//        return $num;
////           }


//    protected $startRow;
//
//    public function __construct(int $startRow)
//    {
//        $this->startRow = $startRow;
//    }
//
    public function startRow(): int
    {
        return 2;
    }

    public function limit(): int
    {
        return 1;
    }

//    public function chunkSize(): int
//    {
//        return 1;
//    }

//    public function headingRow(): int
//    {
//        return 1;
//    }
//
//


}
