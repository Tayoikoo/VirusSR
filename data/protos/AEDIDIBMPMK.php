<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>AEDIDIBMPMK</code>
 */
class AEDIDIBMPMK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 JIJKPFBLGKE = 8;</code>
     */
    protected $JIJKPFBLGKE = 0;
    /**
     * Generated from protobuf field <code>.PNLHADCBNMN CMBKNELNFEM = 3;</code>
     */
    protected $CMBKNELNFEM = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $JIJKPFBLGKE
     *     @type \PNLHADCBNMN $CMBKNELNFEM
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 JIJKPFBLGKE = 8;</code>
     * @return int
     */
    public function getJIJKPFBLGKE()
    {
        return $this->JIJKPFBLGKE;
    }

    /**
     * Generated from protobuf field <code>uint32 JIJKPFBLGKE = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setJIJKPFBLGKE($var)
    {
        GPBUtil::checkUint32($var);
        $this->JIJKPFBLGKE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PNLHADCBNMN CMBKNELNFEM = 3;</code>
     * @return \PNLHADCBNMN|null
     */
    public function getCMBKNELNFEM()
    {
        return $this->CMBKNELNFEM;
    }

    public function hasCMBKNELNFEM()
    {
        return isset($this->CMBKNELNFEM);
    }

    public function clearCMBKNELNFEM()
    {
        unset($this->CMBKNELNFEM);
    }

    /**
     * Generated from protobuf field <code>.PNLHADCBNMN CMBKNELNFEM = 3;</code>
     * @param \PNLHADCBNMN $var
     * @return $this
     */
    public function setCMBKNELNFEM($var)
    {
        GPBUtil::checkMessage($var, \PNLHADCBNMN::class);
        $this->CMBKNELNFEM = $var;

        return $this;
    }

}

