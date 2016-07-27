<?php
class Appointment extends Doctrine_Record {

  public function setTableDefinition(){
    $this->hasColumn('subject_id','integer',5);
    $this->hasColumn('staff_id','integer',4);
    $this->hasColumn('datetime','date');
    $this->hasColumn('comment','string', 65535);
    $this->hasColumn('active','boolean');
  }

  public function setUp(){
    $this->setTableName('appointment');
    $this->actAs('Timestampable');

  }

}
