<?php
ob_start();
// Require all files and classes
require_once 'app/controller/UsersController.php';
require_once 'app/controller/ClientController.php';
require_once 'app/view/IndexView.php';
/**
 * Description of index
 *
 * @author Daniel Fernandez
 */
class Index {
    /*
     * Method main application
     */
    public function run($page){
  	  switch ($page) {
  		  case 'index':
  		      $users = new UsersController();
         	  $users->runIndex();
  			  break;
          case 'clients':
              $client_controller = new ClientController();
              $client_controller->runIndex();
              break;
          case 'default':
              $index_view = new IndexView();
              $index_view->runIndex();
              break;
  	  }   
    }
}
$index = new Index();
if(isset($_GET['view'])){
    $index->run($_GET['view']);
}else{
    $index->run('default');
}

ob_end_flush();
?>
