<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DBMIEMCPMGC</code>
 */
class DBMIEMCPMGC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string DPOJNDPGDFK = 8;</code>
     */
    protected $DPOJNDPGDFK = '';
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 7;</code>
     */
    protected $ILIFHHJFMIH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DPOJNDPGDFK
     *     @type int $ILIFHHJFMIH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string DPOJNDPGDFK = 8;</code>
     * @return string
     */
    public function getDPOJNDPGDFK()
    {
        return $this->DPOJNDPGDFK;
    }

    /**
     * Generated from protobuf field <code>string DPOJNDPGDFK = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDPOJNDPGDFK($var)
    {
        GPBUtil::checkString($var, True);
        $this->DPOJNDPGDFK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 7;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 7;</code>
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

