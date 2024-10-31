<?
use app\core\Controller;

class Clube extends Controller {

  /**
  * Invocação da view index.php para exibir todos os clubes
  */
  public function index() {
    $Clubes = $this->model('Clubes'); // é retornado o model Clubes()
    $data = $Clubes::getAllClubes();
    
    $this->view('clube/index', ['clubes' => $data]);
  }

  /**
  * Invocação da view get.php para exibir um clube específico
  *
  * @param  int   $id   Id do clube
  */
  public function get($id = null) {
    if (is_numeric($id)) {
      $Clubes = $this->model('Clubes');
      $data = $Clubes::findClubeById($id);
      $this->view('clube/get', ['clubes' => $data]);
    } else {
      $this->pageNotFound();
    }
  }
}



