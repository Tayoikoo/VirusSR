<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OGBCPDFIANF</code>
 */
class OGBCPDFIANF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 fcdaephkfok = 7;</code>
     */
    protected $fcdaephkfok = 0;
    /**
     * Generated from protobuf field <code>int32 nnbjmfppeai = 4;</code>
     */
    protected $nnbjmfppeai = 0;
    /**
     * Generated from protobuf field <code>string hlomdjjpmep = 8;</code>
     */
    protected $hlomdjjpmep = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fcdaephkfok
     *     @type int $nnbjmfppeai
     *     @type string $hlomdjjpmep
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 fcdaephkfok = 7;</code>
     * @return int
     */
    public function getFcdaephkfok()
    {
        return $this->fcdaephkfok;
    }

    /**
     * Generated from protobuf field <code>int32 fcdaephkfok = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFcdaephkfok($var)
    {
        GPBUtil::checkInt32($var);
        $this->fcdaephkfok = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 nnbjmfppeai = 4;</code>
     * @return int
     */
    public function getNnbjmfppeai()
    {
        return $this->nnbjmfppeai;
    }

    /**
     * Generated from protobuf field <code>int32 nnbjmfppeai = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNnbjmfppeai($var)
    {
        GPBUtil::checkInt32($var);
        $this->nnbjmfppeai = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string hlomdjjpmep = 8;</code>
     * @return string
     */
    public function getHlomdjjpmep()
    {
        return $this->hlomdjjpmep;
    }

    /**
     * Generated from protobuf field <code>string hlomdjjpmep = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setHlomdjjpmep($var)
    {
        GPBUtil::checkString($var, True);
        $this->hlomdjjpmep = $var;

        return $this;
    }

}

