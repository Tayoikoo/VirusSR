<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BNMKGCJHMBM</code>
 */
class BNMKGCJHMBM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool ONHAAHBADNH = 8;</code>
     */
    protected $ONHAAHBADNH = false;
    /**
     * Generated from protobuf field <code>uint32 id = 10;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 11;</code>
     */
    protected $ILIFHHJFMIH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $ONHAAHBADNH
     *     @type int $id
     *     @type int $ILIFHHJFMIH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool ONHAAHBADNH = 8;</code>
     * @return bool
     */
    public function getONHAAHBADNH()
    {
        return $this->ONHAAHBADNH;
    }

    /**
     * Generated from protobuf field <code>bool ONHAAHBADNH = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setONHAAHBADNH($var)
    {
        GPBUtil::checkBool($var);
        $this->ONHAAHBADNH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 10;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint32 id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 11;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setILIFHHJFMIH($var)
    {
        GPBUtil::checkUint32($var);
        $this->ILIFHHJFMIH = $var;

        return $this;
    }

}
