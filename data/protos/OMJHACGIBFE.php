<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OMJHACGIBFE</code>
 */
class OMJHACGIBFE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 KONGAADEJEL = 1;</code>
     */
    protected $KONGAADEJEL = 0;
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
     *     @type int $KONGAADEJEL
     *     @type int $ILIFHHJFMIH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 KONGAADEJEL = 1;</code>
     * @return int
     */
    public function getKONGAADEJEL()
    {
        return $this->KONGAADEJEL;
    }

    /**
     * Generated from protobuf field <code>uint32 KONGAADEJEL = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKONGAADEJEL($var)
    {
        GPBUtil::checkUint32($var);
        $this->KONGAADEJEL = $var;

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
