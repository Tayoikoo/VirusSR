<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>MEOJJOIMGND</code>
 */
class MEOJJOIMGND extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ItemList NFIDICBEELG = 4;</code>
     */
    protected $NFIDICBEELG = null;
    /**
     * Generated from protobuf field <code>.ItemList DDKHJIJENLC = 2;</code>
     */
    protected $DDKHJIJENLC = null;
    /**
     * Generated from protobuf field <code>bool LNCDLNLAPIK = 6;</code>
     */
    protected $LNCDLNLAPIK = false;
    /**
     * Generated from protobuf field <code>.Item HIIALLJAJCK = 13;</code>
     */
    protected $HIIALLJAJCK = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ItemList $NFIDICBEELG
     *     @type \ItemList $DDKHJIJENLC
     *     @type bool $LNCDLNLAPIK
     *     @type \Item $HIIALLJAJCK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ItemList NFIDICBEELG = 4;</code>
     * @return \ItemList|null
     */
    public function getNFIDICBEELG()
    {
        return $this->NFIDICBEELG;
    }

    public function hasNFIDICBEELG()
    {
        return isset($this->NFIDICBEELG);
    }

    public function clearNFIDICBEELG()
    {
        unset($this->NFIDICBEELG);
    }

    /**
     * Generated from protobuf field <code>.ItemList NFIDICBEELG = 4;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setNFIDICBEELG($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->NFIDICBEELG = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList DDKHJIJENLC = 2;</code>
     * @return \ItemList|null
     */
    public function getDDKHJIJENLC()
    {
        return $this->DDKHJIJENLC;
    }

    public function hasDDKHJIJENLC()
    {
        return isset($this->DDKHJIJENLC);
    }

    public function clearDDKHJIJENLC()
    {
        unset($this->DDKHJIJENLC);
    }

    /**
     * Generated from protobuf field <code>.ItemList DDKHJIJENLC = 2;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setDDKHJIJENLC($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->DDKHJIJENLC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool LNCDLNLAPIK = 6;</code>
     * @return bool
     */
    public function getLNCDLNLAPIK()
    {
        return $this->LNCDLNLAPIK;
    }

    /**
     * Generated from protobuf field <code>bool LNCDLNLAPIK = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setLNCDLNLAPIK($var)
    {
        GPBUtil::checkBool($var);
        $this->LNCDLNLAPIK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Item HIIALLJAJCK = 13;</code>
     * @return \Item|null
     */
    public function getHIIALLJAJCK()
    {
        return $this->HIIALLJAJCK;
    }

    public function hasHIIALLJAJCK()
    {
        return isset($this->HIIALLJAJCK);
    }

    public function clearHIIALLJAJCK()
    {
        unset($this->HIIALLJAJCK);
    }

    /**
     * Generated from protobuf field <code>.Item HIIALLJAJCK = 13;</code>
     * @param \Item $var
     * @return $this
     */
    public function setHIIALLJAJCK($var)
    {
        GPBUtil::checkMessage($var, \Item::class);
        $this->HIIALLJAJCK = $var;

        return $this;
    }

}
