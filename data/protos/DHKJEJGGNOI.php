<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DHKJEJGGNOI</code>
 */
class DHKJEJGGNOI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .RogueCommonBuff hgalbeelddd = 13;</code>
     */
    private $hgalbeelddd;
    /**
     * Generated from protobuf field <code>uint32 select_hint_id = 12;</code>
     */
    protected $select_hint_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\RogueCommonBuff>|\Google\Protobuf\Internal\RepeatedField $hgalbeelddd
     *     @type int $select_hint_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .RogueCommonBuff hgalbeelddd = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHgalbeelddd()
    {
        return $this->hgalbeelddd;
    }

    /**
     * Generated from protobuf field <code>repeated .RogueCommonBuff hgalbeelddd = 13;</code>
     * @param array<\RogueCommonBuff>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHgalbeelddd($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RogueCommonBuff::class);
        $this->hgalbeelddd = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 select_hint_id = 12;</code>
     * @return int
     */
    public function getSelectHintId()
    {
        return $this->select_hint_id;
    }

    /**
     * Generated from protobuf field <code>uint32 select_hint_id = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setSelectHintId($var)
    {
        GPBUtil::checkUint32($var);
        $this->select_hint_id = $var;

        return $this;
    }

}
