<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * DECFCGOEOBI (1195)
 *
 * Generated from protobuf message <code>FinishPlotScRsp</code>
 */
class FinishPlotScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 foinhpjdjnn = 4;</code>
     */
    protected $foinhpjdjnn = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $foinhpjdjnn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 12;</code>
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
     * Generated from protobuf field <code>uint32 foinhpjdjnn = 4;</code>
     * @return int
     */
    public function getFoinhpjdjnn()
    {
        return $this->foinhpjdjnn;
    }

    /**
     * Generated from protobuf field <code>uint32 foinhpjdjnn = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setFoinhpjdjnn($var)
    {
        GPBUtil::checkUint32($var);
        $this->foinhpjdjnn = $var;

        return $this;
    }

}
