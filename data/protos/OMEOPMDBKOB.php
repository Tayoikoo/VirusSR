<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OMEOPMDBKOB</code>
 */
class OMEOPMDBKOB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.OOPKDEMPMFI KOBMCLGJJDB = 5;</code>
     */
    protected $KOBMCLGJJDB = null;
    /**
     * Generated from protobuf field <code>uint32 NCPHFIDNGHE = 12;</code>
     */
    protected $NCPHFIDNGHE = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \OOPKDEMPMFI $KOBMCLGJJDB
     *     @type int $NCPHFIDNGHE
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.OOPKDEMPMFI KOBMCLGJJDB = 5;</code>
     * @return \OOPKDEMPMFI|null
     */
    public function getKOBMCLGJJDB()
    {
        return $this->KOBMCLGJJDB;
    }

    public function hasKOBMCLGJJDB()
    {
        return isset($this->KOBMCLGJJDB);
    }

    public function clearKOBMCLGJJDB()
    {
        unset($this->KOBMCLGJJDB);
    }

    /**
     * Generated from protobuf field <code>.OOPKDEMPMFI KOBMCLGJJDB = 5;</code>
     * @param \OOPKDEMPMFI $var
     * @return $this
     */
    public function setKOBMCLGJJDB($var)
    {
        GPBUtil::checkMessage($var, \OOPKDEMPMFI::class);
        $this->KOBMCLGJJDB = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 NCPHFIDNGHE = 12;</code>
     * @return int
     */
    public function getNCPHFIDNGHE()
    {
        return $this->NCPHFIDNGHE;
    }

    /**
     * Generated from protobuf field <code>uint32 NCPHFIDNGHE = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setNCPHFIDNGHE($var)
    {
        GPBUtil::checkUint32($var);
        $this->NCPHFIDNGHE = $var;

        return $this;
    }

}
