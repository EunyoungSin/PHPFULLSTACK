<?php
class People
{
    protected $name;

    public function set_name( $param_name )
    {
        $this->name = $param_name;
    }

    public function people_print()
    {
        echo "이름 : $this->name \n";
    }
}

class Student extends people
{
    protected $id;

    public function set_id( $param_id )
    {
        $this->id= $param_id;
    }

    public function student_print()
    {
        parent::people_print();
        echo "아이디 : $this->id \n";
    }
}

$obj_std = new Student();
$obj_std->set_name( "박병주" );
$obj_std->set_id( "123456789" );
$obj_std->student_print();






?>