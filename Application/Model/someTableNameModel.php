<?php
/**
 * Created by MarionLeHerisson
 * https://github.com/MarionLeHerisson/BasicTemplate
 * GNU GPL v3.0
 */

require_once('defaultModel.php');

class someTableNameModel extends DefaultModel {

    protected $_name = 'someTableName';

    /**
     * @param $someParameter
     * @return PDOStatement
     */
    public function getSomeField($someParameter) {
        $bdd = $this->connectBdd();
        $query = $bdd->prepare("SELECT someColumn FROM " . $this->_name . "
                                WHERE " . $this->_name . ".someOtherColumn = ?;");

        $query->execute([$someParameter]);

        return $query;
    }

}