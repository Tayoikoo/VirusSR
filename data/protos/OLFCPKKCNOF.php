<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OLFCPKKCNOF</code>
 */
class OLFCPKKCNOF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 9;</code>
     */
    protected $OFAGGKBMPJN = 0;
    /**
     * Generated from protobuf field <code>repeated .FFDCMAMKPAB PPNKHDECJBP = 7;</code>
     */
    private $PPNKHDECJBP;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 ODGNMLBOEAK = 1;</code>
     */
    private $ODGNMLBOEAK;
    /**
     * Generated from protobuf field <code>uint32 HOJJFBAEBDA = 6;</code>
     */
    protected $HOJJFBAEBDA = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $OFAGGKBMPJN
     *     @type array<\FFDCMAMKPAB>|\Google\Protobuf\Internal\RepeatedField $PPNKHDECJBP
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $ODGNMLBOEAK
     *     @type int $HOJJFBAEBDA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 9;</code>
     * @return int
     */
    public function getOFAGGKBMPJN()
    {
        return $this->OFAGGKBMPJN;
    }

    /**
     * Generated from protobuf field <code>uint32 OFAGGKBMPJN = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setOFAGGKBMPJN($var)
    {
        GPBUtil::checkUint32($var);
        $this->OFAGGKBMPJN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FFDCMAMKPAB PPNKHDECJBP = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPPNKHDECJBP()
    {
        return $this->PPNKHDECJBP;
    }

    /**
     * Generated from protobuf field <code>repeated .FFDCMAMKPAB PPNKHDECJBP = 7;</code>
     * @param array<\FFDCMAMKPAB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPPNKHDECJBP($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FFDCMAMKPAB::class);
        $this->PPNKHDECJBP = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>repeated uint32 ODGNMLBOEAK = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getODGNMLBOEAK()
    {
        return $this->ODGNMLBOEAK;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 ODGNMLBOEAK = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setODGNMLBOEAK($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->ODGNMLBOEAK = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HOJJFBAEBDA = 6;</code>
     * @return int
     */
    public function getHOJJFBAEBDA()
    {
        return $this->HOJJFBAEBDA;
    }

    /**
     * Generated from protobuf field <code>uint32 HOJJFBAEBDA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHOJJFBAEBDA($var)
    {
        GPBUtil::checkUint32($var);
        $this->HOJJFBAEBDA = $var;

        return $this;
    }

}
