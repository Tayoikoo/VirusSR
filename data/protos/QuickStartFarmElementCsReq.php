<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IHEPLDPPMFA (1352)
 *
 * Generated from protobuf message <code>QuickStartFarmElementCsReq</code>
 */
class QuickStartFarmElementCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kidmdefnaak = 9;</code>
     */
    protected $kidmdefnaak = 0;
    /**
     * Generated from protobuf field <code>uint32 world_level = 4;</code>
     */
    protected $world_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kidmdefnaak
     *     @type int $world_level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kidmdefnaak = 9;</code>
     * @return int
     */
    public function getKidmdefnaak()
    {
        return $this->kidmdefnaak;
    }

    /**
     * Generated from protobuf field <code>uint32 kidmdefnaak = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setKidmdefnaak($var)
    {
        GPBUtil::checkUint32($var);
        $this->kidmdefnaak = $var;

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

}
