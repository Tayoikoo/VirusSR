<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EKJMGDMBJJC</code>
 */
class EKJMGDMBJJC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.KCBOKOIPBBC jalmgplehbn = 1;</code>
     */
    protected $jalmgplehbn = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \KCBOKOIPBBC $jalmgplehbn
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.KCBOKOIPBBC jalmgplehbn = 1;</code>
     * @return \KCBOKOIPBBC|null
     */
    public function getJalmgplehbn()
    {
        return $this->jalmgplehbn;
    }

    public function hasJalmgplehbn()
    {
        return isset($this->jalmgplehbn);
    }

    public function clearJalmgplehbn()
    {
        unset($this->jalmgplehbn);
    }

    /**
     * Generated from protobuf field <code>.KCBOKOIPBBC jalmgplehbn = 1;</code>
     * @param \KCBOKOIPBBC $var
     * @return $this
     */
    public function setJalmgplehbn($var)
    {
        GPBUtil::checkMessage($var, \KCBOKOIPBBC::class);
        $this->jalmgplehbn = $var;

        return $this;
    }

}
