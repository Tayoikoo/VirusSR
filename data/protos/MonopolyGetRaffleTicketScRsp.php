<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HJBLBMHBHBK (7047)
 *
 * Generated from protobuf message <code>MonopolyGetRaffleTicketScRsp</code>
 */
class MonopolyGetRaffleTicketScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .BLOEOEDIKAD ghiccfchedf = 12;</code>
     */
    private $ghiccfchedf;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 fcejjhlcoim = 1;</code>
     */
    protected $fcejjhlcoim = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\BLOEOEDIKAD>|\Google\Protobuf\Internal\RepeatedField $ghiccfchedf
     *     @type int $retcode
     *     @type int $fcejjhlcoim
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .BLOEOEDIKAD ghiccfchedf = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGhiccfchedf()
    {
        return $this->ghiccfchedf;
    }

    /**
     * Generated from protobuf field <code>repeated .BLOEOEDIKAD ghiccfchedf = 12;</code>
     * @param array<\BLOEOEDIKAD>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGhiccfchedf($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \BLOEOEDIKAD::class);
        $this->ghiccfchedf = $arr;

        return $this;
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
     * Generated from protobuf field <code>uint32 fcejjhlcoim = 1;</code>
     * @return int
     */
    public function getFcejjhlcoim()
    {
        return $this->fcejjhlcoim;
    }

    /**
     * Generated from protobuf field <code>uint32 fcejjhlcoim = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFcejjhlcoim($var)
    {
        GPBUtil::checkUint32($var);
        $this->fcejjhlcoim = $var;

        return $this;
    }

}

