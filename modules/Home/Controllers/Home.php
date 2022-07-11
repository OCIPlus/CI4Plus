<?php
    namespace Home\Controllers;
    use App\Controllers\BaseController;

    class Home extends BaseController {

        public function index() {
            $data = [];
            helper(['form']);
            
            return  view('Home\Views\home', $data);
        
        }

        //--------------------------------------------------------------------
    }
