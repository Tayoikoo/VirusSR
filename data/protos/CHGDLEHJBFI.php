<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CHGDLEHJBFI</code>
 */
class CHGDLEHJBFI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.NOLHMEAMPAB hoinnilnheb = 13;</code>
     */
    protected $hoinnilnheb = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NOLHMEAMPAB $hoinnilnheb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.NOLHMEAMPAB hoinnilnheb = 13;</code>
     * @return \NOLHMEAMPAB|null
     */
    public function getHoinnilnheb()
    {
        return $this->hoinnilnheb;
    }

    public function hasHoinnilnheb()
    {
        return isset($this->hoinnilnheb);
    }

    public function clearHoinnilnheb()
    {
        unset($this->hoinnilnheb);
    }

    /**
     * Generated from protobuf field <code>.NOLHMEAMPAB hoinnilnheb = 13;</code>
     * @param \NOLHMEAMPAB $var
     * @return $this
     */
    public function setHoinnilnheb($var)
    {
        GPBUtil::checkMessage($var, \NOLHMEAMPAB::class);
        $this->hoinnilnheb = $var;

        return $this;
    }

}

