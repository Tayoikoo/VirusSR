<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PFFFPCPOHOB</code>
 */
class PFFFPCPOHOB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 FIIMDIGFDNJ = 7;</code>
     */
    protected $FIIMDIGFDNJ = 0;
    /**
     * Generated from protobuf field <code>repeated .OBEMPHOCKAH FCLNMCPLMEG = 3;</code>
     */
    private $FCLNMCPLMEG;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $FIIMDIGFDNJ
     *     @type array<\OBEMPHOCKAH>|\Google\Protobuf\Internal\RepeatedField $FCLNMCPLMEG
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
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
     * Generated from protobuf field <code>uint32 FIIMDIGFDNJ = 7;</code>
     * @return int
     */
    public function getFIIMDIGFDNJ()
    {
        return $this->FIIMDIGFDNJ;
    }

    /**
     * Generated from protobuf field <code>uint32 FIIMDIGFDNJ = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setFIIMDIGFDNJ($var)
    {
        GPBUtil::checkUint32($var);
        $this->FIIMDIGFDNJ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .OBEMPHOCKAH FCLNMCPLMEG = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFCLNMCPLMEG()
    {
        return $this->FCLNMCPLMEG;
    }

    /**
     * Generated from protobuf field <code>repeated .OBEMPHOCKAH FCLNMCPLMEG = 3;</code>
     * @param array<\OBEMPHOCKAH>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFCLNMCPLMEG($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OBEMPHOCKAH::class);
        $this->FCLNMCPLMEG = $arr;

        return $this;
    }

}

