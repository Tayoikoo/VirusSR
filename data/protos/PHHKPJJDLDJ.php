<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PHHKPJJDLDJ</code>
 */
class PHHKPJJDLDJ extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 LJBBGBBKNDE = 13;</code>
     */
    protected $LJBBGBBKNDE = 0;
    /**
     * Generated from protobuf field <code>uint32 JDBKMAACMMK = 3;</code>
     */
    protected $JDBKMAACMMK = 0;
    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 2;</code>
     */
    protected $DDMDPBEGKHC = 0;
    /**
     * Generated from protobuf field <code>uint32 OKCPHFONBHI = 15;</code>
     */
    protected $OKCPHFONBHI = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $LJBBGBBKNDE
     *     @type int $JDBKMAACMMK
     *     @type int $DDMDPBEGKHC
     *     @type int $OKCPHFONBHI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 LJBBGBBKNDE = 13;</code>
     * @return int
     */
    public function getLJBBGBBKNDE()
    {
        return $this->LJBBGBBKNDE;
    }

    /**
     * Generated from protobuf field <code>uint32 LJBBGBBKNDE = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setLJBBGBBKNDE($var)
    {
        GPBUtil::checkUint32($var);
        $this->LJBBGBBKNDE = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 JDBKMAACMMK = 3;</code>
     * @return int
     */
    public function getJDBKMAACMMK()
    {
        return $this->JDBKMAACMMK;
    }

    /**
     * Generated from protobuf field <code>uint32 JDBKMAACMMK = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setJDBKMAACMMK($var)
    {
        GPBUtil::checkUint32($var);
        $this->JDBKMAACMMK = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 2;</code>
     * @return int
     */
    public function getDDMDPBEGKHC()
    {
        return $this->DDMDPBEGKHC;
    }

    /**
     * Generated from protobuf field <code>uint32 DDMDPBEGKHC = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDDMDPBEGKHC($var)
    {
        GPBUtil::checkUint32($var);
        $this->DDMDPBEGKHC = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 OKCPHFONBHI = 15;</code>
     * @return int
     */
    public function getOKCPHFONBHI()
    {
        return $this->OKCPHFONBHI;
    }

    /**
     * Generated from protobuf field <code>uint32 OKCPHFONBHI = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setOKCPHFONBHI($var)
    {
        GPBUtil::checkUint32($var);
        $this->OKCPHFONBHI = $var;

        return $this;
    }

}
