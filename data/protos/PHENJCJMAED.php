<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PHENJCJMAED</code>
 */
class PHENJCJMAED extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 select_hint_id = 7;</code>
     */
    protected $select_hint_id = 0;
    /**
     * Generated from protobuf field <code>repeated .RogueBuff fcmlpecgmkh = 1;</code>
     */
    private $fcmlpecgmkh;
    /**
     * Generated from protobuf field <code>repeated .RogueBuff jleahlnobnd = 10;</code>
     */
    private $jleahlnobnd;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $select_hint_id
     *     @type array<\RogueBuff>|\Google\Protobuf\Internal\RepeatedField $fcmlpecgmkh
     *     @type array<\RogueBuff>|\Google\Protobuf\Internal\RepeatedField $jleahlnobnd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 select_hint_id = 7;</code>
     * @return int
     */
    public function getSelectHintId()
    {
        return $this->select_hint_id;
    }

    /**
     * Generated from protobuf field <code>uint32 select_hint_id = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setSelectHintId($var)
    {
        GPBUtil::checkUint32($var);
        $this->select_hint_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueBuff fcmlpecgmkh = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFcmlpecgmkh()
    {
        return $this->fcmlpecgmkh;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueBuff fcmlpecgmkh = 1;</code>
     * @param array<\RogueBuff>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFcmlpecgmkh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueBuff::class);
        $this->fcmlpecgmkh = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueBuff jleahlnobnd = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJleahlnobnd()
    {
        return $this->jleahlnobnd;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueBuff jleahlnobnd = 10;</code>
     * @param array<\RogueBuff>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJleahlnobnd($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueBuff::class);
        $this->jleahlnobnd = $arr;

        return $this;
    }

}

