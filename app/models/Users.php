<?php
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;
use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;

class Users extends \Phalcon\Mvc\Model
{

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
    public $username;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $password;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created_date;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );


        $validator->add(
            'email',
            new UniquenessValidator(
                [
                    'model'   => $this,
                    'message' => 'Sorry, The email was registered by another user',
                ]
            )
        );


        $validator->add(
            'username',
            new UniquenessValidator(
                [
                    'model'   => $this,
                    'message' => 'Sorry, That username is already taken',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("public");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
