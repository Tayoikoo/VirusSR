<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EGNOLBOOGGI (7616)
 *
 * Generated from protobuf message <code>SummonPetCsReq</code>
 */
class SummonPetCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 summoned_pet_id = 8;</code>
     */
    protected $summoned_pet_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $summoned_pet_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 summoned_pet_id = 8;</code>
     * @return int
     */
    public function getSummonedPetId()
    {
        return $this->summoned_pet_id;
    }

    /**
     * Generated from protobuf field <code>uint32 summoned_pet_id = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSummonedPetId($var)
    {
        GPBUtil::checkUint32($var);
        $this->summoned_pet_id = $var;

        return $this;
    }

}
