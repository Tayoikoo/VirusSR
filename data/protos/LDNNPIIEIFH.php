<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LDNNPIIEIFH</code>
 */
class LDNNPIIEIFH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 LFKPICLDBBE = 2;</code>
     */
    protected $LFKPICLDBBE = 0;
    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 9;</code>
     */
    protected $ILIFHHJFMIH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $LFKPICLDBBE
     *     @type int $ILIFHHJFMIH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 LFKPICLDBBE = 2;</code>
     * @return int|string
     */
    public function getLFKPICLDBBE()
    {
        return $this->LFKPICLDBBE;
    }

    /**
     * Generated from protobuf field <code>uint64 LFKPICLDBBE = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLFKPICLDBBE($var)
    {
        GPBUtil::checkUint64($var);
        $this->LFKPICLDBBE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 9;</code>
     * @return int
     */
    public function getILIFHHJFMIH()
    {
        return $this->ILIFHHJFMIH;
    }

    /**
     * Generated from protobuf field <code>uint32 ILIFHHJFMIH = 9;</code>
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

