<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HJLKNPKKILG</code>
 */
class HJLKNPKKILG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 GIBEGFHBEFD = 10;</code>
     */
    protected $GIBEGFHBEFD = 0;
    /**
     * Generated from protobuf field <code>bool GIJJAEPOHGK = 15;</code>
     */
    protected $GIJJAEPOHGK = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $GIBEGFHBEFD
     *     @type bool $GIJJAEPOHGK
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 GIBEGFHBEFD = 10;</code>
     * @return int
     */
    public function getGIBEGFHBEFD()
    {
        return $this->GIBEGFHBEFD;
    }

    /**
     * Generated from protobuf field <code>uint32 GIBEGFHBEFD = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setGIBEGFHBEFD($var)
    {
        GPBUtil::checkUint32($var);
        $this->GIBEGFHBEFD = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool GIJJAEPOHGK = 15;</code>
     * @return bool
     */
    public function getGIJJAEPOHGK()
    {
        return $this->GIJJAEPOHGK;
    }

    /**
     * Generated from protobuf field <code>bool GIJJAEPOHGK = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setGIJJAEPOHGK($var)
    {
        GPBUtil::checkBool($var);
        $this->GIJJAEPOHGK = $var;

        return $this;
    }

}
