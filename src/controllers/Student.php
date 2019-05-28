<?php
    // require('../model/Model.php');
    namespace App\Student;

    use App\Model\BaseModel;

    class Student extends BaseModel
    {
        protected $table = "student";

        public $columns = [
            'first_name', 
            'last_name', 
            'age', 
            'adress',
            'city' 
        ];

        // public function showAll(){
        //     $student = Model::all();
        //     return
        // }
    }

?>