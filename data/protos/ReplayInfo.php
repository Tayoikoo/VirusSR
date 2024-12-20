<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ReplayInfo</code>
 */
class ReplayInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 mnojpieebco = 1;</code>
     */
    protected $mnojpieebco = 0;
    /**
     * Generated from protobuf field <code>.ReplayType replay_type = 2;</code>
     */
    protected $replay_type = 0;
    /**
     * Generated from protobuf field <code>uint32 stage_id = 3;</code>
     */
    protected $stage_id = 0;
    /**
     * Generated from protobuf field <code>uint32 uid = 4;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>string nickname = 5;</code>
     */
    protected $nickname = '';
    /**
     * Generated from protobuf field <code>uint32 head_icon = 6;</code>
     */
    protected $head_icon = 0;
    /**
     * Generated from protobuf field <code>string replay_name = 7;</code>
     */
    protected $replay_name = '';
    /**
     * Generated from protobuf field <code>uint64 create_time = 8;</code>
     */
    protected $create_time = 0;
    /**
     * Generated from protobuf field <code>uint32 inepcgkdobl = 9;</code>
     */
    protected $inepcgkdobl = 0;
    /**
     * Generated from protobuf field <code>uint32 acocbgccece = 10;</code>
     */
    protected $acocbgccece = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $mnojpieebco
     *     @type int $replay_type
     *     @type int $stage_id
     *     @type int $uid
     *     @type string $nickname
     *     @type int $head_icon
     *     @type string $replay_name
     *     @type int|string $create_time
     *     @type int $inepcgkdobl
     *     @type int $acocbgccece
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 mnojpieebco = 1;</code>
     * @return int|string
     */
    public function getMnojpieebco()
    {
        return $this->mnojpieebco;
    }

    /**
     * Generated from protobuf field <code>uint64 mnojpieebco = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMnojpieebco($var)
    {
        GPBUtil::checkUint64($var);
        $this->mnojpieebco = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ReplayType replay_type = 2;</code>
     * @return int
     */
    public function getReplayType()
    {
        return $this->replay_type;
    }

    /**
     * Generated from protobuf field <code>.ReplayType replay_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setReplayType($var)
    {
        GPBUtil::checkEnum($var, \ReplayType::class);
        $this->replay_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 3;</code>
     * @return int
     */
    public function getStageId()
    {
        return $this->stage_id;
    }

    /**
     * Generated from protobuf field <code>uint32 stage_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setStageId($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 4;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nickname = 5;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Generated from protobuf field <code>string nickname = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 head_icon = 6;</code>
     * @return int
     */
    public function getHeadIcon()
    {
        return $this->head_icon;
    }

    /**
     * Generated from protobuf field <code>uint32 head_icon = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHeadIcon($var)
    {
        GPBUtil::checkUint32($var);
        $this->head_icon = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string replay_name = 7;</code>
     * @return string
     */
    public function getReplayName()
    {
        return $this->replay_name;
    }

    /**
     * Generated from protobuf field <code>string replay_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setReplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->replay_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_time = 8;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Generated from protobuf field <code>uint64 create_time = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 inepcgkdobl = 9;</code>
     * @return int
     */
    public function getInepcgkdobl()
    {
        return $this->inepcgkdobl;
    }

    /**
     * Generated from protobuf field <code>uint32 inepcgkdobl = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setInepcgkdobl($var)
    {
        GPBUtil::checkUint32($var);
        $this->inepcgkdobl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 acocbgccece = 10;</code>
     * @return int
     */
    public function getAcocbgccece()
    {
        return $this->acocbgccece;
    }

    /**
     * Generated from protobuf field <code>uint32 acocbgccece = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setAcocbgccece($var)
    {
        GPBUtil::checkUint32($var);
        $this->acocbgccece = $var;

        return $this;
    }

}
