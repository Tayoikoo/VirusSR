<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EAFPJJINGGK (7089)
 *
 * Generated from protobuf message <code>MonopolyGetDailyInitItemScRsp</code>
 */
class MonopolyGetDailyInitItemScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ncoikodkhch = 15;</code>
     */
    protected $ncoikodkhch = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 jjjmlidbein = 9;</code>
     */
    protected $jjjmlidbein = 0;
    /**
     * Generated from protobuf field <code>int64 clgngejeppf = 12;</code>
     */
    protected $clgngejeppf = 0;
    /**
     * Generated from protobuf field <code>uint32 clmjnnfpaoa = 13;</code>
     */
    protected $clmjnnfpaoa = 0;
    /**
     * Generated from protobuf field <code>uint32 hmheangodhn = 6;</code>
     */
    protected $hmheangodhn = 0;
    /**
     * Generated from protobuf field <code>uint32 hplljdaadoi = 4;</code>
     */
    protected $hplljdaadoi = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ncoikodkhch
     *     @type int $retcode
     *     @type int $jjjmlidbein
     *     @type int|string $clgngejeppf
     *     @type int $clmjnnfpaoa
     *     @type int $hmheangodhn
     *     @type int $hplljdaadoi
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ncoikodkhch = 15;</code>
     * @return int
     */
    public function getNcoikodkhch()
    {
        return $this->ncoikodkhch;
    }

    /**
     * Generated from protobuf field <code>uint32 ncoikodkhch = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setNcoikodkhch($var)
    {
        GPBUtil::checkUint32($var);
        $this->ncoikodkhch = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>uint32 jjjmlidbein = 9;</code>
     * @return int
     */
    public function getJjjmlidbein()
    {
        return $this->jjjmlidbein;
    }

    /**
     * Generated from protobuf field <code>uint32 jjjmlidbein = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setJjjmlidbein($var)
    {
        GPBUtil::checkUint32($var);
        $this->jjjmlidbein = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 clgngejeppf = 12;</code>
     * @return int|string
     */
    public function getClgngejeppf()
    {
        return $this->clgngejeppf;
    }

    /**
     * Generated from protobuf field <code>int64 clgngejeppf = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClgngejeppf($var)
    {
        GPBUtil::checkInt64($var);
        $this->clgngejeppf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 clmjnnfpaoa = 13;</code>
     * @return int
     */
    public function getClmjnnfpaoa()
    {
        return $this->clmjnnfpaoa;
    }

    /**
     * Generated from protobuf field <code>uint32 clmjnnfpaoa = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setClmjnnfpaoa($var)
    {
        GPBUtil::checkUint32($var);
        $this->clmjnnfpaoa = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hmheangodhn = 6;</code>
     * @return int
     */
    public function getHmheangodhn()
    {
        return $this->hmheangodhn;
    }

    /**
     * Generated from protobuf field <code>uint32 hmheangodhn = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setHmheangodhn($var)
    {
        GPBUtil::checkUint32($var);
        $this->hmheangodhn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hplljdaadoi = 4;</code>
     * @return int
     */
    public function getHplljdaadoi()
    {
        return $this->hplljdaadoi;
    }

    /**
     * Generated from protobuf field <code>uint32 hplljdaadoi = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHplljdaadoi($var)
    {
        GPBUtil::checkUint32($var);
        $this->hplljdaadoi = $var;

        return $this;
    }

}

