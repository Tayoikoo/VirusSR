<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KOFOFDCPONC (518)
 *
 * Generated from protobuf message <code>SetTurnFoodSwitchScRsp</code>
 */
class SetTurnFoodSwitchScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.TurnFoodSwitch nifnpblkjbe = 4;</code>
     */
    protected $nifnpblkjbe = 0;
    /**
     * Generated from protobuf field <code>bool dpjehjcdbcm = 3;</code>
     */
    protected $dpjehjcdbcm = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $nifnpblkjbe
     *     @type bool $dpjehjcdbcm
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
     * Generated from protobuf field <code>.TurnFoodSwitch nifnpblkjbe = 4;</code>
     * @return int
     */
    public function getNifnpblkjbe()
    {
        return $this->nifnpblkjbe;
    }

    /**
     * Generated from protobuf field <code>.TurnFoodSwitch nifnpblkjbe = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNifnpblkjbe($var)
    {
        GPBUtil::checkEnum($var, \TurnFoodSwitch::class);
        $this->nifnpblkjbe = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool dpjehjcdbcm = 3;</code>
     * @return bool
     */
    public function getDpjehjcdbcm()
    {
        return $this->dpjehjcdbcm;
    }

    /**
     * Generated from protobuf field <code>bool dpjehjcdbcm = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDpjehjcdbcm($var)
    {
        GPBUtil::checkBool($var);
        $this->dpjehjcdbcm = $var;

        return $this;
    }

}

