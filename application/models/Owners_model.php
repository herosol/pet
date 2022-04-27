<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Owners_model extends CRUD_model {

    public function __construct() {
        parent::__construct();
        $this->table_name="owners";
        $this->field="id";
    }
}
?>



