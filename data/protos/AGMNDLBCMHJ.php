<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AGMNDLBCMHJ</code>
 */
class AGMNDLBCMHJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool JBNPNNDEHMJ = 1;</code>
     */
    protected $JBNPNNDEHMJ = false;
    /**
     * Generated from protobuf field <code>uint32 HHIBJKDKELB = 15;</code>
     */
    protected $HHIBJKDKELB = 0;
    /**
     * Generated from protobuf field <code>repeated .GachaCeilingAvatar avatar_list = 14;</code>
     */
    private $avatar_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $JBNPNNDEHMJ
     *     @type int $HHIBJKDKELB
     *     @type array<\GachaCeilingAvatar>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool JBNPNNDEHMJ = 1;</code>
     * @return bool
     */
    public function getJBNPNNDEHMJ()
    {
        return $this->JBNPNNDEHMJ;
    }

    /**
     * Generated from protobuf field <code>bool JBNPNNDEHMJ = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setJBNPNNDEHMJ($var)
    {
        GPBUtil::checkBool($var);
        $this->JBNPNNDEHMJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HHIBJKDKELB = 15;</code>
     * @return int
     */
    public function getHHIBJKDKELB()
    {
        return $this->HHIBJKDKELB;
    }

    /**
     * Generated from protobuf field <code>uint32 HHIBJKDKELB = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setHHIBJKDKELB($var)
    {
        GPBUtil::checkUint32($var);
        $this->HHIBJKDKELB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .GachaCeilingAvatar avatar_list = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .GachaCeilingAvatar avatar_list = 14;</code>
     * @param array<\GachaCeilingAvatar>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GachaCeilingAvatar::class);
        $this->avatar_list = $arr;

        return $this;
    }

}
