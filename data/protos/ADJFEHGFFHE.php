<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ADJFEHGFFHE</code>
 */
class ADJFEHGFFHE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 world_level = 9;</code>
     */
    protected $world_level = 0;
    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 8;</code>
     */
    protected $nbljpgfhdfi = 0;
    /**
     * Generated from protobuf field <code>repeated .BCPDMEMPLBM cjjaedialng = 10;</code>
     */
    private $cjjaedialng;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $world_level
     *     @type int $nbljpgfhdfi
     *     @type array<\BCPDMEMPLBM>|\Google\Protobuf\Internal\RepeatedField $cjjaedialng
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
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 8;</code>
     * @return int
     */
    public function getNbljpgfhdfi()
    {
        return $this->nbljpgfhdfi;
    }

    /**
     * Generated from protobuf field <code>uint32 nbljpgfhdfi = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setNbljpgfhdfi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nbljpgfhdfi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .BCPDMEMPLBM cjjaedialng = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCjjaedialng()
    {
        return $this->cjjaedialng;
    }

    /**
     * Generated from protobuf field <code>repeated .BCPDMEMPLBM cjjaedialng = 10;</code>
     * @param array<\BCPDMEMPLBM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCjjaedialng($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BCPDMEMPLBM::class);
        $this->cjjaedialng = $arr;

        return $this;
    }

}
