<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ILCEIONBICI</code>
 */
class ILCEIONBICI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .GHMOPDEFJOF OHNPNADBCMC = 9;</code>
     */
    private $OHNPNADBCMC;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\GHMOPDEFJOF>|\Google\Protobuf\Internal\RepeatedField $OHNPNADBCMC
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .GHMOPDEFJOF OHNPNADBCMC = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOHNPNADBCMC()
    {
        return $this->OHNPNADBCMC;
    }

    /**
     * Generated from protobuf field <code>repeated .GHMOPDEFJOF OHNPNADBCMC = 9;</code>
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

