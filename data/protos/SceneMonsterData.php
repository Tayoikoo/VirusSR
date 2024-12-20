<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SceneMonsterData</code>
 */
class SceneMonsterData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 cur_hp = 13;</code>
     */
    protected $cur_hp = 0;
    /**
     * Generated from protobuf field <code>uint32 max_hp = 14;</code>
     */
    protected $max_hp = 0;
    /**
     * Generated from protobuf field <code>uint32 monster_id = 15;</code>
     */
    protected $monster_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cur_hp
     *     @type int $max_hp
     *     @type int $monster_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 cur_hp = 13;</code>
     * @return int
     */
    public function getCurHp()
    {
        return $this->cur_hp;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_hp = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setCurHp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cur_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_hp = 14;</code>
     * @return int
     */
    public function getMaxHp()
    {
        return $this->max_hp;
    }

    /**
     * Generated from protobuf field <code>uint32 max_hp = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxHp($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_hp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_id = 15;</code>
     * @return int
     */
    public function getMonsterId()
    {
        return $this->monster_id;
    }

    /**
     * Generated from protobuf field <code>uint32 monster_id = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setMonsterId($var)
    {
        GPBUtil::checkUint32($var);
        $this->monster_id = $var;

        return $this;
    }

}

