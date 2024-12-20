<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BEEGGKENDBJ (2911)
 *
 * Generated from protobuf message <code>GetPlatformPlayerInfoScRsp</code>
 */
class GetPlatformPlayerInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .PlayerSimpleInfo player_info_list = 1;</code>
     */
    private $player_info_list;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\PlayerSimpleInfo>|\Google\Protobuf\Internal\RepeatedField $player_info_list
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .PlayerSimpleInfo player_info_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlayerInfoList()
    {
        return $this->player_info_list;
    }

    /**
     * Generated from protobuf field <code>repeated .PlayerSimpleInfo player_info_list = 1;</code>
     * @param array<\PlayerSimpleInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlayerInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \PlayerSimpleInfo::class);
        $this->player_info_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

