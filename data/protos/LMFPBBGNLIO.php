<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>LMFPBBGNLIO</code>
 */
class LMFPBBGNLIO extends \Google\Protobuf\Internal\Message
{
    protected $AJBMBGJMCLD;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \NGKLIKHIOPB $ollodgfkoco
     *     @type \KPODNODIPII $ngekgdbhalb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.NGKLIKHIOPB ollodgfkoco = 11;</code>
     * @return \NGKLIKHIOPB|null
     */
    public function getOllodgfkoco()
    {
        return $this->readOneof(11);
    }

    public function hasOllodgfkoco()
    {
        return $this->hasOneof(11);
    }

    /**
     * Generated from protobuf field <code>.NGKLIKHIOPB ollodgfkoco = 11;</code>
     * @param \NGKLIKHIOPB $var
     * @return $this
     */
    public function setOllodgfkoco($var)
    {
        GPBUtil::checkMessage($var, \NGKLIKHIOPB::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.KPODNODIPII ngekgdbhalb = 8;</code>
     * @return \KPODNODIPII|null
     */
    public function getNgekgdbhalb()
    {
        return $this->readOneof(8);
    }

    public function hasNgekgdbhalb()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.KPODNODIPII ngekgdbhalb = 8;</code>
     * @param \KPODNODIPII $var
     * @return $this
     */
    public function setNgekgdbhalb($var)
    {
        GPBUtil::checkMessage($var, \KPODNODIPII::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAJBMBGJMCLD()
    {
        return $this->whichOneof("AJBMBGJMCLD");
    }

}

