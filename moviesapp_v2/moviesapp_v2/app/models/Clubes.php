<?php

namespace app\models;

use app\core\Db;

class Clubes {
    /**
     * Método para obtenção do dataset de todos os clubes
     *
     * @return array
     */
    public static function getAllClubes() {
        $conn = new Db();
        $response = $conn->execQuery('SELECT id, name, foundation_year FROM clubes'); // Ajuste os campos conforme a sua tabela
        return $response;
    }

    /**
     * Método para a obtenção de um clube pelo id correspondente
     * @param int $id Id. do clube
     *
     * @return array
     */
    public static function findClubeById(int $id) {
        $conn = new Db();
        $response = $conn->execQuery('SELECT id, name, foundation_year FROM clubes WHERE id = ?', array('i', array($id)));
        return $response;
    }

    /**
     * Método para adicionar um novo clube
     * @param array $data Dados do clube (name, foundation_year)
     * @return bool
     */
    public static function addClube($data) {
        $conn = new Db();
        $response = $conn->execQuery('INSERT INTO clubes (name, foundation_year) VALUES (?, ?)', array(
            'si', // Supondo que name é uma string e foundation_year é um inteiro
            array($data['name'], $data['foundation_year'])
        ));
        return $response;
    }

    /**
     * Método para atualizar os dados de um clube
     * @param int $id ID do clube a ser atualizado
     * @param array $data Dados do clube (name, foundation_year)
     * @return bool
     */
    public static function updateClube($id, $data) {
        $conn = new Db();
        $response = $conn->execQuery('UPDATE clubes SET name = ?, foundation_year = ? WHERE id = ?', array(
            'sii', // Supondo que name é uma string e foundation_year é um inteiro
            array($data['name'], $data['foundation_year'], $id)
        ));
        return $response;
    }

    /**
     * Método para excluir um clube pelo ID
     * @param int $id ID do clube a ser excluído
     * @return bool
     */
    public static function deleteClube($id) {
        $conn = new Db();
        $response = $conn->execQuery('DELETE FROM clubes WHERE id = ?', array(
            'i', array($id)
        ));
        return $response;
    }
}
