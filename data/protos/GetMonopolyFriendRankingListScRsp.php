<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GDBCJPHMFPH (7060)
 *
 * Generated from protobuf message <code>GetMonopolyFriendRankingListScRsp</code>
 */
class GetMonopolyFriendRankingListScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.CKBCAHOBKBH opolopohlok = 3;</code>
     */
    protected $opolopohlok = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .CKBCAHOBKBH kkaplkkjece = 1;</code>
     */
    private $kkaplkkjece;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CKBCAHOBKBH $opolopohlok
     *     @type int $retcode
     *     @type array<\CKBCAHOBKBH>|\Google\Protobuf\Internal\RepeatedField $kkaplkkjece
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.CKBCAHOBKBH opolopohlok = 3;</code>
     * @return \CKBCAHOBKBH|null
     */
    public function getOpolopohlok()
    {
        return $this->opolopohlok;
    }

    public function hasOpolopohlok()
    {
        return isset($this->opolopohlok);
    }

    public function clearOpolopohlok()
    {
        unset($this->opolopohlok);
    }

    /**
     * Generated from protobuf field <code>.CKBCAHOBKBH opolopohlok = 3;</code>
     * @param \CKBCAHOBKBH $var
     * @return $this
     */
    public function setOpolopohlok($var)
    {
        GPBUtil::checkMessage($var, \CKBCAHOBKBH::class);
        $this->opolopohlok = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
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
     * Generated from protobuf field <code>repeated .CKBCAHOBKBH kkaplkkjece = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKkaplkkjece()
    {
        return $this->kkaplkkjece;
    }

    /**
     * Generated from protobuf field <code>repeated .CKBCAHOBKBH kkaplkkjece = 1;</code>
     * @param array<\CKBCAHOBKBH>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKkaplkkjece($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CKBCAHOBKBH::class);
        $this->kkaplkkjece = $arr;

        return $this;
    }

}

