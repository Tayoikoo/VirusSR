<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HKBKMPEMDLL</code>
 */
class HKBKMPEMDLL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool KGKNFEMHJCB = 10;</code>
     */
    protected $KGKNFEMHJCB = false;
    /**
     * Generated from protobuf field <code>uint32 IJIIPGAFKJN = 3;</code>
     */
    protected $IJIIPGAFKJN = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $KGKNFEMHJCB
     *     @type int $IJIIPGAFKJN
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool KGKNFEMHJCB = 10;</code>
     * @return bool
     */
    public function getKGKNFEMHJCB()
    {
        return $this->KGKNFEMHJCB;
    }

    /**
     * Generated from protobuf field <code>bool KGKNFEMHJCB = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setKGKNFEMHJCB($var)
    {
        GPBUtil::checkBool($var);
        $this->KGKNFEMHJCB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IJIIPGAFKJN = 3;</code>
     * @return int
     */
    public function getIJIIPGAFKJN()
    {
        return $this->IJIIPGAFKJN;
    }

    /**
     * Generated from protobuf field <code>uint32 IJIIPGAFKJN = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIJIIPGAFKJN($var)
    {
        GPBUtil::checkUint32($var);
        $this->IJIIPGAFKJN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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

