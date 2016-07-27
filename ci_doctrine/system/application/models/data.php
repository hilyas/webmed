<?php
class Data extends Doctrine_Record{

  public function setTableDefinition(){
	$this->hasColumn('subject_id','integer');
    $this->hasColumn('photo','integer');
    $this->hasColumn('gender','string');
    $this->hasColumn('handedness','string');
    $this->hasColumn('skin_color','string');
    $this->hasColumn('eye_color','string');
    $this->hasColumn('height','integer');
    $this->hasColumn('weight','integer');
    $this->hasColumn('blood_type','string');
    $this->hasColumn('hist_heart_dis','boolean');
    $this->hasColumn('hist_stroke','boolean');
    $this->hasColumn('hist_diabetes','boolean');
    $this->hasColumn('hist_infectious_dis','boolean');
    $this->hasColumn('hist_alcoholism','boolean');
    $this->hasColumn('hist_dementia','boolean');
    $this->hasColumn('hist_smoking','boolean');
    $this->hasColumn('hist_depression','boolean');
    $this->hasColumn('hist_cancer','boolean');
    $this->hasColumn('degree','string');
    $this->hasColumn('number_languages','integer');
    $this->hasColumn('number_images','integer');

  }

  public function setUp(){
    $this->setTableName('data');
    $this->actAs('Timestampable');

  }

}


