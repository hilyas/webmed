<?php

class Contact extends Doctrine_Record {

    public function setTableDefinition() {
        $this->hasColumn('contact_fname', 'string', 255, array('unique' => 'true'));
        $this->hasColumn('contact_lname', 'string', 255);
        $this->hasColumn('contact_phone', 'string', 255);
        $this->hasColumn('contact_email', 'string', 255, array('unique' => 'true'));
        $this->hasColumn('contact_about', 'string', 255);
    }

    public function setUp() {
        $this->setTableName('contact');
        $this->actAs('Timestampable');
    }

}
