<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DNNIABNANIA</code>
 */
class DNNIABNANIA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ lmcpchmpjbp = 11;</code>
     */
    protected $lmcpchmpjbp = null;
    /**
     * Generated from protobuf field <code>bool nomcgdfjmai = 12;</code>
     */
    protected $nomcgdfjmai = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \IAMINGHLBDJ $lmcpchmpjbp
     *     @type bool $nomcgdfjmai
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ lmcpchmpjbp = 11;</code>
     * @return \IAMINGHLBDJ|null
     */
    public function getLmcpchmpjbp()
    {
        return $this->lmcpchmpjbp;
    }

    public function hasLmcpchmpjbp()
    {
        return isset($this->lmcpchmpjbp);
    }

    public function clearLmcpchmpjbp()
    {
        unset($this->lmcpchmpjbp);
    }

    /**
     * Generated from protobuf field <code>.IAMINGHLBDJ lmcpchmpjbp = 11;</code>
     * @param \IAMINGHLBDJ $var
     * @return $this
     */
    public function setLmcpchmpjbp($var)
    {
        GPBUtil::checkMessage($var, \IAMINGHLBDJ::class);
        $this->lmcpchmpjbp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool nomcgdfjmai = 12;</code>
     * @return bool
     */
    public function getNomcgdfjmai()
    {
        return $this->nomcgdfjmai;
    }

    /**
     * Generated from protobuf field <code>bool nomcgdfjmai = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setNomcgdfjmai($var)
    {
        GPBUtil::checkBool($var);
        $this->nomcgdfjmai = $var;

        return $this;
    }

}

