<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HAGNBMIGKON (533)
 *
 * Generated from protobuf message <code>RelicReforgeConfirmCsReq</code>
 */
class RelicReforgeConfirmCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 relic_unique_id = 13;</code>
     */
    protected $relic_unique_id = 0;
    /**
     * Generated from protobuf field <code>bool okpbfpilfmd = 1;</code>
     */
    protected $okpbfpilfmd = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $relic_unique_id
     *     @type bool $okpbfpilfmd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 relic_unique_id = 13;</code>
     * @return int
     */
    public function getRelicUniqueId()
    {
        return $this->relic_unique_id;
    }

    /**
     * Generated from protobuf field <code>uint32 relic_unique_id = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setRelicUniqueId($var)
    {
        GPBUtil::checkUint32($var);
        $this->relic_unique_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool okpbfpilfmd = 1;</code>
     * @return bool
     */
    public function getOkpbfpilfmd()
    {
        return $this->okpbfpilfmd;
    }

    /**
     * Generated from protobuf field <code>bool okpbfpilfmd = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOkpbfpilfmd($var)
    {
        GPBUtil::checkBool($var);
        $this->okpbfpilfmd = $var;

        return $this;
    }

}

