<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OAALDHKNECP</code>
 */
class OAALDHKNECP extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.NBOICPBANIC LKGOAPJDNBJ = 7;</code>
     */
    protected $LKGOAPJDNBJ = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NBOICPBANIC $LKGOAPJDNBJ
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.NBOICPBANIC LKGOAPJDNBJ = 7;</code>
     * @return \NBOICPBANIC|null
     */
    public function getLKGOAPJDNBJ()
    {
        return $this->LKGOAPJDNBJ;
    }

    public function hasLKGOAPJDNBJ()
    {
        return isset($this->LKGOAPJDNBJ);
    }

    public function clearLKGOAPJDNBJ()
    {
        unset($this->LKGOAPJDNBJ);
    }

    /**
     * Generated from protobuf field <code>.NBOICPBANIC LKGOAPJDNBJ = 7;</code>
     * @param \NBOICPBANIC $var
     * @return $this
     */
    public function setLKGOAPJDNBJ($var)
    {
        GPBUtil::checkMessage($var, \NBOICPBANIC::class);
        $this->LKGOAPJDNBJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
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

