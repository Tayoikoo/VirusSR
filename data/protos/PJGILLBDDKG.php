<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PJGILLBDDKG</code>
 */
class PJGILLBDDKG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EOGFJBFAKBK BADPJEEMPGH = 4;</code>
     */
    protected $BADPJEEMPGH = null;
    /**
     * Generated from protobuf field <code>.ANPOBIAEFDJ CGMFGAGGNNM = 1;</code>
     */
    protected $CGMFGAGGNNM = null;
    /**
     * Generated from protobuf field <code>.AGBKCIIINEL LGGPKJMLGLK = 9;</code>
     */
    protected $LGGPKJMLGLK = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \EOGFJBFAKBK $BADPJEEMPGH
     *     @type \ANPOBIAEFDJ $CGMFGAGGNNM
     *     @type \AGBKCIIINEL $LGGPKJMLGLK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EOGFJBFAKBK BADPJEEMPGH = 4;</code>
     * @return \EOGFJBFAKBK|null
     */
    public function getBADPJEEMPGH()
    {
        return $this->BADPJEEMPGH;
    }

    public function hasBADPJEEMPGH()
    {
        return isset($this->BADPJEEMPGH);
    }

    public function clearBADPJEEMPGH()
    {
        unset($this->BADPJEEMPGH);
    }

    /**
     * Generated from protobuf field <code>.EOGFJBFAKBK BADPJEEMPGH = 4;</code>
     * @param \EOGFJBFAKBK $var
     * @return $this
     */
    public function setBADPJEEMPGH($var)
    {
        GPBUtil::checkMessage($var, \EOGFJBFAKBK::class);
        $this->BADPJEEMPGH = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ANPOBIAEFDJ CGMFGAGGNNM = 1;</code>
     * @return \ANPOBIAEFDJ|null
     */
    public function getCGMFGAGGNNM()
    {
        return $this->CGMFGAGGNNM;
    }

    public function hasCGMFGAGGNNM()
    {
        return isset($this->CGMFGAGGNNM);
    }

    public function clearCGMFGAGGNNM()
    {
        unset($this->CGMFGAGGNNM);
    }

    /**
     * Generated from protobuf field <code>.ANPOBIAEFDJ CGMFGAGGNNM = 1;</code>
     * @param \ANPOBIAEFDJ $var
     * @return $this
     */
    public function setCGMFGAGGNNM($var)
    {
        GPBUtil::checkMessage($var, \ANPOBIAEFDJ::class);
        $this->CGMFGAGGNNM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AGBKCIIINEL LGGPKJMLGLK = 9;</code>
     * @return \AGBKCIIINEL|null
     */
    public function getLGGPKJMLGLK()
    {
        return $this->LGGPKJMLGLK;
    }

    public function hasLGGPKJMLGLK()
    {
        return isset($this->LGGPKJMLGLK);
    }

    public function clearLGGPKJMLGLK()
    {
        unset($this->LGGPKJMLGLK);
    }

    /**
     * Generated from protobuf field <code>.AGBKCIIINEL LGGPKJMLGLK = 9;</code>
     * @param \AGBKCIIINEL $var
     * @return $this
     */
    public function setLGGPKJMLGLK($var)
    {
        GPBUtil::checkMessage($var, \AGBKCIIINEL::class);
        $this->LGGPKJMLGLK = $var;

        return $this;
    }

}
