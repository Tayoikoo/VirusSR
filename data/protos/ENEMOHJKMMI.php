<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ENEMOHJKMMI</code>
 */
class ENEMOHJKMMI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.GILDNBDKOLD enfbjbhpggn = 5;</code>
     */
    protected $enfbjbhpggn = null;
    /**
     * Generated from protobuf field <code>.LineupInfo eelbepmnpgi = 2;</code>
     */
    protected $eelbepmnpgi = null;
    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 15;</code>
     */
    protected $kcfmiidppbh = null;
    /**
     * Generated from protobuf field <code>.LAEEPLBLDCC efcdmhhcedh = 7;</code>
     */
    protected $efcdmhhcedh = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GILDNBDKOLD $enfbjbhpggn
     *     @type \LineupInfo $eelbepmnpgi
     *     @type \AGAOOLGMDOO $kcfmiidppbh
     *     @type \LAEEPLBLDCC $efcdmhhcedh
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.GILDNBDKOLD enfbjbhpggn = 5;</code>
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
     * Generated from protobuf field <code>.GILDNBDKOLD enfbjbhpggn = 5;</code>
     * @param \GILDNBDKOLD $var
     * @return $this
     */
    public function setEnfbjbhpggn($var)
    {
        GPBUtil::checkMessage($var, \GILDNBDKOLD::class);
        $this->enfbjbhpggn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.LineupInfo eelbepmnpgi = 2;</code>
     * @return \LineupInfo|null
     */
    public function getEelbepmnpgi()
    {
        return $this->eelbepmnpgi;
    }

    public function hasEelbepmnpgi()
    {
        return isset($this->eelbepmnpgi);
    }

    public function clearEelbepmnpgi()
    {
        unset($this->eelbepmnpgi);
    }

    /**
     * Generated from protobuf field <code>.LineupInfo eelbepmnpgi = 2;</code>
     * @param \LineupInfo $var
     * @return $this
     */
    public function setEelbepmnpgi($var)
    {
        GPBUtil::checkMessage($var, \LineupInfo::class);
        $this->eelbepmnpgi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 15;</code>
     * @return \AGAOOLGMDOO|null
     */
    public function getKcfmiidppbh()
    {
        return $this->kcfmiidppbh;
    }

    public function hasKcfmiidppbh()
    {
        return isset($this->kcfmiidppbh);
    }

    public function clearKcfmiidppbh()
    {
        unset($this->kcfmiidppbh);
    }

    /**
     * Generated from protobuf field <code>.AGAOOLGMDOO kcfmiidppbh = 15;</code>
     * @param \AGAOOLGMDOO $var
     * @return $this
     */
    public function setKcfmiidppbh($var)
    {
        GPBUtil::checkMessage($var, \AGAOOLGMDOO::class);
        $this->kcfmiidppbh = $var;

        return $this;
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

}

