<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HCDJCMDHNMD</code>
 */
class HCDJCMDHNMD extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ALBOCLFFGIH MMKOEOCMGIJ = 15;</code>
     */
    protected $MMKOEOCMGIJ = null;
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
     *     @type \ALBOCLFFGIH $MMKOEOCMGIJ
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ALBOCLFFGIH MMKOEOCMGIJ = 15;</code>
     * @return \ALBOCLFFGIH|null
     */
    public function getMMKOEOCMGIJ()
    {
        return $this->MMKOEOCMGIJ;
    }

    public function hasMMKOEOCMGIJ()
    {
        return isset($this->MMKOEOCMGIJ);
    }

    public function clearMMKOEOCMGIJ()
    {
        unset($this->MMKOEOCMGIJ);
    }

    /**
     * Generated from protobuf field <code>.ALBOCLFFGIH MMKOEOCMGIJ = 15;</code>
     * @param \ALBOCLFFGIH $var
     * @return $this
     */
    public function setMMKOEOCMGIJ($var)
    {
        GPBUtil::checkMessage($var, \ALBOCLFFGIH::class);
        $this->MMKOEOCMGIJ = $var;

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

