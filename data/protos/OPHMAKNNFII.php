<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>OPHMAKNNFII</code>
 */
class OPHMAKNNFII extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool jcmnddhikep = 6;</code>
     */
    protected $jcmnddhikep = false;
    /**
     * Generated from protobuf field <code>uint32 nkhiafpmach = 9;</code>
     */
    protected $nkhiafpmach = 0;
    /**
     * Generated from protobuf field <code>uint32 level_id = 10;</code>
     */
    protected $level_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $jcmnddhikep
     *     @type int $nkhiafpmach
     *     @type int $level_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool jcmnddhikep = 6;</code>
     * @return bool
     */
    public function getJcmnddhikep()
    {
        return $this->jcmnddhikep;
    }

    /**
     * Generated from protobuf field <code>bool jcmnddhikep = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setJcmnddhikep($var)
    {
        GPBUtil::checkBool($var);
        $this->jcmnddhikep = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 nkhiafpmach = 9;</code>
     * @return int
     */
    public function getNkhiafpmach()
    {
        return $this->nkhiafpmach;
    }

    /**
     * Generated from protobuf field <code>uint32 nkhiafpmach = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setNkhiafpmach($var)
    {
        GPBUtil::checkUint32($var);
        $this->nkhiafpmach = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 10;</code>
     * @return int
     */
    public function getLevelId()
    {
        return $this->level_id;
    }

    /**
     * Generated from protobuf field <code>uint32 level_id = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setLevelId($var)
    {
        GPBUtil::checkUint32($var);
        $this->level_id = $var;

        return $this;
    }

}
