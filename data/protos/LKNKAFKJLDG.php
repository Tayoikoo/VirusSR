<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LKNKAFKJLDG</code>
 */
class LKNKAFKJLDG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .IJBEDOLECAF buff_list = 5;</code>
     */
    private $buff_list;
    /**
     * Generated from protobuf field <code>uint32 entity_id = 9;</code>
     */
    protected $entity_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\IJBEDOLECAF>|\Google\Protobuf\Internal\RepeatedField $buff_list
     *     @type int $entity_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .IJBEDOLECAF buff_list = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated .IJBEDOLECAF buff_list = 5;</code>
     * @param array<\IJBEDOLECAF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IJBEDOLECAF::class);
        $this->buff_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 entity_id = 9;</code>
     * @return int
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 entity_id = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->entity_id = $var;

        return $this;
    }

}
