<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * JJMOMOCDJIN (5684)
 *
 * Generated from protobuf message <code>PrepareRogueAdventureRoomScRsp</code>
 */
class PrepareRogueAdventureRoomScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.KMHADINCFOC ggajgdededh = 13;</code>
     */
    protected $ggajgdededh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type \KMHADINCFOC $ggajgdededh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
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
     * Generated from protobuf field <code>.KMHADINCFOC ggajgdededh = 13;</code>
     * @return \KMHADINCFOC|null
     */
    public function getGgajgdededh()
    {
        return $this->ggajgdededh;
    }

    public function hasGgajgdededh()
    {
        return isset($this->ggajgdededh);
    }

    public function clearGgajgdededh()
    {
        unset($this->ggajgdededh);
    }

    /**
     * Generated from protobuf field <code>.KMHADINCFOC ggajgdededh = 13;</code>
     * @param \KMHADINCFOC $var
     * @return $this
     */
    public function setGgajgdededh($var)
    {
        GPBUtil::checkMessage($var, \KMHADINCFOC::class);
        $this->ggajgdededh = $var;

        return $this;
    }

}

