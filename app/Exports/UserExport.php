<?php

namespace App\Exports;

use Illuminate\Http\Request;
use App\User;
use App\District;
use App\City;
use App\Type;
use App\BDS;
use App\File;



use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    protected $date1;
    protected $date2;

    public function __construct($date1,$date2)
    {
       $this->date1 = $date1;
       $this->date2 = $date2;
    }

    public function collection()
    {
        $orders = BDS::where('updated_at', '>=', $this->date1)->where('updated_at', '<=', $this->date2)->where('status','off')->orderBy('updated_at', 'ASC')->get();
        foreach ($orders as $row) {
            $order[] = array(
                '0' => $row->id,
                '1' => $row->name,
                '2' => $row->address,
                '3' => $row->district->name,
                '4' => $row->city->name,
                '5' => $row->type->name,
                '6' => $row->dientich,
                '7' => $row->updated_at,
                '8' => $row->user->name,
                '9' => number_format($row->price),
                '10' => number_format($row->price * 2 / 100),
            );
        }

        return (collect($order));
    }




    public function headings(): array
    {
        return [
            'Mã',
            'Tên',
            'Địa chỉ',
            'Quận',
            'Thành phố',
            'Loại đất',
            'Diện tích (m2)',
            'Ngày bán',
            'Chủ',
            'Giá (VNĐ)',
            'Hoa hồng 2% (VNĐ)',
        ];
    }

    
}
