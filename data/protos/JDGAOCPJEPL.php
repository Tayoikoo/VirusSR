<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JDGAOCPJEPL</code>
 */
class JDGAOCPJEPL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MNNIFHHGIKD MLGDKDEKPID = 10;</code>
     */
    protected $MLGDKDEKPID = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MNNIFHHGIKD $MLGDKDEKPID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MNNIFHHGIKD MLGDKDEKPID = 10;</code>
     * @return \MNNIFHHGIKD|null
     */
    public function getMLGDKDEKPID()
    {
        return $this->MLGDKDEKPID;
    }

    public function hasMLGDKDEKPID()
    {
        return isset($this->MLGDKDEKPID);
    }

    public function clearMLGDKDEKPID()
    {
        unset($this->MLGDKDEKPID);
    }

    /**
     * Generated from protobuf field <code>.MNNIFHHGIKD MLGDKDEKPID = 10;</code>
     * @param \MNNIFHHGIKD $var
     * @return $this
     */
    public function setMLGDKDEKPID($var)
    {
        GPBUtil::checkMessage($var, \MNNIFHHGIKD::class);
        $this->MLGDKDEKPID = $var;

        return $this;
    }

}
