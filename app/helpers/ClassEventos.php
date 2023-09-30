<?php 

namespace Helpers;

use Models\Database;

class ClassEventos extends Database{
    public function trazerEventos(){
        $db=$this->connectDB()->prepare("SELECT
        id_evento AS id,
        titulo_evento AS title,
        descricao_evento AS `description`,
        comeco_evento AS `start`,
        fim_evento AS `end`
    FROM eventos;");
        $db->execute();
        $resultados=$db->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($resultados);
    }
    public function criarEvento($id=0,$id_user=0, $title,$description, $color = 'blue', $start, $end){
        $db=$this->connectDB()->prepare("INSERT INTO eventos values(?,?,?,?,?,?,?)");

        $db->bindParam(1,$id, \PDO::PARAM_INT);
        $db->bindParam(2,$id_user, \PDO::PARAM_INT);
        $db->bindParam(3,$title, \PDO::PARAM_STR);
        $db->bindParam(4,$description, \PDO::PARAM_STR);
        $db->bindParam(5,$color, \PDO::PARAM_STR);
        $db->bindParam(6,$start, \PDO::PARAM_STR);
        $db->bindParam(7,$end, \PDO::PARAM_STR);
        $db->execute();

    }
    public function trazerEventosPeloId($id){
        $db=$this->connectDB()->prepare("SELECT * FROM eventos WHERE id_evento=?");
        $db->bindParam(1,$id, \PDO::PARAM_INT);
        $db->execute();
        return $resultados=$db->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function atualizarEvento($id, $title,$description, $start, $end){
        $db=$this->connectDB()->prepare("UPDATE eventos SET titulo_evento=?, descricao_evento=?, comeco_evento=?, fim_evento=? WHERE id_evento=?");
        $db->bindParam(1,$title, \PDO::PARAM_STR);
        $db->bindParam(2,$description, \PDO::PARAM_STR);
        $db->bindParam(3,$start, \PDO::PARAM_STR);
        $db->bindParam(4,$end, \PDO::PARAM_STR);
        $db->bindParam(5,$id, \PDO::PARAM_INT);
        $db->execute();

    }
    public function deletarEvento($id){
        $db=$this->connectDB()->prepare("DELETE FROM eventos WHERE id_evento=?");
        $db->bindParam(1,$id, \PDO::PARAM_INT);
        $db->execute();

    }
}