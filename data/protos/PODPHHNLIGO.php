<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PODPHHNLIGO</code>
 */
class PODPHHNLIGO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string EEGCPACGOKG = 12;</code>
     */
    private $EEGCPACGOKG;
    /**
     * Generated from protobuf field <code>repeated string DKGAMCJEKNB = 8;</code>
     */
    private $DKGAMCJEKNB;
    /**
     * Generated from protobuf field <code>uint32 retcode = 1;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated string NGKMBHEIOOE = 7;</code>
     */
    private $NGKMBHEIOOE;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $EEGCPACGOKG
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $DKGAMCJEKNB
     *     @type int $retcode
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $NGKMBHEIOOE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string EEGCPACGOKG = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEEGCPACGOKG()
    {
        return $this->EEGCPACGOKG;
    }

    /**
     * Generated from protobuf field <code>repeated string EEGCPACGOKG = 12;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEEGCPACGOKG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->EEGCPACGOKG = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string DKGAMCJEKNB = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDKGAMCJEKNB()
    {
        return $this->DKGAMCJEKNB;
    }

    /**
     * Generated from protobuf field <code>repeated string DKGAMCJEKNB = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDKGAMCJEKNB($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->DKGAMCJEKNB = $arr;

        return $this;
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
     * Generated from protobuf field <code>repeated string NGKMBHEIOOE = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNGKMBHEIOOE()
    {
        return $this->NGKMBHEIOOE;
    }

    /**
     * Generated from protobuf field <code>repeated string NGKMBHEIOOE = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNGKMBHEIOOE($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->NGKMBHEIOOE = $arr;

        return $this;
    }

}

