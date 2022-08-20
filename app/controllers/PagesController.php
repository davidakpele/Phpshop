<?php
class PagesController extends Controller {

   private $namespacemodel;
   public function __construct() {
       $this->namespacemodel = $this->loadModel('LoginModel');
    }
   public function index(){
      $data = [
                  'page_title' => 'Application Portal',
               ];
      $this->view('index', $data);    
      
      }
}