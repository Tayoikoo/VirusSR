<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HNCPKLOACIK (1877)
 *
 * Generated from protobuf message <code>SyncRogueVirtualItemInfoScNotify</code>
 */
class SyncRogueVirtualItemInfoScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.RogueVirtualItemInfo lmpnoceabnh = 13;</code>
     */
    protected $lmpnoceabnh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RogueVirtualItemInfo $lmpnoceabnh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.RogueVirtualItemInfo lmpnoceabnh = 13;</code>
     * @return \RogueVirtualItemInfo|null
     */
    public function getLmpnoceabnh()
    {
        return $this->lmpnoceabnh;
    }

    public function hasLmpnoceabnh()
    {
        return isset($this->lmpnoceabnh);
    }

    public function clearLmpnoceabnh()
    {
        unset($this->lmpnoceabnh);
    }

    /**
     * Generated from protobuf field <code>.RogueVirtualItemInfo lmpnoceabnh = 13;</code>
     * @param \RogueVirtualItemInfo $var
     * @return $this
     */
    public function setLmpnoceabnh($var)
    {
        GPBUtil::checkMessage($var, \RogueVirtualItemInfo::class);
        $this->lmpnoceabnh = $var;

        return $this;
    }

}

