<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>HCBNNJKHPLE</code>
 */
class HCBNNJKHPLE extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 BFMMBBBDOMN = 8;</code>
     */
    protected $BFMMBBBDOMN = 0;
    /**
     * Generated from protobuf field <code>uint32 BBLGKACGAOB = 4;</code>
     */
    protected $BBLGKACGAOB = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $BFMMBBBDOMN
     *     @type int $BBLGKACGAOB
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 BFMMBBBDOMN = 8;</code>
     * @return int
     */
    public function getBFMMBBBDOMN()
    {
        return $this->BFMMBBBDOMN;
    }

    /**
     * Generated from protobuf field <code>uint32 BFMMBBBDOMN = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setBFMMBBBDOMN($var)
    {
        GPBUtil::checkUint32($var);
        $this->BFMMBBBDOMN = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 BBLGKACGAOB = 4;</code>
     * @return int
     */
    public function getBBLGKACGAOB()
    {
        return $this->BBLGKACGAOB;
    }

    /**
     * Generated from protobuf field <code>uint32 BBLGKACGAOB = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBBLGKACGAOB($var)
    {
        GPBUtil::checkUint32($var);
        $this->BBLGKACGAOB = $var;

        return $this;
    }

}

