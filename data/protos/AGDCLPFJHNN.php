<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AGDCLPFJHNN</code>
 */
class AGDCLPFJHNN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.MHINMBLGHHD OMJMAHJCHMA = 3;</code>
     */
    protected $OMJMAHJCHMA = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MHINMBLGHHD $OMJMAHJCHMA
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.MHINMBLGHHD OMJMAHJCHMA = 3;</code>
     * @return \MHINMBLGHHD|null
     */
    public function getOMJMAHJCHMA()
    {
        return $this->OMJMAHJCHMA;
    }

    public function hasOMJMAHJCHMA()
    {
        return isset($this->OMJMAHJCHMA);
    }

    public function clearOMJMAHJCHMA()
    {
        unset($this->OMJMAHJCHMA);
    }

    /**
     * Generated from protobuf field <code>.MHINMBLGHHD OMJMAHJCHMA = 3;</code>
     * @param \MHINMBLGHHD $var
     * @return $this
     */
    public function setOMJMAHJCHMA($var)
    {
        GPBUtil::checkMessage($var, \MHINMBLGHHD::class);
        $this->OMJMAHJCHMA = $var;

        return $this;
    }

}

