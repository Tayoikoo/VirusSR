<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>NEEBFIKIOPL</code>
 */
class NEEBFIKIOPL extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.SceneInfo scene = 8;</code>
     */
    protected $scene = null;
    /**
     * Generated from protobuf field <code>.NGBLIPAIBAA IJJDOFIBLIP = 10;</code>
     */
    protected $IJJDOFIBLIP = null;
    /**
     * Generated from protobuf field <code>.GDHMBEFBPHM GOOIEHKAGLC = 12;</code>
     */
    protected $GOOIEHKAGLC = null;
    /**
     * Generated from protobuf field <code>bool GCBDLKOICKC = 9;</code>
     */
    protected $GCBDLKOICKC = false;
    /**
     * Generated from protobuf field <code>.EOJIMNJPNPN KFLBOPELPED = 5;</code>
     */
    protected $KFLBOPELPED = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \SceneInfo $scene
     *     @type \NGBLIPAIBAA $IJJDOFIBLIP
     *     @type \GDHMBEFBPHM $GOOIEHKAGLC
     *     @type bool $GCBDLKOICKC
     *     @type \EOJIMNJPNPN $KFLBOPELPED
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 8;</code>
     * @return \SceneInfo|null
     */
    public function getScene()
    {
        return $this->scene;
    }

    public function hasScene()
    {
        return isset($this->scene);
    }

    public function clearScene()
    {
        unset($this->scene);
    }

    /**
     * Generated from protobuf field <code>.SceneInfo scene = 8;</code>
     * @param \SceneInfo $var
     * @return $this
     */
    public function setScene($var)
    {
        GPBUtil::checkMessage($var, \SceneInfo::class);
        $this->scene = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NGBLIPAIBAA IJJDOFIBLIP = 10;</code>
     * @return \NGBLIPAIBAA|null
     */
    public function getIJJDOFIBLIP()
    {
        return $this->IJJDOFIBLIP;
    }

    public function hasIJJDOFIBLIP()
    {
        return isset($this->IJJDOFIBLIP);
    }

    public function clearIJJDOFIBLIP()
    {
        unset($this->IJJDOFIBLIP);
    }

    /**
     * Generated from protobuf field <code>.NGBLIPAIBAA IJJDOFIBLIP = 10;</code>
     * @param \NGBLIPAIBAA $var
     * @return $this
     */
    public function setIJJDOFIBLIP($var)
    {
        GPBUtil::checkMessage($var, \NGBLIPAIBAA::class);
        $this->IJJDOFIBLIP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GDHMBEFBPHM GOOIEHKAGLC = 12;</code>
     * @return \GDHMBEFBPHM|null
     */
    public function getGOOIEHKAGLC()
    {
        return $this->GOOIEHKAGLC;
    }

    public function hasGOOIEHKAGLC()
    {
        return isset($this->GOOIEHKAGLC);
    }

    public function clearGOOIEHKAGLC()
    {
        unset($this->GOOIEHKAGLC);
    }

    /**
     * Generated from protobuf field <code>.GDHMBEFBPHM GOOIEHKAGLC = 12;</code>
     * @param \GDHMBEFBPHM $var
     * @return $this
     */
    public function setGOOIEHKAGLC($var)
    {
        GPBUtil::checkMessage($var, \GDHMBEFBPHM::class);
        $this->GOOIEHKAGLC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool GCBDLKOICKC = 9;</code>
     * @return bool
     */
    public function getGCBDLKOICKC()
    {
        return $this->GCBDLKOICKC;
    }

    /**
     * Generated from protobuf field <code>bool GCBDLKOICKC = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setGCBDLKOICKC($var)
    {
        GPBUtil::checkBool($var);
        $this->GCBDLKOICKC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EOJIMNJPNPN KFLBOPELPED = 5;</code>
     * @return \EOJIMNJPNPN|null
     */
    public function getKFLBOPELPED()
    {
        return $this->KFLBOPELPED;
    }

    public function hasKFLBOPELPED()
    {
        return isset($this->KFLBOPELPED);
    }

    public function clearKFLBOPELPED()
    {
        unset($this->KFLBOPELPED);
    }

    /**
     * Generated from protobuf field <code>.EOJIMNJPNPN KFLBOPELPED = 5;</code>
     * @param \EOJIMNJPNPN $var
     * @return $this
     */
    public function setKFLBOPELPED($var)
    {
        GPBUtil::checkMessage($var, \EOJIMNJPNPN::class);
        $this->KFLBOPELPED = $var;

        return $this;
    }

}
