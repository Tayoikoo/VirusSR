<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LDNGJINCBHN</code>
 */
class LDNGJINCBHN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .FFMHCHHHGBA avatar_list = 12;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 4;</code>
     */
    private $buff_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\FFMHCHHHGBA>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $buff_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .FFMHCHHHGBA avatar_list = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated .FFMHCHHHGBA avatar_list = 12;</code>
     * @param array<\FFMHCHHHGBA>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FFMHCHHHGBA::class);
        $this->avatar_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBuffList()
    {
        return $this->buff_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 buff_list = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBuffList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->buff_list = $arr;

        return $this;
    }

}

