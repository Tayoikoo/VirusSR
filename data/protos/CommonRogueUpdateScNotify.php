<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * OIKJJEAMNJO (5699)
 *
 * Generated from protobuf message <code>CommonRogueUpdateScNotify</code>
 */
class CommonRogueUpdateScNotify extends \Google\Protobuf\Internal\Message
{
    protected $CLMBLKDAJHB;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ELAFKBOPNIG $fmmeoiaoend
     *     @type \NFCIPKJACMC $pajlkkdofme
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ELAFKBOPNIG fmmeoiaoend = 4;</code>
     * @return \ELAFKBOPNIG|null
     */
    public function getFmmeoiaoend()
    {
        return $this->readOneof(4);
    }

    public function hasFmmeoiaoend()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.ELAFKBOPNIG fmmeoiaoend = 4;</code>
     * @param \ELAFKBOPNIG $var
     * @return $this
     */
    public function setFmmeoiaoend($var)
    {
        GPBUtil::checkMessage($var, \ELAFKBOPNIG::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NFCIPKJACMC pajlkkdofme = 14;</code>
     * @return \NFCIPKJACMC|null
     */
    public function getPajlkkdofme()
    {
        return $this->readOneof(14);
    }

    public function hasPajlkkdofme()
    {
        return $this->hasOneof(14);
    }

    /**
     * Generated from protobuf field <code>.NFCIPKJACMC pajlkkdofme = 14;</code>
     * @param \NFCIPKJACMC $var
     * @return $this
     */
    public function setPajlkkdofme($var)
    {
        GPBUtil::checkMessage($var, \NFCIPKJACMC::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCLMBLKDAJHB()
    {
        return $this->whichOneof("CLMBLKDAJHB");
    }

}

