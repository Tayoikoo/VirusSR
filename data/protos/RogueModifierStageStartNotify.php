<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IMDNPLJKLPH (5393)
 *
 * Generated from protobuf message <code>RogueModifierStageStartNotify</code>
 */
class RogueModifierStageStartNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.PJDEMLINNGF leeacmngdfl = 4;</code>
     */
    protected $leeacmngdfl = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $leeacmngdfl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.PJDEMLINNGF leeacmngdfl = 4;</code>
     * @return int
     */
    public function getLeeacmngdfl()
    {
        return $this->leeacmngdfl;
    }

    /**
     * Generated from protobuf field <code>.PJDEMLINNGF leeacmngdfl = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLeeacmngdfl($var)
    {
        GPBUtil::checkEnum($var, \PJDEMLINNGF::class);
        $this->leeacmngdfl = $var;

        return $this;
    }

}
