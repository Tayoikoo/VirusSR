<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ECHLGCEPDLJ</code>
 */
class ECHLGCEPDLJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 entity_id = 10;</code>
     */
    protected $entity_id = 0;
    /**
     * Generated from protobuf field <code>bool OECNJIOFBHA = 2;</code>
     */
    protected $OECNJIOFBHA = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $entity_id
     *     @type bool $OECNJIOFBHA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 entity_id = 10;</code>
     * @return int
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 entity_id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool OECNJIOFBHA = 2;</code>
     * @return bool
     */
    public function getOECNJIOFBHA()
    {
        return $this->OECNJIOFBHA;
    }

    /**
     * Generated from protobuf field <code>bool OECNJIOFBHA = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setOECNJIOFBHA($var)
    {
        GPBUtil::checkBool($var);
        $this->OECNJIOFBHA = $var;

        return $this;
    }

}
