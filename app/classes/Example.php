<?php


namespace App\classes;


class Example
{
    public $student = [];

    public function index(){

        $this->student = [
            0=>[
                'Name'   => 'Jahid',
                'Email'  => 'jahid@gmail.com',
                'Phone'  => [
                    'Phone1' => '123456789',
                    'Phone2' => '35465454'
                ]
            ],
            1=>[
                'Name'   => 'Khorshed',
                'Email'  => 'khorshed@gmail.com',
                'Phone'  => [
                    'Phone1' => '123456789',
                    'Phone2' => '35465454'
                ]
            ],
            2=> 'BITM',
            3=> [
                'Name'   => 'Emon',
                'Email'  => 'Emon@gmail.com',
                'Phone'  => [
                    'Phone1' => '123456789',
                    'Phone2' => '35465454'
                ]
            ]
        ];

        echo '<pre>';
//        print_r($this->student);
//        var_dump($this->student);


//        foreach ($this->student as $item){
//
//           if (is_array($item)) {
//
//               foreach ($item as $value){
//
//                   if (is_array($value)){
//
//                       foreach ($value as $v_value){
//
//                           echo $v_value. ' ';
//                       }
//                   }else{
//                       echo $value.' ';
//                   }
//               }
//           }else{
//               echo $item;
//           }
//        echo '<br/>';
//        }

//        echo $this->student[1]['Email'];

//        foreach ($this->student as $key =>$item){
//            if ($key == 1){
//                echo $item['Name'].' '.$item['Email'].' '.$item['Phone'].'<br/>';
//                break;
//            }
//        }


//        $this->student = [10, 20, 'BITM', 10.20, true, false];
//
//        echo $this->student[3];
//
//        foreach ($this->student as $index => $item){
//            echo 'index no - '.$index.' | '. 'value - '.$item . '<br/>';
//        }
    }
}