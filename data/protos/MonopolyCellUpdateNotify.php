<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BBEKCOBDPEA (7027)
 *
 * Generated from protobuf message <code>MonopolyCellUpdateNotify</code>
 */
class MonopolyCellUpdateNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FOKNLLKICEO lpfpagojilh = 6;</code>
     */
    protected $lpfpagojilh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FOKNLLKICEO $lpfpagojilh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FOKNLLKICEO lpfpagojilh = 6;</code>
     * @return \FOKNLLKICEO|null
     */
    public function getLpfpagojilh()
    {
        return $this->lpfpagojilh;
    }

    public function hasLpfpagojilh()
    {
        return isset($this->lpfpagojilh);
    }

    public function clearLpfpagojilh()
    {
        unset($this->lpfpagojilh);
    }

    /**
     * Generated from protobuf field <code>.FOKNLLKICEO lpfpagojilh = 6;</code>
     * @param \FOKNLLKICEO $var
     * @return $this
     */
    public function setLpfpagojilh($var)
    {
        GPBUtil::checkMessage($var, \FOKNLLKICEO::class);
        $this->lpfpagojilh = $var;

        return $this;
    }

}

