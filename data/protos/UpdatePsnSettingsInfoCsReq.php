<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KCNHHADBEOO (32)
 *
 * Generated from protobuf message <code>UpdatePsnSettingsInfoCsReq</code>
 */
class UpdatePsnSettingsInfoCsReq extends \Google\Protobuf\Internal\Message
{
    protected $MLDILKFLIPD;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \HGGIAPIOCLG $opegbhopkcn
     *     @type \HFAMBFECKLI $mhbfnkmfgcg
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.HGGIAPIOCLG opegbhopkcn = 1103;</code>
     * @return \HGGIAPIOCLG|null
     */
    public function getOpegbhopkcn()
    {
        return $this->readOneof(1103);
    }

    public function hasOpegbhopkcn()
    {
        return $this->hasOneof(1103);
    }

    /**
     * Generated from protobuf field <code>.HGGIAPIOCLG opegbhopkcn = 1103;</code>
     * @param \HGGIAPIOCLG $var
     * @return $this
     */
    public function setOpegbhopkcn($var)
    {
        GPBUtil::checkMessage($var, \HGGIAPIOCLG::class);
        $this->writeOneof(1103, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.HFAMBFECKLI mhbfnkmfgcg = 673;</code>
     * @return \HFAMBFECKLI|null
     */
    public function getMhbfnkmfgcg()
    {
        return $this->readOneof(673);
    }

    public function hasMhbfnkmfgcg()
    {
        return $this->hasOneof(673);
    }

    /**
     * Generated from protobuf field <code>.HFAMBFECKLI mhbfnkmfgcg = 673;</code>
     * @param \HFAMBFECKLI $var
     * @return $this
     */
    public function setMhbfnkmfgcg($var)
    {
        GPBUtil::checkMessage($var, \HFAMBFECKLI::class);
        $this->writeOneof(673, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMLDILKFLIPD()
    {
        return $this->whichOneof("MLDILKFLIPD");
    }

}
