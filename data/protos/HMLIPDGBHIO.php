<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HMLIPDGBHIO</code>
 */
class HMLIPDGBHIO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 CJOLEGHDFKP = 2;</code>
     */
    protected $CJOLEGHDFKP = 0;
    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 7;</code>
     */
    protected $OMBLHJDKEJA = 0;
    /**
     * Generated from protobuf field <code>uint32 NFHPBLNJFLL = 13;</code>
     */
    protected $NFHPBLNJFLL = 0;
    /**
     * Generated from protobuf field <code>uint32 AAHHAJPNENH = 1;</code>
     */
    protected $AAHHAJPNENH = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CJOLEGHDFKP
     *     @type int $OMBLHJDKEJA
     *     @type int $NFHPBLNJFLL
     *     @type int $AAHHAJPNENH
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 CJOLEGHDFKP = 2;</code>
     * @return int
     */
    public function getCJOLEGHDFKP()
    {
        return $this->CJOLEGHDFKP;
    }

    /**
     * Generated from protobuf field <code>uint32 CJOLEGHDFKP = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCJOLEGHDFKP($var)
    {
        GPBUtil::checkUint32($var);
        $this->CJOLEGHDFKP = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 7;</code>
     * @return int
     */
    public function getOMBLHJDKEJA()
    {
        return $this->OMBLHJDKEJA;
    }

    /**
     * Generated from protobuf field <code>uint32 OMBLHJDKEJA = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOMBLHJDKEJA($var)
    {
        GPBUtil::checkUint32($var);
        $this->OMBLHJDKEJA = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NFHPBLNJFLL = 13;</code>
     * @return int
     */
    public function getNFHPBLNJFLL()
    {
        return $this->NFHPBLNJFLL;
    }

    /**
     * Generated from protobuf field <code>uint32 NFHPBLNJFLL = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setNFHPBLNJFLL($var)
    {
        GPBUtil::checkUint32($var);
        $this->NFHPBLNJFLL = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 AAHHAJPNENH = 1;</code>
     * @return int
     */
    public function getAAHHAJPNENH()
    {
        return $this->AAHHAJPNENH;
    }

    /**
     * Generated from protobuf field <code>uint32 AAHHAJPNENH = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAAHHAJPNENH($var)
    {
        GPBUtil::checkUint32($var);
        $this->AAHHAJPNENH = $var;

        return $this;
    }

}
