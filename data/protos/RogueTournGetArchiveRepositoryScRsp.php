<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ANCAEELAFEN (6026)
 *
 * Generated from protobuf message <code>RogueTournGetArchiveRepositoryScRsp</code>
 */
class RogueTournGetArchiveRepositoryScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint32 mmooadncgae = 8;</code>
     */
    private $mmooadncgae;
    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 gbccppmlbmh = 4;</code>
     */
    private $gbccppmlbmh;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $mmooadncgae
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $gbccppmlbmh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated uint32 mmooadncgae = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMmooadncgae()
    {
        return $this->mmooadncgae;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 mmooadncgae = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMmooadncgae($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->mmooadncgae = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 5;</code>
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
     * Generated from protobuf field <code>repeated uint32 gbccppmlbmh = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGbccppmlbmh()
    {
        return $this->gbccppmlbmh;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gbccppmlbmh = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGbccppmlbmh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->gbccppmlbmh = $arr;

        return $this;
    }

}

