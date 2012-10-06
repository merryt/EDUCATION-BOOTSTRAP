<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	public function afterFind($results, $primary = false) {

		if($this->findQueryType == 'count')
			return $results;
		
		foreach($results as &$row) {
			foreach($row as $model => $fields) {

				$vars = get_class_vars($model);

				if($vars !== false && isset($vars['jsonFields'])) {

					$jsonFields = $vars['jsonFields'];

					foreach($fields as $field => $val) {
						if(in_array($field, $jsonFields) && !is_array($row[$model][$field])){
							$row[$model][$field] = json_decode($row[$model][$field],true);
						}
					}
				}
			}
		}
		return $results;
	}

	public function beforeSave($options = array()) {

		if(!isset($this->jsonFields))
			return true;
		
		foreach($this->jsonFields as $field) {
			if(isset($this->data[$this->name][$field]))
				if(is_array($this->data[$this->name][$field])) {
					$this->data[$this->name][$field] = json_encode($this->data[$this->name][$field]);		// Should always be an array, but just in case
				}
		}
		return true;
	}

	public function find($type, $options = array()) {

		if (isset($options['modelpaths'])) {

			$_joins = array();
			foreach($options['modelpaths'] as $modelpath) {

				$models = explode('-', $modelpath);
				$this->buildJoins($_joins, $models);
			}

			$options['joins'] = array_values($_joins);
			$options['recursive'] = -1;

			unset($options['modelpaths']);
        } 
        return parent::find($type, $options);
	}

	private function buildJoins(&$joins, $models) {

		$otherModel = array_shift($models);
		$type = $otherModel[strlen($otherModel)-1];
		if($type == '<') {
			$joinType = 'LEFT';
			$otherModel = substr($otherModel, 0,strlen($otherModel)-1);
		} else if($type == '>') {
			$joinType = 'RIGHT';
			$otherModel = substr($otherModel, 0,strlen($otherModel)-1);
		} else {
			$joinType = 'INNER';
		}
		$nextModel = $otherModel;

		$nextJoin = null;
		if(!isset($joins[$otherModel])) {
			if(isset($this->hasMany[$otherModel])) {
				// hasMany
				$assoc = $this->hasMany[$otherModel];
				$thisKey = 'id';
				$otherKey = $assoc['foreignKey'];
				$joins[$otherModel] = $this->singleJoin($otherModel, $otherKey, $this->alias, $thisKey, $joinType);

			} elseif(isset($this->belongsTo[$otherModel])) {
				// belongsTo
				$assoc = $this->belongsTo[$otherModel];
				$thisKey = $assoc['foreignKey'];
				$otherKey = 'id';
				$joins[$otherModel] = $this->singleJoin($otherModel, $otherKey, $this->alias, $thisKey, $joinType);

			} elseif(isset($this->hasAndBelongsToMany[$otherModel])) {
				// hasAndBelongsToMany
				$assoc = $this->hasAndBelongsToMany[$otherModel];
				$nextJoin = $this->singleJoin($otherModel,'id',$assoc['with'],$assoc['associationForeignKey'],$joinType);

				$otherModel = $assoc['with'];
				$thisKey = 'id';
				$otherKey = $assoc['foreignKey'];
				$nextModel = $assoc['className'];
				$joins[$otherModel] = $this->singleJoin($otherModel, $otherKey, $this->alias, $thisKey, 'INNER');
				$joins[$nextModel] = $nextJoin;

			} elseif(isset($this->hasOne[$otherModel])) {
				// hasOne??
				throw new CakeException("No join logic created for hasOne association");
			} else {
				throw new CakeException("Error: model " . $this->alias . " not associated with model " . $otherModel);
			}

		}

		if(!empty($models)) {
			$next = $this->{$nextModel};
			$next->buildJoins($joins, $models);
		}
	}

/*
 * Creates a single INNER JOIN on $modelOne
 */
	private function singleJoin($modelOne, $keyOne, $modelTwo, $keyTwo, $joinType = 'INNER') {
		return array( 
			'table' => Inflector::tableize($modelOne), 
			'alias' => $modelOne, 
			'type' => $joinType, 
			'foreignKey' => false, 
			'conditions'=> array(
				$modelOne .'.'. $keyOne .' = '. $modelTwo .'.'. $keyTwo				
			)
		);
	}
}
