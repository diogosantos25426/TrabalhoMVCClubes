<?php

namespace app\models;

use app\core\Db;

class Tecnicos {
    /**
     * Método para obtenção do dataset de todos os técnicos
     *
     * @return array
     */
    public static function getAllTecnicos() {
        $conn = new Db();
        $response = $conn->execQuery('SELECT id, name, nationality, club_id FROM tecnicos'); // Ajuste os campos conforme a sua tabela
        return $response;
    }

    /**
     * Método para a obtenção de um técnico pelo id correspondente
     * @param int $id Id. do técnico
     *
     * @return array
     */
    public static function findTecnicoById(int $id) {
        $conn = new Db();
        $response = $conn->execQuery('SELECT id, name, nationality, club_id FROM tecnicos WHERE id = ?', array('i', array($id)));
        return $response;
    }

    /**
     * Método para adicionar um novo técnico
     * @param array $data Dados do técnico (name, nationality, club_id)
     * @return bool
     */
    public static function addTecnico($data) {
        $conn = new Db();
        $response = $conn->execQuery('INSERT INTO tecnicos (name, nationality, club_id) VALUES (?, ?, ?)', array(
            'ssi', // Supondo que name e nationality são strings e club_id é um inteiro
            array($data['name'], $data['nationality'], $data['club_id'])
        ));
        return $response;
    }

    /**
     * Método para atualizar os dados de um técnico
     * @param int $id ID do técnico a ser atualizado
     * @param array $data Dados do técnico (name, nationality, club_id)
     * @return bool
     */
    public static function updateTecnico($id, $data) {
        $conn = new Db();
        $response = $conn->execQuery('UPDATE tecnicos SET name = ?, nationality = ?, club_id = ? WHERE id = ?', array(
            'ssii', // Supondo que name e nationality são strings e club_id é um inteiro
            array($data['name'], $data['nationality'], $data['club_id'], $id)
        ));
        return $response;
    }

    /**
     * Método para excluir um técnico pelo ID
     * @param int $id ID do técnico a ser excluído
     * @return bool
     */
    public static function deleteTecnico($id) {
        $conn = new Db();
        $response = $conn->execQuery('DELETE FROM tecnicos WHERE id = ?', array(
            'i', array($id)
        ));
        return $response;
    }
}
