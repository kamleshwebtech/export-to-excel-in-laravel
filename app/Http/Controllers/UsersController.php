<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Exports\UsersExport;
use App\Exports\UsersarrayExport;
use Maatwebsite\Excel\Facades\Excel;


class UsersController extends Controller 
{
    public function exportdbcollection() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportarray() 
    {
    	$data_array = [
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
        ];


        return Excel::download(new UsersarrayExport($data_array), 'export.xlsx');
    }
}