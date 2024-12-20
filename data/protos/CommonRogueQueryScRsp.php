<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FDENABFNDJF (5672)
 *
 * Generated from protobuf message <code>CommonRogueQueryScRsp</code>
 */
class CommonRogueQueryScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fnkgaejjbbi = 7;</code>
     */
    protected $fnkgaejjbbi = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.BBIELDAHLAF rogue_get_info = 6;</code>
     */
    protected $rogue_get_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fnkgaejjbbi
     *     @type int $retcode
     *     @type \BBIELDAHLAF $rogue_get_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fnkgaejjbbi = 7;</code>
     * @return int
     */
    public function getFnkgaejjbbi()
    {
        return $this->fnkgaejjbbi;
    }

    /**
     * Generated from protobuf field <code>uint32 fnkgaejjbbi = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFnkgaejjbbi($var)
    {
        GPBUtil::checkUint32($var);
        $this->fnkgaejjbbi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BBIELDAHLAF rogue_get_info = 6;</code>
     * @return \BBIELDAHLAF|null
     */
    public function getRogueGetInfo()
    {
        return $this->rogue_get_info;
    }

    public function hasRogueGetInfo()
    {
        return isset($this->rogue_get_info);
    }

    public function clearRogueGetInfo()
    {
        unset($this->rogue_get_info);
    }

    /**
     * Generated from protobuf field <code>.BBIELDAHLAF rogue_get_info = 6;</code>
     * @param \BBIELDAHLAF $var
     * @return $this
     */
    public function setRogueGetInfo($var)
    {
        GPBUtil::checkMessage($var, \BBIELDAHLAF::class);
        $this->rogue_get_info = $var;

        return $this;
    }

}
