<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PFIPMCMAOFJ</code>
 */
class PFIPMCMAOFJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 8;</code>
     */
    protected $PNOAKGNANBO = 0;
    /**
     * Generated from protobuf field <code>uint32 NCLHEOJCFDM = 3;</code>
     */
    protected $NCLHEOJCFDM = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $PNOAKGNANBO
     *     @type int $NCLHEOJCFDM
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 8;</code>
     * @return int
     */
    public function getPNOAKGNANBO()
    {
        return $this->PNOAKGNANBO;
    }

    /**
     * Generated from protobuf field <code>uint32 PNOAKGNANBO = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPNOAKGNANBO($var)
    {
        GPBUtil::checkUint32($var);
        $this->PNOAKGNANBO = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NCLHEOJCFDM = 3;</code>
     * @return int
     */
    public function getNCLHEOJCFDM()
    {
        return $this->NCLHEOJCFDM;
    }

    /**
     * Generated from protobuf field <code>uint32 NCLHEOJCFDM = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNCLHEOJCFDM($var)
    {
        GPBUtil::checkUint32($var);
        $this->NCLHEOJCFDM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 9;</code>
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
