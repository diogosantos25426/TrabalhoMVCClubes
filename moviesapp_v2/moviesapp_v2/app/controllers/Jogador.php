<?
use app\core\Controller;
class Jogador extends Controller {

/**
* Invocação da view index.php para exibir todos os jogadores
*/
public function index() {
  $Jogadores = $this->model('Jogadores'); // é retornado o model Jogadores
  $data = $Jogadores::getAllJogadores();
  
  $this->view('jogador/index', ['jogadores' => $data]);
}

/**
* Invocação da view get.php para exibir um jogador específico
*
* @param  int   $id   Id do jogador
*/
public function get($id = null) {
  if (is_numeric($id)) {
    $Jogadores = $this->model('Jogadores');
    $data = $Jogadores::findJogadorById($id);
    $this->view('jogador/get', ['jogadores' => $data]);
  } else {
    $this->pageNotFound();
  }
}
}
?>