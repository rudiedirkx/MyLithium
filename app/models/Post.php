<?php

namespace app\models;

use \lithium\util\Validator;
use \lithium\data\Connections;

class Post extends \lithium\data\Model {

	public static function __init( array $options = array() ) {

		parent::__init($options);
		$self = static::_object();
#		$self = static::_instance(__CLASS__);
#var_dump($self);

		$self->_finders['count'] = function($self, $params, $chain) use (&$query, &$classes) {
			$db = Connections::get($self::meta('connection'));
			$records = $db->read('SELECT count(*) as count FROM posts', array('return' => 'array'));
			return $records[0]['count'];
		};

	} // Function __init

} // Class Post


