<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PALEACIFOAK (6295)
 *
 * Generated from protobuf message <code>GetStoryLineInfoScRsp</code>
 */
class GetStoryLineInfoScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 giiigplnibn = 1;</code>
     */
    protected $giiigplnibn = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 eljinbjeael = 11;</code>
     */
    private $eljinbjeael;
    /**
     * Generated from protobuf field <code>repeated uint32 gkmbnpafggb = 9;</code>
     */
    private $gkmbnpafggb;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $giiigplnibn
     *     @type int $retcode
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $eljinbjeael
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $gkmbnpafggb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 giiigplnibn = 1;</code>
     * @return int
     */
    public function getGiiigplnibn()
    {
        return $this->giiigplnibn;
    }

    /**
     * Generated from protobuf field <code>uint32 giiigplnibn = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setGiiigplnibn($var)
    {
        GPBUtil::checkUint32($var);
        $this->giiigplnibn = $var;

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
     * Generated from protobuf field <code>repeated uint32 eljinbjeael = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEljinbjeael()
    {
        return $this->eljinbjeael;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 eljinbjeael = 11;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEljinbjeael($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->eljinbjeael = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gkmbnpafggb = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGkmbnpafggb()
    {
        return $this->gkmbnpafggb;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 gkmbnpafggb = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGkmbnpafggb($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->gkmbnpafggb = $arr;

        return $this;
    }

}
