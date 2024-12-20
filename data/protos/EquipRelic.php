<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EquipRelic</code>
 */
class EquipRelic extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 type = 9;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>uint32 relic_unique_id = 2;</code>
     */
    protected $relic_unique_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type int $relic_unique_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 type = 9;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>uint32 type = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkUint32($var);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 relic_unique_id = 2;</code>
     * @return int
     */
    public function getRelicUniqueId()
    {
        return $this->relic_unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 relic_unique_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRelicUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->relic_unique_id = $var;

        return $this;
    }

}
