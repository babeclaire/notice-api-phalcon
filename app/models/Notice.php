<?php

class Notice extends \Phalcon\Mvc\Model {

	/**
	 *
	 * @var integer
	 * @Primary
	 * @Identity
	 * @Column(type="integer", length=32, nullable=false)
	 */
	public $id;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	public $title;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	public $description;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	public $author;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	public $created_at;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	public $updated_date;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	public $soft_delete;

	/**
	 *
	 * @var string
	 * @Column(type="string", nullable=true)
	 */
	public $reading;

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->setSchema("public");
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'notice';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Notice[]|Notice|\Phalcon\Mvc\Model\ResultSetInterface
	 */
	public static function find($parameters = null) {
		return parent::find($parameters);
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 * @return Notice|\Phalcon\Mvc\Model\ResultInterface
	 */
	public static function findFirst($parameters = null) {
		return parent::findFirst($parameters);
	}

}
