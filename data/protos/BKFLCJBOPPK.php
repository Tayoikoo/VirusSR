<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BKFLCJBOPPK</code>
 */
class BKFLCJBOPPK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 2;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>repeated .MEEEDDFNIEI HOCAMEEKCJI = 10;</code>
     */
    private $HOCAMEEKCJI;
    /**
     * Generated from protobuf field <code>.MEEEDDFNIEI OFIPMIFBHGI = 7;</code>
     */
    protected $OFIPMIFBHGI = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type array<\MEEEDDFNIEI>|\Google\Protobuf\Internal\RepeatedField $HOCAMEEKCJI
     *     @type \MEEEDDFNIEI $OFIPMIFBHGI
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
     * Generated from protobuf field <code>repeated .MEEEDDFNIEI HOCAMEEKCJI = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHOCAMEEKCJI()
    {
        return $this->HOCAMEEKCJI;
    }

    /**
     * Generated from protobuf field <code>repeated .MEEEDDFNIEI HOCAMEEKCJI = 10;</code>
     * @param array<\MEEEDDFNIEI>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHOCAMEEKCJI($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MEEEDDFNIEI::class);
        $this->HOCAMEEKCJI = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MEEEDDFNIEI OFIPMIFBHGI = 7;</code>
     * @return \MEEEDDFNIEI|null
     */
    public function getOFIPMIFBHGI()
    {
        return $this->OFIPMIFBHGI;
    }

    public function hasOFIPMIFBHGI()
    {
        return isset($this->OFIPMIFBHGI);
    }

    public function clearOFIPMIFBHGI()
    {
        unset($this->OFIPMIFBHGI);
    }

    /**
     * Generated from protobuf field <code>.MEEEDDFNIEI OFIPMIFBHGI = 7;</code>
     * @param \MEEEDDFNIEI $var
     * @return $this
     */
    public function setOFIPMIFBHGI($var)
    {
        GPBUtil::checkMessage($var, \MEEEDDFNIEI::class);
        $this->OFIPMIFBHGI = $var;

        return $this;
    }

}

