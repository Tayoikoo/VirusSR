<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FJAMDAFCMIM (5878)
 *
 * Generated from protobuf message <code>HeliobusLineupUpdateScNotify</code>
 */
class HeliobusLineupUpdateScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HeliobusChallengeLineup lineup = 4;</code>
     */
    protected $lineup = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HeliobusChallengeLineup $lineup
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HeliobusChallengeLineup lineup = 4;</code>
     * @return \HeliobusChallengeLineup|null
     */
    public function getLineup()
    {
        return $this->lineup;
    }

    public function hasLineup()
    {
        return isset($this->lineup);
    }

    public function clearLineup()
    {
        unset($this->lineup);
    }

    /**
     * Generated from protobuf field <code>.HeliobusChallengeLineup lineup = 4;</code>
     * @param \HeliobusChallengeLineup $var
     * @return $this
     */
    public function setLineup($var)
    {
        GPBUtil::checkMessage($var, \HeliobusChallengeLineup::class);
        $this->lineup = $var;

        return $this;
    }

}

