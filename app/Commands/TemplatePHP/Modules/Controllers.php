<?php
    namespace ucfirst.{moduleName}\Controllers;
    use App\Controllers\BaseController;

    class ucfirst.{moduleName} extends BaseController {
        /**
         * Constructor.
         *
         */
        public function __construct(){}
        
        /**
         * Index
         *
         * @return View
         */
        public function index() {
            $data = [];
            helper(['form']);
            return view('ucfirst.{moduleName}\Views\index', $data);
        }
    }