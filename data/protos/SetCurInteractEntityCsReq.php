<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CJAPGMJMPBG (1410)
 *
 * Generated from protobuf message <code>SetCurInteractEntityCsReq</code>
 */
class SetCurInteractEntityCsReq extends \Google\Protobuf\Internal\Message
{
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
     *     @type int $entity_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
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

