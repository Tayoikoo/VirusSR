<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>BBIELDAHLAF</code>
 */
class BBIELDAHLAF extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ELAFKBOPNIG fmmeoiaoend = 14;</code>
     */
    protected $fmmeoiaoend = null;
    /**
     * Generated from protobuf field <code>.NFCIPKJACMC pajlkkdofme = 7;</code>
     */
    protected $pajlkkdofme = null;

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
     * Generated from protobuf field <code>.ELAFKBOPNIG fmmeoiaoend = 14;</code>
     * @return \ELAFKBOPNIG|null
     */
    public function getFmmeoiaoend()
    {
        return $this->fmmeoiaoend;
    }

    public function hasFmmeoiaoend()
    {
        return isset($this->fmmeoiaoend);
    }

    public function clearFmmeoiaoend()
    {
        unset($this->fmmeoiaoend);
    }

    /**
     * Generated from protobuf field <code>.ELAFKBOPNIG fmmeoiaoend = 14;</code>
     * @param \ELAFKBOPNIG $var
     * @return $this
     */
    public function setFmmeoiaoend($var)
    {
        GPBUtil::checkMessage($var, \ELAFKBOPNIG::class);
        $this->fmmeoiaoend = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.NFCIPKJACMC pajlkkdofme = 7;</code>
     * @return \NFCIPKJACMC|null
     */
    public function getPajlkkdofme()
    {
        return $this->pajlkkdofme;
    }

    public function hasPajlkkdofme()
    {
        return isset($this->pajlkkdofme);
    }

    public function clearPajlkkdofme()
    {
        unset($this->pajlkkdofme);
    }

    /**
     * Generated from protobuf field <code>.NFCIPKJACMC pajlkkdofme = 7;</code>
     * @param \NFCIPKJACMC $var
     * @return $this
     */
    public function setPajlkkdofme($var)
    {
        GPBUtil::checkMessage($var, \NFCIPKJACMC::class);
        $this->pajlkkdofme = $var;

        return $this;
    }

}

