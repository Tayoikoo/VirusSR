<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OALPJKCDFCH (7170)
 *
 * Generated from protobuf message <code>GetStarFightDataScRsp</code>
 */
class GetStarFightDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .JJDILBLLAAB kobhopifcdp = 7;</code>
     */
    private $kobhopifcdp;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<\JJDILBLLAAB>|\Google\Protobuf\Internal\RepeatedField $kobhopifcdp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
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
     * Generated from protobuf field <code>repeated .JJDILBLLAAB kobhopifcdp = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKobhopifcdp()
    {
        return $this->kobhopifcdp;
    }

    /**
     * Generated from protobuf field <code>repeated .JJDILBLLAAB kobhopifcdp = 7;</code>
     * @param array<\JJDILBLLAAB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKobhopifcdp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \JJDILBLLAAB::class);
        $this->kobhopifcdp = $arr;

        return $this;
    }

}

