<?php
    class Shebang_model extends MY_Model{
        protected $table_name = 'shebang';


        public function getNewShebangs(){

            $query = $this->db->get_where($this->table_name);


            $return = $query->{$this->_return_type()}();

            // Reset our return type
            $this->temp_return_type = $this->return_type;

            return $return;
        }


    }