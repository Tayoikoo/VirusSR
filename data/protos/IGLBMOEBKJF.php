<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IGLBMOEBKJF</code>
 */
class IGLBMOEBKJF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 fgmocmegann = 9;</code>
     */
    protected $fgmocmegann = 0;
    /**
     * Generated from protobuf field <code>.IBJMINGEPGN bpgeldjgkgj = 14;</code>
     */
    protected $bpgeldjgkgj = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fgmocmegann
     *     @type \IBJMINGEPGN $bpgeldjgkgj
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 fgmocmegann = 9;</code>
     * @return int
     */
    public function getFgmocmegann()
    {
        return $this->fgmocmegann;
    }

    /**
     * Generated from protobuf field <code>uint32 fgmocmegann = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFgmocmegann($var)
    {
        GPBUtil::checkUint32($var);
        $this->fgmocmegann = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.IBJMINGEPGN bpgeldjgkgj = 14;</code>
     * @return \IBJMINGEPGN|null
     */
    public function getBpgeldjgkgj()
    {
        return $this->bpgeldjgkgj;
    }

    public function hasBpgeldjgkgj()
    {
        return isset($this->bpgeldjgkgj);
    }

    public function clearBpgeldjgkgj()
    {
        unset($this->bpgeldjgkgj);
    }

    /**
     * Generated from protobuf field <code>.IBJMINGEPGN bpgeldjgkgj = 14;</code>
     * @param \IBJMINGEPGN $var
     * @return $this
     */
    public function setBpgeldjgkgj($var)
    {
        GPBUtil::checkMessage($var, \IBJMINGEPGN::class);
        $this->bpgeldjgkgj = $var;

        return $this;
    }

}

