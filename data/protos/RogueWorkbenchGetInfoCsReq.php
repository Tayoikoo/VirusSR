<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HNNIDKIKCAM (5616)
 *
 * Generated from protobuf message <code>RogueWorkbenchGetInfoCsReq</code>
 */
class RogueWorkbenchGetInfoCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 prop_entity_id = 14;</code>
     */
    protected $prop_entity_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $prop_entity_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 prop_entity_id = 14;</code>
     * @return int
     */
    public function getPropEntityId()
    {
        return $this->prop_entity_id;
    }

    /**
     * Generated from protobuf field <code>uint32 prop_entity_id = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setPropEntityId($var)
    {
        GPBUtil::checkUint32($var);
        $this->prop_entity_id = $var;

        return $this;
    }

}

