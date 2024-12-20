<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HEPLOMJCIOA (1498)
 *
 * Generated from protobuf message <code>GetSceneMapInfoScRsp</code>
 */
class GetSceneMapInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .SceneMapInfo map_info_list = 3;</code>
     */
    private $map_info_list;
    /**
     * Generated from protobuf field <code>bool pnbfdkenojp = 13;</code>
     */
    protected $pnbfdkenojp = false;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\SceneMapInfo>|\Google\Protobuf\Internal\RepeatedField $map_info_list
     *     @type bool $pnbfdkenojp
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .SceneMapInfo map_info_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMapInfoList()
    {
        return $this->map_info_list;
    }

    /**
     * Generated from protobuf field <code>repeated .SceneMapInfo map_info_list = 3;</code>
     * @param array<\SceneMapInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMapInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \SceneMapInfo::class);
        $this->map_info_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool pnbfdkenojp = 13;</code>
     * @return bool
     */
    public function getPnbfdkenojp()
    {
        return $this->pnbfdkenojp;
    }

    /**
     * Generated from protobuf field <code>bool pnbfdkenojp = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setPnbfdkenojp($var)
    {
        GPBUtil::checkBool($var);
        $this->pnbfdkenojp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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

