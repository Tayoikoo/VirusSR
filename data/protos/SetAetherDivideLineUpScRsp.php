<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CEKBFJMMGIB (4825)
 *
 * Generated from protobuf message <code>SetAetherDivideLineUpScRsp</code>
 */
class SetAetherDivideLineUpScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.AetherDivideLineupInfo lineup = 9;</code>
     */
    protected $lineup = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \AetherDivideLineupInfo $lineup
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.AetherDivideLineupInfo lineup = 9;</code>
     * @return \AetherDivideLineupInfo|null
     */
    public function getLineup()
    {
        return $this->lineup;
    }

    public function hasLineup()
    {
        return isset($this->lineup);
    }

    public function clearLineup()
    {
        unset($this->lineup);
    }

    /**
     * Generated from protobuf field <code>.AetherDivideLineupInfo lineup = 9;</code>
     * @param \AetherDivideLineupInfo $var
     * @return $this
     */
    public function setLineup($var)
    {
        GPBUtil::checkMessage($var, \AetherDivideLineupInfo::class);
        $this->lineup = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
