<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BLIMEDCMHMN</code>
 */
class BLIMEDCMHMN extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 khmnkdaahae = 4;</code>
     */
    protected $khmnkdaahae = 0;
    /**
     * Generated from protobuf field <code>uint32 lapkefiaale = 9;</code>
     */
    protected $lapkefiaale = 0;
    /**
     * Generated from protobuf field <code>uint32 mpnjdflkced = 13;</code>
     */
    protected $mpnjdflkced = 0;
    /**
     * Generated from protobuf field <code>uint32 laicmbgpjfc = 15;</code>
     */
    protected $laicmbgpjfc = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $khmnkdaahae
     *     @type int $lapkefiaale
     *     @type int $mpnjdflkced
     *     @type int $laicmbgpjfc
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 khmnkdaahae = 4;</code>
     * @return int
     */
    public function getKhmnkdaahae()
    {
        return $this->khmnkdaahae;
    }

    /**
     * Generated from protobuf field <code>uint32 khmnkdaahae = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setKhmnkdaahae($var)
    {
        GPBUtil::checkUint32($var);
        $this->khmnkdaahae = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lapkefiaale = 9;</code>
     * @return int
     */
    public function getLapkefiaale()
    {
        return $this->lapkefiaale;
    }

    /**
     * Generated from protobuf field <code>uint32 lapkefiaale = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLapkefiaale($var)
    {
        GPBUtil::checkUint32($var);
        $this->lapkefiaale = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mpnjdflkced = 13;</code>
     * @return int
     */
    public function getMpnjdflkced()
    {
        return $this->mpnjdflkced;
    }

    /**
     * Generated from protobuf field <code>uint32 mpnjdflkced = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setMpnjdflkced($var)
    {
        GPBUtil::checkUint32($var);
        $this->mpnjdflkced = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 laicmbgpjfc = 15;</code>
     * @return int
     */
    public function getLaicmbgpjfc()
    {
        return $this->laicmbgpjfc;
    }

    /**
     * Generated from protobuf field <code>uint32 laicmbgpjfc = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLaicmbgpjfc($var)
    {
        GPBUtil::checkUint32($var);
        $this->laicmbgpjfc = $var;

        return $this;
    }

}

