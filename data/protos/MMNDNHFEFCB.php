<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MMNDNHFEFCB</code>
 */
class MMNDNHFEFCB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 pabihfgnpkg = 11;</code>
     */
    protected $pabihfgnpkg = 0;
    /**
     * Generated from protobuf field <code>uint32 hakcedfccha = 7;</code>
     */
    protected $hakcedfccha = 0;
    /**
     * Generated from protobuf field <code>uint32 dfehdbhllko = 12;</code>
     */
    protected $dfehdbhllko = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $pabihfgnpkg
     *     @type int $hakcedfccha
     *     @type int $dfehdbhllko
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 pabihfgnpkg = 11;</code>
     * @return int
     */
    public function getPabihfgnpkg()
    {
        return $this->pabihfgnpkg;
    }

    /**
     * Generated from protobuf field <code>uint32 pabihfgnpkg = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setPabihfgnpkg($var)
    {
        GPBUtil::checkUint32($var);
        $this->pabihfgnpkg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 hakcedfccha = 7;</code>
     * @return int
     */
    public function getHakcedfccha()
    {
        return $this->hakcedfccha;
    }

    /**
     * Generated from protobuf field <code>uint32 hakcedfccha = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setHakcedfccha($var)
    {
        GPBUtil::checkUint32($var);
        $this->hakcedfccha = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 dfehdbhllko = 12;</code>
     * @return int
     */
    public function getDfehdbhllko()
    {
        return $this->dfehdbhllko;
    }

    /**
     * Generated from protobuf field <code>uint32 dfehdbhllko = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDfehdbhllko($var)
    {
        GPBUtil::checkUint32($var);
        $this->dfehdbhllko = $var;

        return $this;
    }

}

