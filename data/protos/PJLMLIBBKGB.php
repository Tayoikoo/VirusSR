<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PJLMLIBBKGB</code>
 */
class PJLMLIBBKGB extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ECPGDNMOLKI POAGFFCEHGI = 1;</code>
     */
    protected $POAGFFCEHGI = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ECPGDNMOLKI $POAGFFCEHGI
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ECPGDNMOLKI POAGFFCEHGI = 1;</code>
     * @return \ECPGDNMOLKI|null
     */
    public function getPOAGFFCEHGI()
    {
        return $this->POAGFFCEHGI;
    }

    public function hasPOAGFFCEHGI()
    {
        return isset($this->POAGFFCEHGI);
    }

    public function clearPOAGFFCEHGI()
    {
        unset($this->POAGFFCEHGI);
    }

    /**
     * Generated from protobuf field <code>.ECPGDNMOLKI POAGFFCEHGI = 1;</code>
     * @param \ECPGDNMOLKI $var
     * @return $this
     */
    public function setPOAGFFCEHGI($var)
    {
        GPBUtil::checkMessage($var, \ECPGDNMOLKI::class);
        $this->POAGFFCEHGI = $var;

        return $this;
    }

}
