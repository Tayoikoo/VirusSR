<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>KAJAGMGIEBG</code>
 */
class KAJAGMGIEBG extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH cilceklcdib = 5;</code>
     */
    protected $cilceklcdib = null;
    /**
     * Generated from protobuf field <code>.GMBHHEIELFC gahceokfdlm = 11;</code>
     */
    protected $gahceokfdlm = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ABOIFBHJJJH $cilceklcdib
     *     @type int $gahceokfdlm
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH cilceklcdib = 5;</code>
     * @return \ABOIFBHJJJH|null
     */
    public function getCilceklcdib()
    {
        return $this->cilceklcdib;
    }

    public function hasCilceklcdib()
    {
        return isset($this->cilceklcdib);
    }

    public function clearCilceklcdib()
    {
        unset($this->cilceklcdib);
    }

    /**
     * Generated from protobuf field <code>.ABOIFBHJJJH cilceklcdib = 5;</code>
     * @param \ABOIFBHJJJH $var
     * @return $this
     */
    public function setCilceklcdib($var)
    {
        GPBUtil::checkMessage($var, \ABOIFBHJJJH::class);
        $this->cilceklcdib = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GMBHHEIELFC gahceokfdlm = 11;</code>
     * @return int
     */
    public function getGahceokfdlm()
    {
        return $this->gahceokfdlm;
    }

    /**
     * Generated from protobuf field <code>.GMBHHEIELFC gahceokfdlm = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setGahceokfdlm($var)
    {
        GPBUtil::checkEnum($var, \GMBHHEIELFC::class);
        $this->gahceokfdlm = $var;

        return $this;
    }

}

