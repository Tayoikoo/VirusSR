<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OACJJEILCEL</code>
 */
class OACJJEILCEL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 world_level = 9;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>uint32 KDFKCJLHHAF = 12;</code>
     */
    protected $KDFKCJLHHAF = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 6;</code>
     */
    private $avatar_list;
    /**
     * Generated from protobuf field <code>uint32 ODOAJJGMBCL = 2;</code>
     */
    protected $ODOAJJGMBCL = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $world_level
     *     @type int $KDFKCJLHHAF
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $avatar_list
     *     @type int $ODOAJJGMBCL
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 9;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 9;</code>
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
     * Generated from protobuf field <code>uint32 KDFKCJLHHAF = 12;</code>
     * @return int
     */
    public function getKDFKCJLHHAF()
    {
        return $this->KDFKCJLHHAF;
    }

    /**
     * Generated from protobuf field <code>uint32 KDFKCJLHHAF = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setKDFKCJLHHAF($var)
    {
        GPBUtil::checkUint32($var);
        $this->KDFKCJLHHAF = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvatarList()
    {
        return $this->avatar_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 avatar_list = 6;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvatarList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->avatar_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ODOAJJGMBCL = 2;</code>
     * @return int
     */
    public function getODOAJJGMBCL()
    {
        return $this->ODOAJJGMBCL;
    }

    /**
     * Generated from protobuf field <code>uint32 ODOAJJGMBCL = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setODOAJJGMBCL($var)
    {
        GPBUtil::checkUint32($var);
        $this->ODOAJJGMBCL = $var;

        return $this;
    }

}

