<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NJABPIDBJNM</code>
 */
class NJABPIDBJNM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string JCAIPEGOGCI = 6;</code>
     */
    protected $JCAIPEGOGCI = '';
    /**
     * Generated from protobuf field <code>uint32 uid = 4;</code>
     */
    protected $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $JCAIPEGOGCI
     *     @type int $uid
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string JCAIPEGOGCI = 6;</code>
     * @return string
     */
    public function getJCAIPEGOGCI()
    {
        return $this->JCAIPEGOGCI;
    }

    /**
     * Generated from protobuf field <code>string JCAIPEGOGCI = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setJCAIPEGOGCI($var)
    {
        GPBUtil::checkString($var, True);
        $this->JCAIPEGOGCI = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 4;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>uint32 uid = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 10;</code>
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

