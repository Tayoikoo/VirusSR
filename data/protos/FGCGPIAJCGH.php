<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FGCGPIAJCGH</code>
 */
class FGCGPIAJCGH extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IENMOFDAHID LCKJCKJBLEC = 1;</code>
     */
    protected $LCKJCKJBLEC = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IENMOFDAHID $LCKJCKJBLEC
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IENMOFDAHID LCKJCKJBLEC = 1;</code>
     * @return \IENMOFDAHID|null
     */
    public function getLCKJCKJBLEC()
    {
        return $this->LCKJCKJBLEC;
    }

    public function hasLCKJCKJBLEC()
    {
        return isset($this->LCKJCKJBLEC);
    }

    public function clearLCKJCKJBLEC()
    {
        unset($this->LCKJCKJBLEC);
    }

    /**
     * Generated from protobuf field <code>.IENMOFDAHID LCKJCKJBLEC = 1;</code>
     * @param \IENMOFDAHID $var
     * @return $this
     */
    public function setLCKJCKJBLEC($var)
    {
        GPBUtil::checkMessage($var, \IENMOFDAHID::class);
        $this->LCKJCKJBLEC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 14;</code>
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
