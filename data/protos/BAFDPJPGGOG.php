<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BAFDPJPGGOG</code>
 */
class BAFDPJPGGOG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 kifljlfnkpl = 1;</code>
     */
    protected $kifljlfnkpl = 0;
    /**
     * Generated from protobuf field <code>bool khknacfljnf = 2;</code>
     */
    protected $khknacfljnf = false;
    /**
     * Generated from protobuf field <code>.DHOOCHKMPBP oedndgjfkhb = 3;</code>
     */
    protected $oedndgjfkhb = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kifljlfnkpl
     *     @type bool $khknacfljnf
     *     @type \DHOOCHKMPBP $oedndgjfkhb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 kifljlfnkpl = 1;</code>
     * @return int
     */
    public function getKifljlfnkpl()
    {
        return $this->kifljlfnkpl;
    }

    /**
     * Generated from protobuf field <code>uint32 kifljlfnkpl = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKifljlfnkpl($var)
    {
        GPBUtil::checkUint32($var);
        $this->kifljlfnkpl = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool khknacfljnf = 2;</code>
     * @return bool
     */
    public function getKhknacfljnf()
    {
        return $this->khknacfljnf;
    }

    /**
     * Generated from protobuf field <code>bool khknacfljnf = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setKhknacfljnf($var)
    {
        GPBUtil::checkBool($var);
        $this->khknacfljnf = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.DHOOCHKMPBP oedndgjfkhb = 3;</code>
     * @return \DHOOCHKMPBP|null
     */
    public function getOedndgjfkhb()
    {
        return $this->oedndgjfkhb;
    }

    public function hasOedndgjfkhb()
    {
        return isset($this->oedndgjfkhb);
    }

    public function clearOedndgjfkhb()
    {
        unset($this->oedndgjfkhb);
    }

    /**
     * Generated from protobuf field <code>.DHOOCHKMPBP oedndgjfkhb = 3;</code>
     * @param \DHOOCHKMPBP $var
     * @return $this
     */
    public function setOedndgjfkhb($var)
    {
        GPBUtil::checkMessage($var, \DHOOCHKMPBP::class);
        $this->oedndgjfkhb = $var;

        return $this;
    }

}
