<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PGMNMGOKHIG</code>
 */
class PGMNMGOKHIG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OOKFHBFLPEB ekgnfjonkml = 6;</code>
     */
    protected $ekgnfjonkml = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \OOKFHBFLPEB $ekgnfjonkml
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OOKFHBFLPEB ekgnfjonkml = 6;</code>
     * @return \OOKFHBFLPEB|null
     */
    public function getEkgnfjonkml()
    {
        return $this->ekgnfjonkml;
    }

    public function hasEkgnfjonkml()
    {
        return isset($this->ekgnfjonkml);
    }

    public function clearEkgnfjonkml()
    {
        unset($this->ekgnfjonkml);
    }

    /**
     * Generated from protobuf field <code>.OOKFHBFLPEB ekgnfjonkml = 6;</code>
     * @param \OOKFHBFLPEB $var
     * @return $this
     */
    public function setEkgnfjonkml($var)
    {
        GPBUtil::checkMessage($var, \OOKFHBFLPEB::class);
        $this->ekgnfjonkml = $var;

        return $this;
    }

}

