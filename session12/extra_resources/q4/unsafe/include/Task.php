<?php

class Task {

    private $id;
    private $account_id;    
    private $description;
    
    public function __construct($id, $account_id, $description) {
        $this->id = $id;
        $this->account_id = $account_id;
        $this->description = $description;
    }

    public function getID() {
        return $this->id;
    }

    public function getAccountID() {
        return $this->account_id;
    }

    public function getDescription() {
        return $this->description;
    }
}

?>