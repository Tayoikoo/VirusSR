<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NFPIDGOACLF (7718)
 *
 * Generated from protobuf message <code>RogueMagicGetMiscRealTimeDataScRsp</code>
 */
class RogueMagicGetMiscRealTimeDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.LAEEPLBLDCC efcdmhhcedh = 7;</code>
     */
    protected $efcdmhhcedh = null;
    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>.GILDNBDKOLD enfbjbhpggn = 6;</code>
     */
    protected $enfbjbhpggn = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \LAEEPLBLDCC $efcdmhhcedh
     *     @type int $retcode
     *     @type \GILDNBDKOLD $enfbjbhpggn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.LAEEPLBLDCC efcdmhhcedh = 7;</code>
     * @return \LAEEPLBLDCC|null
     */
    public function getEfcdmhhcedh()
    {
        return $this->efcdmhhcedh;
    }

    public function hasEfcdmhhcedh()
    {
        return isset($this->efcdmhhcedh);
    }

    public function clearEfcdmhhcedh()
    {
        unset($this->efcdmhhcedh);
    }

    /**
     * Generated from protobuf field <code>.LAEEPLBLDCC efcdmhhcedh = 7;</code>
     * @param \LAEEPLBLDCC $var
     * @return $this
     */
    public function setEfcdmhhcedh($var)
    {
        GPBUtil::checkMessage($var, \LAEEPLBLDCC::class);
        $this->efcdmhhcedh = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GILDNBDKOLD enfbjbhpggn = 6;</code>
     * @return \GILDNBDKOLD|null
     */
    public function getEnfbjbhpggn()
    {
        return $this->enfbjbhpggn;
    }

    public function hasEnfbjbhpggn()
    {
        return isset($this->enfbjbhpggn);
    }

    public function clearEnfbjbhpggn()
    {
        unset($this->enfbjbhpggn);
    }

    /**
     * Generated from protobuf field <code>.GILDNBDKOLD enfbjbhpggn = 6;</code>
     * @param \GILDNBDKOLD $var
     * @return $this
     */
    public function setEnfbjbhpggn($var)
    {
        GPBUtil::checkMessage($var, \GILDNBDKOLD::class);
        $this->enfbjbhpggn = $var;

        return $this;
    }

}

