<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DFEMDEPJEFI</code>
 */
class DFEMDEPJEFI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.LJCPEBPIBFL opjidonmken = 10;</code>
     */
    protected $opjidonmken = 0;
    /**
     * Generated from protobuf field <code>uint32 nffdgoljohi = 2;</code>
     */
    protected $nffdgoljohi = 0;
    /**
     * Generated from protobuf field <code>uint32 challenge_id = 3;</code>
     */
    protected $challenge_id = 0;
    /**
     * Generated from protobuf field <code>uint32 gnamjnppnfd = 11;</code>
     */
    protected $gnamjnppnfd = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $opjidonmken
     *     @type int $nffdgoljohi
     *     @type int $challenge_id
     *     @type int $gnamjnppnfd
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.LJCPEBPIBFL opjidonmken = 10;</code>
     * @return int
     */
    public function getOpjidonmken()
    {
        return $this->opjidonmken;
    }

    /**
     * Generated from protobuf field <code>.LJCPEBPIBFL opjidonmken = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setOpjidonmken($var)
    {
        GPBUtil::checkEnum($var, \LJCPEBPIBFL::class);
        $this->opjidonmken = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nffdgoljohi = 2;</code>
     * @return int
     */
    public function getNffdgoljohi()
    {
        return $this->nffdgoljohi;
    }

    /**
     * Generated from protobuf field <code>uint32 nffdgoljohi = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNffdgoljohi($var)
    {
        GPBUtil::checkUint32($var);
        $this->nffdgoljohi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 3;</code>
     * @return int
     */
    public function getChallengeId()
    {
        return $this->challenge_id;
    }

    /**
     * Generated from protobuf field <code>uint32 challenge_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChallengeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->challenge_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gnamjnppnfd = 11;</code>
     * @return int
     */
    public function getGnamjnppnfd()
    {
        return $this->gnamjnppnfd;
    }

    /**
     * Generated from protobuf field <code>uint32 gnamjnppnfd = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setGnamjnppnfd($var)
    {
        GPBUtil::checkUint32($var);
        $this->gnamjnppnfd = $var;

        return $this;
    }

}

