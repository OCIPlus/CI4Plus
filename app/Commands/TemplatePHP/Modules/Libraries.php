<?php 
    namespace ucfirst.{moduleName}\Libraries;
    use ucfirst.{moduleName}\Models\ucfirst.{moduleName}Model;

    class ucfirst.{moduleName}Lib {
        public function __construct() {
            \$config = config(App::class);
            \$this->response = new Response(\$config);
        }
    }