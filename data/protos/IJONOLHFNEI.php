<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>IJONOLHFNEI</code>
 */
class IJONOLHFNEI extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 noejnpahdek = 11;</code>
     */
    protected $noejnpahdek = 0;
    /**
     * Generated from protobuf field <code>uint32 ljeoilpllpm = 1;</code>
     */
    protected $ljeoilpllpm = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 jmmaoemlddl = 9;</code>
     */
    private $jmmaoemlddl;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $noejnpahdek
     *     @type int $ljeoilpllpm
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $jmmaoemlddl
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 noejnpahdek = 11;</code>
     * @return int
     */
    public function getNoejnpahdek()
    {
        return $this->noejnpahdek;
    }

    /**
     * Generated from protobuf field <code>uint32 noejnpahdek = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setNoejnpahdek($var)
    {
        GPBUtil::checkUint32($var);
        $this->noejnpahdek = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 ljeoilpllpm = 1;</code>
     * @return int
     */
    public function getLjeoilpllpm()
    {
        return $this->ljeoilpllpm;
    }

    /**
     * Generated from protobuf field <code>uint32 ljeoilpllpm = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLjeoilpllpm($var)
    {
        GPBUtil::checkUint32($var);
        $this->ljeoilpllpm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 jmmaoemlddl = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJmmaoemlddl()
    {
        return $this->jmmaoemlddl;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 jmmaoemlddl = 9;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJmmaoemlddl($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->jmmaoemlddl = $arr;

        return $this;
    }

}
