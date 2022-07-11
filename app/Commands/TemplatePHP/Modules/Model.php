<?php 
    namespace ucfirst.{moduleName}\Models;
    use CodeIgniter\Model;

    class ucfirst.{moduleName}Model extends Model {
        protected $table = '{moduleName}';
        protected $primaryKey = 'id';
        protected $returnType = 'object';
        protected $useSoftDeletes = false;
        protected $useTimestamps = true;
        protected $validationRules = [];
        protected $validationMessages = [];
        protected $skipValidation = false;
        protected $allowedFields = [];
        protected $beforeInsert = ['beforeInsert'];
        protected $beforeUpdate = ['beforeUpdate'];

        public function __construct() {
            parent::__construct();
        }
        
        protected function beforeInsert(array $data) {
            return $data;
        }

        protected function beforeUpdate(array $data) {
            return $data;
        }
    }