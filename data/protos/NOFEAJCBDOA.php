<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NOFEAJCBDOA</code>
 */
class NOFEAJCBDOA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.HPOEPJIDFCE AMLCAEIJMEE = 14;</code>
     */
    protected $AMLCAEIJMEE = null;
    /**
     * Generated from protobuf field <code>uint32 KKLAOBBLGCE = 8;</code>
     */
    protected $KKLAOBBLGCE = 0;
    /**
     * Generated from protobuf field <code>uint32 IJPJDJPBPNJ = 10;</code>
     */
    protected $IJPJDJPBPNJ = 0;
    /**
     * Generated from protobuf field <code>uint32 PDHDKBJJOFJ = 12;</code>
     */
    protected $PDHDKBJJOFJ = 0;
    /**
     * Generated from protobuf field <code>uint32 IMKIKCODKHJ = 3;</code>
     */
    protected $IMKIKCODKHJ = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HPOEPJIDFCE $AMLCAEIJMEE
     *     @type int $KKLAOBBLGCE
     *     @type int $IJPJDJPBPNJ
     *     @type int $PDHDKBJJOFJ
     *     @type int $IMKIKCODKHJ
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HPOEPJIDFCE AMLCAEIJMEE = 14;</code>
     * @return \HPOEPJIDFCE|null
     */
    public function getAMLCAEIJMEE()
    {
        return $this->AMLCAEIJMEE;
    }

    public function hasAMLCAEIJMEE()
    {
        return isset($this->AMLCAEIJMEE);
    }

    public function clearAMLCAEIJMEE()
    {
        unset($this->AMLCAEIJMEE);
    }

    /**
     * Generated from protobuf field <code>.HPOEPJIDFCE AMLCAEIJMEE = 14;</code>
     * @param \HPOEPJIDFCE $var
     * @return $this
     */
    public function setAMLCAEIJMEE($var)
    {
        GPBUtil::checkMessage($var, \HPOEPJIDFCE::class);
        $this->AMLCAEIJMEE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 KKLAOBBLGCE = 8;</code>
     * @return int
     */
    public function getKKLAOBBLGCE()
    {
        return $this->KKLAOBBLGCE;
    }

    /**
     * Generated from protobuf field <code>uint32 KKLAOBBLGCE = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setKKLAOBBLGCE($var)
    {
        GPBUtil::checkUint32($var);
        $this->KKLAOBBLGCE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IJPJDJPBPNJ = 10;</code>
     * @return int
     */
    public function getIJPJDJPBPNJ()
    {
        return $this->IJPJDJPBPNJ;
    }

    /**
     * Generated from protobuf field <code>uint32 IJPJDJPBPNJ = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setIJPJDJPBPNJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->IJPJDJPBPNJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 PDHDKBJJOFJ = 12;</code>
     * @return int
     */
    public function getPDHDKBJJOFJ()
    {
        return $this->PDHDKBJJOFJ;
    }

    /**
     * Generated from protobuf field <code>uint32 PDHDKBJJOFJ = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setPDHDKBJJOFJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->PDHDKBJJOFJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 IMKIKCODKHJ = 3;</code>
     * @return int
     */
    public function getIMKIKCODKHJ()
    {
        return $this->IMKIKCODKHJ;
    }

    /**
     * Generated from protobuf field <code>uint32 IMKIKCODKHJ = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIMKIKCODKHJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->IMKIKCODKHJ = $var;

        return $this;
    }

}

