<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LJCNNJCJLGH (4725)
 *
 * Generated from protobuf message <code>AlleyPlacingGameScRsp</code>
 */
class AlleyPlacingGameScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 mgcpablikee = 3;</code>
     */
    protected $mgcpablikee = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 mjeojalilaj = 2;</code>
     */
    protected $mjeojalilaj = 0;
    /**
     * Generated from protobuf field <code>uint32 obcpiebbkij = 11;</code>
     */
    protected $obcpiebbkij = 0;
    /**
     * Generated from protobuf field <code>uint32 nnalloifkjo = 9;</code>
     */
    protected $nnalloifkjo = 0;
    /**
     * Generated from protobuf field <code>uint32 iaigcclpnne = 8;</code>
     */
    protected $iaigcclpnne = 0;
    /**
     * Generated from protobuf field <code>uint32 ifolkfampdj = 7;</code>
     */
    protected $ifolkfampdj = 0;
    /**
     * Generated from protobuf field <code>uint32 event_id = 4;</code>
     */
    protected $event_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mgcpablikee
     *     @type int $retcode
     *     @type int $mjeojalilaj
     *     @type int $obcpiebbkij
     *     @type int $nnalloifkjo
     *     @type int $iaigcclpnne
     *     @type int $ifolkfampdj
     *     @type int $event_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 mgcpablikee = 3;</code>
     * @return int
     */
    public function getMgcpablikee()
    {
        return $this->mgcpablikee;
    }

    /**
     * Generated from protobuf field <code>uint32 mgcpablikee = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMgcpablikee($var)
    {
        GPBUtil::checkUint32($var);
        $this->mgcpablikee = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
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
     * Generated from protobuf field <code>uint32 mjeojalilaj = 2;</code>
     * @return int
     */
    public function getMjeojalilaj()
    {
        return $this->mjeojalilaj;
    }

    /**
     * Generated from protobuf field <code>uint32 mjeojalilaj = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMjeojalilaj($var)
    {
        GPBUtil::checkUint32($var);
        $this->mjeojalilaj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 obcpiebbkij = 11;</code>
     * @return int
     */
    public function getObcpiebbkij()
    {
        return $this->obcpiebbkij;
    }

    /**
     * Generated from protobuf field <code>uint32 obcpiebbkij = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setObcpiebbkij($var)
    {
        GPBUtil::checkUint32($var);
        $this->obcpiebbkij = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nnalloifkjo = 9;</code>
     * @return int
     */
    public function getNnalloifkjo()
    {
        return $this->nnalloifkjo;
    }

    /**
     * Generated from protobuf field <code>uint32 nnalloifkjo = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setNnalloifkjo($var)
    {
        GPBUtil::checkUint32($var);
        $this->nnalloifkjo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 iaigcclpnne = 8;</code>
     * @return int
     */
    public function getIaigcclpnne()
    {
        return $this->iaigcclpnne;
    }

    /**
     * Generated from protobuf field <code>uint32 iaigcclpnne = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setIaigcclpnne($var)
    {
        GPBUtil::checkUint32($var);
        $this->iaigcclpnne = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ifolkfampdj = 7;</code>
     * @return int
     */
    public function getIfolkfampdj()
    {
        return $this->ifolkfampdj;
    }

    /**
     * Generated from protobuf field <code>uint32 ifolkfampdj = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIfolkfampdj($var)
    {
        GPBUtil::checkUint32($var);
        $this->ifolkfampdj = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 4;</code>
     * @return int
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>uint32 event_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkUint32($var);
        $this->event_id = $var;

        return $this;
    }

}
