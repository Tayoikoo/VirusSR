<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FNMDDPELMBD</code>
 */
class FNMDDPELMBD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .GHMOPDEFJOF OHNPNADBCMC = 3;</code>
     */
    private $OHNPNADBCMC;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<\GHMOPDEFJOF>|\Google\Protobuf\Internal\RepeatedField $OHNPNADBCMC
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
     * Generated from protobuf field <code>repeated .GHMOPDEFJOF OHNPNADBCMC = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOHNPNADBCMC()
    {
        return $this->OHNPNADBCMC;
    }

    /**
     * Generated from protobuf field <code>repeated .GHMOPDEFJOF OHNPNADBCMC = 3;</code>
     * @param array<\GHMOPDEFJOF>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOHNPNADBCMC($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GHMOPDEFJOF::class);
        $this->OHNPNADBCMC = $arr;

        return $this;
    }

}
