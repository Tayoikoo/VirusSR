<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PunkLordMonsterBasicInfo</code>
 */
class PunkLordMonsterBasicInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 monster_id = 2;</code>
     */
    protected $monster_id = 0;
    /**
     * Generated from protobuf field <code>uint32 config_id = 3;</code>
     */
    protected $config_id = 0;
    /**
     * Generated from protobuf field <code>uint32 world_level = 4;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>int64 create_time = 5;</code>
     */
    protected $create_time = 0;
    /**
     * Generated from protobuf field <code>uint32 left_hp = 6;</code>
     */
    protected $left_hp = 0;
    /**
     * Generated from protobuf field <code>uint32 lppoobipgmk = 7;</code>
     */
    protected $lppoobipgmk = 0;
    /**
     * Generated from protobuf field <code>.PunkLordShareType gagnibbldff = 8;</code>
     */
    protected $gagnibbldff = 0;
    /**
     * Generated from protobuf field <code>bool jcnedegkkja = 9;</code>
     */
    protected $jcnedegkkja = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $uid
     *     @type int $monster_id
     *     @type int $config_id
     *     @type int $world_level
     *     @type int|string $create_time
     *     @type int $left_hp
     *     @type int $lppoobipgmk
     *     @type int $gagnibbldff
     *     @type bool $jcnedegkkja
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 1;</code>
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
     * Generated from protobuf field <code>uint32 monster_id = 2;</code>
     * @return int
     */
    public function getMonsterId()
    {
        return $this->monster_id;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterId($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 3;</code>
     * @return int
     */
    public function getConfigId()
    {
        return $this->config_id;
    }

    /**
     * Generated from protobuf field <code>uint32 config_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setConfigId($var)
    {
        GPBUtil::checkUint32($var);
        $this->config_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 4;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWorldLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->world_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 create_time = 5;</code>
     * @return int|string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Generated from protobuf field <code>int64 create_time = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 left_hp = 6;</code>
     * @return int
     */
    public function getLeftHp()
    {
        return $this->left_hp;
    }

    /**
     * Generated from protobuf field <code>uint32 left_hp = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setLeftHp($var)
    {
        GPBUtil::checkUint32($var);
        $this->left_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lppoobipgmk = 7;</code>
     * @return int
     */
    public function getLppoobipgmk()
    {
        return $this->lppoobipgmk;
    }

    /**
     * Generated from protobuf field <code>uint32 lppoobipgmk = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLppoobipgmk($var)
    {
        GPBUtil::checkUint32($var);
        $this->lppoobipgmk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PunkLordShareType gagnibbldff = 8;</code>
     * @return int
     */
    public function getGagnibbldff()
    {
        return $this->gagnibbldff;
    }

    /**
     * Generated from protobuf field <code>.PunkLordShareType gagnibbldff = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setGagnibbldff($var)
    {
        GPBUtil::checkEnum($var, \PunkLordShareType::class);
        $this->gagnibbldff = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool jcnedegkkja = 9;</code>
     * @return bool
     */
    public function getJcnedegkkja()
    {
        return $this->jcnedegkkja;
    }

    /**
     * Generated from protobuf field <code>bool jcnedegkkja = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setJcnedegkkja($var)
    {
        GPBUtil::checkBool($var);
        $this->jcnedegkkja = $var;

        return $this;
    }

}

