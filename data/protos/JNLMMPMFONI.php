<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JNLMMPMFONI</code>
 */
class JNLMMPMFONI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GFKIHHOPJDG = 15;</code>
     */
    protected $GFKIHHOPJDG = 0;
    /**
     * Generated from protobuf field <code>bool KHGGDIHPHPA = 2;</code>
     */
    protected $KHGGDIHPHPA = false;
    /**
     * Generated from protobuf field <code>bool IHOAAECIHIK = 1;</code>
     */
    protected $IHOAAECIHIK = false;
    /**
     * Generated from protobuf field <code>uint32 HBCAFGHLIOP = 3;</code>
     */
    protected $HBCAFGHLIOP = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GFKIHHOPJDG
     *     @type bool $KHGGDIHPHPA
     *     @type bool $IHOAAECIHIK
     *     @type int $HBCAFGHLIOP
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GFKIHHOPJDG = 15;</code>
     * @return int
     */
    public function getGFKIHHOPJDG()
    {
        return $this->GFKIHHOPJDG;
    }

    /**
     * Generated from protobuf field <code>uint32 GFKIHHOPJDG = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGFKIHHOPJDG($var)
    {
        GPBUtil::checkUint32($var);
        $this->GFKIHHOPJDG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool KHGGDIHPHPA = 2;</code>
     * @return bool
     */
    public function getKHGGDIHPHPA()
    {
        return $this->KHGGDIHPHPA;
    }

    /**
     * Generated from protobuf field <code>bool KHGGDIHPHPA = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setKHGGDIHPHPA($var)
    {
        GPBUtil::checkBool($var);
        $this->KHGGDIHPHPA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IHOAAECIHIK = 1;</code>
     * @return bool
     */
    public function getIHOAAECIHIK()
    {
        return $this->IHOAAECIHIK;
    }

    /**
     * Generated from protobuf field <code>bool IHOAAECIHIK = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIHOAAECIHIK($var)
    {
        GPBUtil::checkBool($var);
        $this->IHOAAECIHIK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 HBCAFGHLIOP = 3;</code>
     * @return int
     */
    public function getHBCAFGHLIOP()
    {
        return $this->HBCAFGHLIOP;
    }

    /**
     * Generated from protobuf field <code>uint32 HBCAFGHLIOP = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setHBCAFGHLIOP($var)
    {
        GPBUtil::checkUint32($var);
        $this->HBCAFGHLIOP = $var;

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

}
