<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>CDGPKIJBFDK</code>
 */
class CDGPKIJBFDK extends \Google\Protobuf\Internal\Message
{
    protected $HCCHFOBGGFD;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FJLHHGACNGD $jbeoeflhdpm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FJLHHGACNGD jbeoeflhdpm = 101;</code>
     * @return \FJLHHGACNGD|null
     */
    public function getJbeoeflhdpm()
    {
        return $this->readOneof(101);
    }

    public function hasJbeoeflhdpm()
    {
        return $this->hasOneof(101);
    }

    /**
     * Generated from protobuf field <code>.FJLHHGACNGD jbeoeflhdpm = 101;</code>
     * @param \FJLHHGACNGD $var
     * @return $this
     */
    public function setJbeoeflhdpm($var)
    {
        GPBUtil::checkMessage($var, \FJLHHGACNGD::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getHCCHFOBGGFD()
    {
        return $this->whichOneof("HCCHFOBGGFD");
    }

}

