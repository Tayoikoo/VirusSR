<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * IANBCHFEGIC (6453)
 *
 * Generated from protobuf message <code>TravelBrochureApplyPasterListCsReq</code>
 */
class TravelBrochureApplyPasterListCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .OBGHKLANOGB migfdmjpihi = 13;</code>
     */
    private $migfdmjpihi;
    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 5;</code>
     */
    protected $cjaebolpifp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\OBGHKLANOGB>|\Google\Protobuf\Internal\RepeatedField $migfdmjpihi
     *     @type int $cjaebolpifp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .OBGHKLANOGB migfdmjpihi = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMigfdmjpihi()
    {
        return $this->migfdmjpihi;
    }

    /**
     * Generated from protobuf field <code>repeated .OBGHKLANOGB migfdmjpihi = 13;</code>
     * @param array<\OBGHKLANOGB>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMigfdmjpihi($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OBGHKLANOGB::class);
        $this->migfdmjpihi = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 5;</code>
     * @return int
     */
    public function getCjaebolpifp()
    {
        return $this->cjaebolpifp;
    }

    /**
     * Generated from protobuf field <code>uint32 cjaebolpifp = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCjaebolpifp($var)
    {
        GPBUtil::checkUint32($var);
        $this->cjaebolpifp = $var;

        return $this;
    }

}
