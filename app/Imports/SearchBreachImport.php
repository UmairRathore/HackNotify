<?php
//
//namespace App\Imports;
//
//use App\Models\Company;
//use App\Models\SearchBreach;
//use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Concerns\WithLimit;
//use Maatwebsite\Excel\Concerns\WithStartRow;
//use phpDocumentor\Reflection\Types\Integer;
//
//class SearchBreachImport implements ToModel
////    , WithHeadingRow
//    , WithLimit
////    , WithCustomChunkSize
//
//    ,WithStartRow
//{
//
//
////
//    protected $company_id;
//
//    public function __construct()
//    {
//        $this->company_id = Company::select('id','name')->get();
//    }
//
//    /**
//    * @param array $row
//    *
//    * @return \Illuminate\Database\Eloquent\Model|null
//    */
//    public function model(array $row)
//    {
//            $company = $this->company_id->where('name',$row[0])->first();
////        dd($row);
//        return new SearchBreach([
//            //
//            'company_id' =>$company->id ?? NULL ,
//            'phone' => $row[3],
//            'email' => $row[4],
////            'pass' => $row[5],
//
//        ]);
//
//    }
//
//    public function startRow(): int
//    {
//        return 2;
//    }
//    public function limit(): int
//    {
//        return 6;
//    }
//
//}
