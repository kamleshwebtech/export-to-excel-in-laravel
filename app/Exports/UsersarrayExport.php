<?php

namespace App\Exports;

use App\User;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersarrayExport implements FromCollection, WithHeadings
{

	use Exportable;

	public function __construct(array $data_array)
    {
        $this->data_array = $data_array;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        /*return collect([
            [
                'name' => 'Kamlesh',
                'surname' => 'Khatti',
                'email' => 'kamlesh@k3logics.com',
                'twitter' => '@k3logics'
            ],
            [
                'name' => 'Vijay',
                'surname' => 'Kumar',
                'email' => 'vijaykumar@gmail.com',
                'twitter' => '@vijaykumar'
            ]
        ]);*/

        return collect($this->data_array);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Surname',
            'Email',
            'Twitter',
        ];
    }



}
