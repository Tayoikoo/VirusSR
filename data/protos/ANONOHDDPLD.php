<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ANONOHDDPLD</code>
 */
class ANONOHDDPLD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 progress = 6;</code>
     */
    protected $progress = 0;
    /**
     * Generated from protobuf field <code>repeated .CJEAKJMAOME nbggjlaakjh = 12;</code>
     */
    private $nbggjlaakjh;
    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 7;</code>
     */
    protected $kjkpmffamfk = 0;
    /**
     * Generated from protobuf field <code>uint32 mfajcodjpln = 5;</code>
     */
    protected $mfajcodjpln = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $progress
     *     @type array<\CJEAKJMAOME>|\Google\Protobuf\Internal\RepeatedField $nbggjlaakjh
     *     @type int $kjkpmffamfk
     *     @type int $mfajcodjpln
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 progress = 6;</code>
     * @return int
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Generated from protobuf field <code>uint32 progress = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkUint32($var);
        $this->progress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .CJEAKJMAOME nbggjlaakjh = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNbggjlaakjh()
    {
        return $this->nbggjlaakjh;
    }

    /**
     * Generated from protobuf field <code>repeated .CJEAKJMAOME nbggjlaakjh = 12;</code>
     * @param array<\CJEAKJMAOME>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNbggjlaakjh($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \CJEAKJMAOME::class);
        $this->nbggjlaakjh = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 7;</code>
     * @return int
     */
    public function getKjkpmffamfk()
    {
        return $this->kjkpmffamfk;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setKjkpmffamfk($var)
    {
        GPBUtil::checkUint32($var);
        $this->kjkpmffamfk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mfajcodjpln = 5;</code>
     * @return int
     */
    public function getMfajcodjpln()
    {
        return $this->mfajcodjpln;
    }

    /**
     * Generated from protobuf field <code>uint32 mfajcodjpln = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMfajcodjpln($var)
    {
        GPBUtil::checkUint32($var);
        $this->mfajcodjpln = $var;

        return $this;
    }

}
