<?php
class PagesController extends Controller {

   private $FetchData;
   public function __construct() {
       $this->FetchData = $this->loadModel('ProductFetch');
    }
   public function index(){
      $sqlCat = $this->FetchData->SqlFetchCat();
      $SqlProd = $this->FetchData->SqlFetchProd();

      $data = [
                  'page_title' => 'Application Portal',
                  'catrow'=>$sqlCat,
                  'Productrow'=>$SqlProd,
               ];
      $this->view('index', $data);    
      
      }
}