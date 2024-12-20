<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>RelicAffix</code>
 */
class RelicAffix extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 affix_id = 1;</code>
     */
    protected $affix_id = 0;
    /**
     * Generated from protobuf field <code>uint32 cnt = 2;</code>
     */
    protected $cnt = 0;
    /**
     * Generated from protobuf field <code>uint32 step = 3;</code>
     */
    protected $step = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $affix_id
     *     @type int $cnt
     *     @type int $step
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 affix_id = 1;</code>
     * @return int
     */
    public function getAffixId()
    {
        return $this->affix_id;
    }

    /**
     * Generated from protobuf field <code>uint32 affix_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAffixId($var)
    {
        GPBUtil::checkUint32($var);
        $this->affix_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cnt = 2;</code>
     * @return int
     */
    public function getCnt()
    {
        return $this->cnt;
    }

    /**
     * Generated from protobuf field <code>uint32 cnt = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->cnt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 step = 3;</code>
     * @return int
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Generated from protobuf field <code>uint32 step = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStep($var)
    {
        GPBUtil::checkUint32($var);
        $this->step = $var;

        return $this;
    }

}
