<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DJIJNPPOPJP (513)
 *
 * Generated from protobuf message <code>MarkItemScRsp</code>
 */
class MarkItemScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 item_id = 6;</code>
     */
    protected $item_id = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>bool lkigjaojlep = 10;</code>
     */
    protected $lkigjaojlep = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $item_id
     *     @type int $retcode
     *     @type bool $lkigjaojlep
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 item_id = 6;</code>
     * @return int
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Generated from protobuf field <code>uint32 item_id = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkUint32($var);
        $this->item_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool lkigjaojlep = 10;</code>
     * @return bool
     */
    public function getLkigjaojlep()
    {
        return $this->lkigjaojlep;
    }

    /**
     * Generated from protobuf field <code>bool lkigjaojlep = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setLkigjaojlep($var)
    {
        GPBUtil::checkBool($var);
        $this->lkigjaojlep = $var;

        return $this;
    }

}

