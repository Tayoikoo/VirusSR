<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EHOAHJMKKIC (7091)
 *
 * Generated from protobuf message <code>MonopolyScrachRaffleTicketScRsp</code>
 */
class MonopolyScrachRaffleTicketScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 oiplnennmmo = 2;</code>
     */
    protected $oiplnennmmo = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 fcejjhlcoim = 7;</code>
     */
    protected $fcejjhlcoim = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $oiplnennmmo
     *     @type int $retcode
     *     @type int $fcejjhlcoim
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 oiplnennmmo = 2;</code>
     * @return int|string
     */
    public function getOiplnennmmo()
    {
        return $this->oiplnennmmo;
    }

    /**
     * Generated from protobuf field <code>uint64 oiplnennmmo = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOiplnennmmo($var)
    {
        GPBUtil::checkUint64($var);
        $this->oiplnennmmo = $var;

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
     * Generated from protobuf field <code>uint32 fcejjhlcoim = 7;</code>
     * @return int
     */
    public function getFcejjhlcoim()
    {
        return $this->fcejjhlcoim;
    }

    /**
     * Generated from protobuf field <code>uint32 fcejjhlcoim = 7;</code>
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

