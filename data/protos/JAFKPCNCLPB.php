<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JAFKPCNCLPB</code>
 */
class JAFKPCNCLPB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GIDCENGNKGK = 15;</code>
     */
    protected $GIDCENGNKGK = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 NJIGKGEOHFH = 8;</code>
     */
    private $NJIGKGEOHFH;
    /**
     * Generated from protobuf field <code>uint32 CLDDHPPDEFA = 6;</code>
     */
    protected $CLDDHPPDEFA = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 LINNHCJIHFA = 1;</code>
     */
    private $LINNHCJIHFA;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GIDCENGNKGK
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $NJIGKGEOHFH
     *     @type int $CLDDHPPDEFA
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $LINNHCJIHFA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GIDCENGNKGK = 15;</code>
     * @return int
     */
    public function getGIDCENGNKGK()
    {
        return $this->GIDCENGNKGK;
    }

    /**
     * Generated from protobuf field <code>uint32 GIDCENGNKGK = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setGIDCENGNKGK($var)
    {
        GPBUtil::checkUint32($var);
        $this->GIDCENGNKGK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NJIGKGEOHFH = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNJIGKGEOHFH()
    {
        return $this->NJIGKGEOHFH;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 NJIGKGEOHFH = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNJIGKGEOHFH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->NJIGKGEOHFH = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 CLDDHPPDEFA = 6;</code>
     * @return int
     */
    public function getCLDDHPPDEFA()
    {
        return $this->CLDDHPPDEFA;
    }

    /**
     * Generated from protobuf field <code>uint32 CLDDHPPDEFA = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCLDDHPPDEFA($var)
    {
        GPBUtil::checkUint32($var);
        $this->CLDDHPPDEFA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 4;</code>
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
     * Generated from protobuf field <code>repeated uint32 LINNHCJIHFA = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLINNHCJIHFA()
    {
        return $this->LINNHCJIHFA;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 LINNHCJIHFA = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLINNHCJIHFA($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->LINNHCJIHFA = $arr;

        return $this;
    }

}
