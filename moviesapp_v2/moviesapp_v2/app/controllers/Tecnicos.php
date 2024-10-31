<?
use app\core\Controller;

class Tecnico extends Controller {

/**
* Invocação da view index.php para exibir todos os técnicos
*/
public function index() {
  $Tecnicos = $this->model('Tecnicos'); // é retornado o model Técnicos
  $data = $Tecnicos::getAllTecnicos();
  
  $this->view('tecnico/index', ['tecnicos' => $data]);
}

/**
* Invocação da view get.php para exibir um técnico específico
*
* @param  int   $id   Id do técnico
*/
public function get($id = null) {
  if (is_numeric($id)) {
    $Tecnicos = $this->model('Tecnicos');
    $data = $Tecnicos::findTecnicoById($id);
    $this->view('tecnico/get', ['tecnicos' => $data]);
  } else {
    $this->pageNotFound();
  }
}
}
?>