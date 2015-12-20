<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SfuReport extends Model
{
    protected $table = 'sfu_reports';

    function getNOAttribute($number){
        $no = array(
            '1' => 'ครั้งที่ 1',
            '2' => 'ครั้งที่ 2',
            '3' => 'ครั้งที่ 3',
            '4' => 'ครั้งที่ 4',
            '5' => 'ครั้งที่ 5',
            '6' => 'ครั้งที่ 6',
            '7' => 'ครั้งที่ 7',
            '8' => 'ครั้งที่ 8',
            '9' => 'ครั้งที่ 9',
            '10' => 'ครั้งที่ 10',
            '11' => 'ครั้งที่ 11',
            '12' => 'ครั้งที่ 12',
            '13' => 'ครั้งที่ 13',
            '14' => 'ครั้งที่ 14',
            '15' => 'ครั้งที่ 15',
            '16' => 'ครั้งที่ 16',
            '17' => 'ครั้งที่ 17',
            '18' => 'ครั้งที่ 18',
            '19' => 'ครั้งที่ 19',
            '20' => 'ครั้งที่ 20'
        );
        return $no[$number];
    }
}
