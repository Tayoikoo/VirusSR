<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IPLIILBOGKE (4593)
 *
 * Generated from protobuf message <code>PlayerReturnInfoQueryScRsp</code>
 */
class PlayerReturnInfoQueryScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 mbcfbdpfndi = 15;</code>
     */
    protected $mbcfbdpfndi = 0;
    /**
     * Generated from protobuf field <code>.KODBOONBEBO bnkghfhhjik = 5;</code>
     */
    protected $bnkghfhhjik = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $mbcfbdpfndi
     *     @type \KODBOONBEBO $bnkghfhhjik
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
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
     * Generated from protobuf field <code>uint32 mbcfbdpfndi = 15;</code>
     * @return int
     */
    public function getMbcfbdpfndi()
    {
        return $this->mbcfbdpfndi;
    }

    /**
     * Generated from protobuf field <code>uint32 mbcfbdpfndi = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setMbcfbdpfndi($var)
    {
        GPBUtil::checkUint32($var);
        $this->mbcfbdpfndi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KODBOONBEBO bnkghfhhjik = 5;</code>
     * @return \KODBOONBEBO|null
     */
    public function getBnkghfhhjik()
    {
        return $this->bnkghfhhjik;
    }

    public function hasBnkghfhhjik()
    {
        return isset($this->bnkghfhhjik);
    }

    public function clearBnkghfhhjik()
    {
        unset($this->bnkghfhhjik);
    }

    /**
     * Generated from protobuf field <code>.KODBOONBEBO bnkghfhhjik = 5;</code>
     * @param \KODBOONBEBO $var
     * @return $this
     */
    public function setBnkghfhhjik($var)
    {
        GPBUtil::checkMessage($var, \KODBOONBEBO::class);
        $this->bnkghfhhjik = $var;

        return $this;
    }

}

