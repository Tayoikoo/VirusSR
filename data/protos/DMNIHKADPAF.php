<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DMNIHKADPAF</code>
 */
class DMNIHKADPAF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FLKFJHLHCON GDDKJJDCFFE = 2;</code>
     */
    protected $GDDKJJDCFFE = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FLKFJHLHCON $GDDKJJDCFFE
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FLKFJHLHCON GDDKJJDCFFE = 2;</code>
     * @return \FLKFJHLHCON|null
     */
    public function getGDDKJJDCFFE()
    {
        return $this->GDDKJJDCFFE;
    }

    public function hasGDDKJJDCFFE()
    {
        return isset($this->GDDKJJDCFFE);
    }

    public function clearGDDKJJDCFFE()
    {
        unset($this->GDDKJJDCFFE);
    }

    /**
     * Generated from protobuf field <code>.FLKFJHLHCON GDDKJJDCFFE = 2;</code>
     * @param \FLKFJHLHCON $var
     * @return $this
     */
    public function setGDDKJJDCFFE($var)
    {
        GPBUtil::checkMessage($var, \FLKFJHLHCON::class);
        $this->GDDKJJDCFFE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}

