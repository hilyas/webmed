<?php
class Subject extends Doctrine_Record{
	
  public function setTableDefinition(){
    $this->hasColumn('subject_id','integer',5);
    $this->hasColumn('fname','string',255);
    $this->hasColumn('lname','string',255);
    $this->hasColumn('address','string',255);
    $this->hasColumn('email','string',255);
    $this->hasColumn('dob','date');
  }

  public function setUp(){
    $this->actAs('Timestampable');
    $this->hasMany('Data',array('local'=>'subject_id','foreign'=>'subject_id'));
    $this->hasMany('Appointment',array('local'=>'subject_id','foreign'=>'subject_id'));
    $this->hasMany('Image',array('local'=>'subject_id','foreign'=>'subject_id'));
  }
  
}









