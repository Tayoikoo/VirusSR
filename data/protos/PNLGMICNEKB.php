<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PNLGMICNEKB</code>
 */
class PNLGMICNEKB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 hadkcjbfgmd = 3;</code>
     */
    private $hadkcjbfgmd;
    /**
     * Generated from protobuf field <code>uint32 world_level = 13;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 12;</code>
     */
    protected $nbljpgfhdfi = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $hadkcjbfgmd
     *     @type int $world_level
     *     @type int $nbljpgfhdfi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hadkcjbfgmd = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHadkcjbfgmd()
    {
        return $this->hadkcjbfgmd;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 hadkcjbfgmd = 3;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHadkcjbfgmd($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->hadkcjbfgmd = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 13;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 13;</code>
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
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 12;</code>
     * @return int
     */
    public function getNbljpgfhdfi()
    {
        return $this->nbljpgfhdfi;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setNbljpgfhdfi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nbljpgfhdfi = $var;

        return $this;
    }

}
