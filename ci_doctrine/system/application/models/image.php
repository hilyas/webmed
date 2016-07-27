<?php
class Image extends Doctrine_Record{

  public function setTableDefinition(){
    $this->hasColumn('subject_id','integer',5);
    $this->hasColumn('title','string', 255);
  }

  public function setUp(){
    $this->setTableName('image');
    $this->actAs('Timestampable');
  }
}
