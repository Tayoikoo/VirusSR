<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * KJEJDILFIOD (8046)
 *
 * Generated from protobuf message <code>TrainPartyBuildStartStepCsReq</code>
 */
class TrainPartyBuildStartStepCsReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 meakdnhibgk = 6;</code>
     */
    protected $meakdnhibgk = 0;
    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 10;</code>
     */
    protected $kjkpmffamfk = 0;
    /**
     * Generated from protobuf field <code>uint32 mfajcodjpln = 9;</code>
     */
    protected $mfajcodjpln = 0;
    /**
     * Generated from protobuf field <code>.ADCGGKAPKFK pcpigbnbioe = 5;</code>
     */
    protected $pcpigbnbioe = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $meakdnhibgk
     *     @type int $kjkpmffamfk
     *     @type int $mfajcodjpln
     *     @type \ADCGGKAPKFK $pcpigbnbioe
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 meakdnhibgk = 6;</code>
     * @return int
     */
    public function getMeakdnhibgk()
    {
        return $this->meakdnhibgk;
    }

    /**
     * Generated from protobuf field <code>uint32 meakdnhibgk = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMeakdnhibgk($var)
    {
        GPBUtil::checkUint32($var);
        $this->meakdnhibgk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 10;</code>
     * @return int
     */
    public function getKjkpmffamfk()
    {
        return $this->kjkpmffamfk;
    }

    /**
     * Generated from protobuf field <code>uint32 kjkpmffamfk = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setKjkpmffamfk($var)
    {
        GPBUtil::checkUint32($var);
        $this->kjkpmffamfk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 mfajcodjpln = 9;</code>
     * @return int
     */
    public function getMfajcodjpln()
    {
        return $this->mfajcodjpln;
    }

    /**
     * Generated from protobuf field <code>uint32 mfajcodjpln = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setMfajcodjpln($var)
    {
        GPBUtil::checkUint32($var);
        $this->mfajcodjpln = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ADCGGKAPKFK pcpigbnbioe = 5;</code>
     * @return \ADCGGKAPKFK|null
     */
    public function getPcpigbnbioe()
    {
        return $this->pcpigbnbioe;
    }

    public function hasPcpigbnbioe()
    {
        return isset($this->pcpigbnbioe);
    }

    public function clearPcpigbnbioe()
    {
        unset($this->pcpigbnbioe);
    }

    /**
     * Generated from protobuf field <code>.ADCGGKAPKFK pcpigbnbioe = 5;</code>
     * @param \ADCGGKAPKFK $var
     * @return $this
     */
    public function setPcpigbnbioe($var)
    {
        GPBUtil::checkMessage($var, \ADCGGKAPKFK::class);
        $this->pcpigbnbioe = $var;

        return $this;
    }

}

