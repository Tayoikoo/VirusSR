<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IEJOOPKJOOF (1367)
 *
 * Generated from protobuf message <code>QuickStartCocoonStageCsReq</code>
 */
class QuickStartCocoonStageCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 dfpaikajkal = 11;</code>
     */
    protected $dfpaikajkal = 0;
    /**
     * Generated from protobuf field <code>uint32 wave = 13;</code>
     */
    protected $wave = 0;
    /**
     * Generated from protobuf field <code>uint32 world_level = 2;</code>
     */
    protected $world_level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dfpaikajkal
     *     @type int $wave
     *     @type int $world_level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 dfpaikajkal = 11;</code>
     * @return int
     */
    public function getDfpaikajkal()
    {
        return $this->dfpaikajkal;
    }

    /**
     * Generated from protobuf field <code>uint32 dfpaikajkal = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setDfpaikajkal($var)
    {
        GPBUtil::checkUint32($var);
        $this->dfpaikajkal = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 13;</code>
     * @return int
     */
    public function getWave()
    {
        return $this->wave;
    }

    /**
     * Generated from protobuf field <code>uint32 wave = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setWave($var)
    {
        GPBUtil::checkUint32($var);
        $this->wave = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 2;</code>
     * @return int
     */
    public function getWorldLevel()
    {
        return $this->world_level;
    }

    /**
     * Generated from protobuf field <code>uint32 world_level = 2;</code>
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
