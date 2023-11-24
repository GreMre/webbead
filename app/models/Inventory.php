<?php

class Inventory
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getFootballPlayers()
    {
        $this->db->query('SELECT * FROM labdarugo');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getClubs()
    {
        $this->db->query('SELECT * FROM klub');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getPositions()
    {
        $this->db->query('SELECT * FROM poszt');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getPlayerDetails($playerId)
    {
        $this->db->query('SELECT * FROM labdarugo WHERE id = :playerId');
        $this->db->bind(':playerId', $playerId ?: 0);
        $result = $this->db->single();
        return $result;
    }

    public function getPlayersByClubAndPosition($clubId, $positionId)
    {
        $this->db->query('SELECT * FROM labdarugo WHERE klubid = :clubId AND posztid = :positionId');
        $this->db->bind(':clubId', $clubId ?: 0);
        $this->db->bind(':positionId', $positionId ?: 0);
        $results = $this->db->resultSet();
        return $results;
    }
}