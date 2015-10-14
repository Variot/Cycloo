<?php

namespace Cycloo\DAO;

use Cycloo\Domain\Bike;

class BikeDAO extends DAO
{
    /**
     * Retourne la liste des vélos
     *
     * @return array Liste de tout les vélos.
     */
    public function findAll() {
        $sql = "select * from t_bike order by bike_id desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $bikes = array();
        foreach ($result as $row) {
            $bikeId = $row['bike_id'];
            $bikes[$bikeId] = $this->buildDomainObject($row);
        }
        return $bikes;
    }

    /**
     * Créer un objet bike
     *
     * @param array $row The DB row containing bike data.
     * @return \Cycloo\Domain\Bike
     */
    protected function buildDomainObject($row) {
        $bike = new Bike();
        $bike->setId($row['bike_id']);
        $bike->setTitle($row['bike_name']);
        $bike->setContent($row['bike_description']);
        return $bike;
    }
    
    /**
     * Retourne le velo correspondant à l'id donné
     *
     * @param integer $id
     *
     * @return \Cycloo\Domain\Bike|renvoie une exception si non trouvé
     */
    public function find($id) {
        $sql = "select * from t_bike where bike_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("Pas de vélo ayant comme id : " . $id);
    }
}