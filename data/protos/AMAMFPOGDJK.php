<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AMAMFPOGDJK</code>
 */
class AMAMFPOGDJK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.CDEEDFGAJCP FCMEOJOJIDF = 15;</code>
     */
    protected $FCMEOJOJIDF = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CDEEDFGAJCP $FCMEOJOJIDF
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.CDEEDFGAJCP FCMEOJOJIDF = 15;</code>
     * @return \CDEEDFGAJCP|null
     */
    public function getFCMEOJOJIDF()
    {
        return $this->FCMEOJOJIDF;
    }

    public function hasFCMEOJOJIDF()
    {
        return isset($this->FCMEOJOJIDF);
    }

    public function clearFCMEOJOJIDF()
    {
        unset($this->FCMEOJOJIDF);
    }

    /**
     * Generated from protobuf field <code>.CDEEDFGAJCP FCMEOJOJIDF = 15;</code>
     * @param \CDEEDFGAJCP $var
     * @return $this
     */
    public function setFCMEOJOJIDF($var)
    {
        GPBUtil::checkMessage($var, \CDEEDFGAJCP::class);
        $this->FCMEOJOJIDF = $var;

        return $this;
    }

}

