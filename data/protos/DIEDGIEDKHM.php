<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>DIEDGIEDKHM</code>
 */
class DIEDGIEDKHM extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 5;</code>
     */
    protected $nkpdmckfppp = 0;
    /**
     * Generated from protobuf field <code>repeated .IDONDCHFKHG hcoapfagbei = 13;</code>
     */
    private $hcoapfagbei;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $nkpdmckfppp
     *     @type array<\IDONDCHFKHG>|\Google\Protobuf\Internal\RepeatedField $hcoapfagbei
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 5;</code>
     * @return int
     */
    public function getNkpdmckfppp()
    {
        return $this->nkpdmckfppp;
    }

    /**
     * Generated from protobuf field <code>uint32 nkpdmckfppp = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setNkpdmckfppp($var)
    {
        GPBUtil::checkUint32($var);
        $this->nkpdmckfppp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .IDONDCHFKHG hcoapfagbei = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHcoapfagbei()
    {
        return $this->hcoapfagbei;
    }

    /**
     * Generated from protobuf field <code>repeated .IDONDCHFKHG hcoapfagbei = 13;</code>
     * @param array<\IDONDCHFKHG>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHcoapfagbei($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \IDONDCHFKHG::class);
        $this->hcoapfagbei = $arr;

        return $this;
    }

}

