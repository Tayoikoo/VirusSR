<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>JLKMEOMNFAK</code>
 */
class JLKMEOMNFAK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 JCPFOPLBOIM = 12;</code>
     */
    protected $JCPFOPLBOIM = 0;
    /**
     * Generated from protobuf field <code>.FDBDOJJIODN AMHCOEKJIAN = 5;</code>
     */
    protected $AMHCOEKJIAN = null;
    /**
     * Generated from protobuf field <code>uint32 MLGDAOKGNKI = 7;</code>
     */
    protected $MLGDAOKGNKI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $JCPFOPLBOIM
     *     @type \FDBDOJJIODN $AMHCOEKJIAN
     *     @type int $MLGDAOKGNKI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 JCPFOPLBOIM = 12;</code>
     * @return int
     */
    public function getJCPFOPLBOIM()
    {
        return $this->JCPFOPLBOIM;
    }

    /**
     * Generated from protobuf field <code>uint32 JCPFOPLBOIM = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setJCPFOPLBOIM($var)
    {
        GPBUtil::checkUint32($var);
        $this->JCPFOPLBOIM = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FDBDOJJIODN AMHCOEKJIAN = 5;</code>
     * @return \FDBDOJJIODN|null
     */
    public function getAMHCOEKJIAN()
    {
        return $this->AMHCOEKJIAN;
    }

    public function hasAMHCOEKJIAN()
    {
        return isset($this->AMHCOEKJIAN);
    }

    public function clearAMHCOEKJIAN()
    {
        unset($this->AMHCOEKJIAN);
    }

    /**
     * Generated from protobuf field <code>.FDBDOJJIODN AMHCOEKJIAN = 5;</code>
     * @param \FDBDOJJIODN $var
     * @return $this
     */
    public function setAMHCOEKJIAN($var)
    {
        GPBUtil::checkMessage($var, \FDBDOJJIODN::class);
        $this->AMHCOEKJIAN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 MLGDAOKGNKI = 7;</code>
     * @return int
     */
    public function getMLGDAOKGNKI()
    {
        return $this->MLGDAOKGNKI;
    }

    /**
     * Generated from protobuf field <code>uint32 MLGDAOKGNKI = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMLGDAOKGNKI($var)
    {
        GPBUtil::checkUint32($var);
        $this->MLGDAOKGNKI = $var;

        return $this;
    }

}
