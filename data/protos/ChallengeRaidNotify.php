<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * APANHNGHKDM (2293)
 *
 * Generated from protobuf message <code>ChallengeRaidNotify</code>
 */
class ChallengeRaidNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HMJENOAHIHE cggefekkbag = 3;</code>
     */
    protected $cggefekkbag = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HMJENOAHIHE $cggefekkbag
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HMJENOAHIHE cggefekkbag = 3;</code>
     * @return \HMJENOAHIHE|null
     */
    public function getCggefekkbag()
    {
        return $this->cggefekkbag;
    }

    public function hasCggefekkbag()
    {
        return isset($this->cggefekkbag);
    }

    public function clearCggefekkbag()
    {
        unset($this->cggefekkbag);
    }

    /**
     * Generated from protobuf field <code>.HMJENOAHIHE cggefekkbag = 3;</code>
     * @param \HMJENOAHIHE $var
     * @return $this
     */
    public function setCggefekkbag($var)
    {
        GPBUtil::checkMessage($var, \HMJENOAHIHE::class);
        $this->cggefekkbag = $var;

        return $this;
    }

}

