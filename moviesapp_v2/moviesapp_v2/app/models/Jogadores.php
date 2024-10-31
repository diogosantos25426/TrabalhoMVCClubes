<?php

namespace app\models;

use app\core\Db;

class Jogadores {
    /**
     * Método para obtenção do dataset de todos os jogadores
     *
     * @return array
     */
    public static function getAllJogadores() {
        $conn = new Db();
        $response = $conn->execQuery('SELECT id, name, position, nationality, club_id FROM jogadores'); // Ajuste os campos conforme a sua tabela
        return $response;
    }

    /**
     * Método para a obtenção de um jogador pelo id correspondente
     * @param int $id Id. do jogador
     *
     * @return array
     */
    public static function findJogadorById(int $id) {
        $conn = new Db();
        $response = $conn->execQuery('SELECT id, name, position, nationality, club_id FROM jogadores WHERE id = ?', array('i', array($id)));
        return $response;
    }

    /**
     * Método para adicionar um novo jogador
     * @param array $data Dados do jogador (name, position, nationality, club_id)
     * @return bool
     */
    public static function addJogador($data) {
        $conn = new Db();
        $response = $conn->execQuery('INSERT INTO jogadores (name, position, nationality, club_id) VALUES (?, ?, ?, ?)', array(
            'sssi', // Supondo que name, position e nationality são strings e club_id é um inteiro
            array($data['name'], $data['position'], $data['nationality'], $data['club_id'])
        ));
        return $response;
    }

    /**
     * Método para atualizar os dados de um jogador
     * @param int $id ID do jogador a ser atualizado
     * @param array $data Dados do jogador (name, position, nationality, club_id)
     * @return bool
     */
    public static function updateJogador($id, $data) {
        $conn = new Db();
        $response = $conn->execQuery('UPDATE jogadores SET name = ?, position = ?, nationality = ?, club_id = ? WHERE id = ?', array(
            'sssii', // Supondo que name, position e nationality são strings e club_id é um inteiro
            array($data['name'], $data['position'], $data['nationality'], $data['club_id'], $id)
        ));
        return $response;
    }

    /**
     * Método para excluir um jogador pelo ID
     * @param int $id ID do jogador a ser excluído
     * @return bool
     */
    public static function deleteJogador($id) {
        $conn = new Db();
        $response = $conn->execQuery('DELETE FROM jogadores WHERE id = ?', array(
            'i', array($id)
        ));
        return $response;
    }
}
