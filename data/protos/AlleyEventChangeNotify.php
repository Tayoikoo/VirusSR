<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PLHAMFKIDGC (4724)
 *
 * Generated from protobuf message <code>AlleyEventChangeNotify</code>
 */
class AlleyEventChangeNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 ophmnnhhnei = 12;</code>
     */
    protected $ophmnnhhnei = 0;
    /**
     * Generated from protobuf field <code>.FBMJMHIIODF hoknnhdkmhp = 1;</code>
     */
    protected $hoknnhdkmhp = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ophmnnhhnei
     *     @type \FBMJMHIIODF $hoknnhdkmhp
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 ophmnnhhnei = 12;</code>
     * @return int
     */
    public function getOphmnnhhnei()
    {
        return $this->ophmnnhhnei;
    }

    /**
     * Generated from protobuf field <code>uint32 ophmnnhhnei = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setOphmnnhhnei($var)
    {
        GPBUtil::checkUint32($var);
        $this->ophmnnhhnei = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FBMJMHIIODF hoknnhdkmhp = 1;</code>
     * @return \FBMJMHIIODF|null
     */
    public function getHoknnhdkmhp()
    {
        return $this->hoknnhdkmhp;
    }

    public function hasHoknnhdkmhp()
    {
        return isset($this->hoknnhdkmhp);
    }

    public function clearHoknnhdkmhp()
    {
        unset($this->hoknnhdkmhp);
    }

    /**
     * Generated from protobuf field <code>.FBMJMHIIODF hoknnhdkmhp = 1;</code>
     * @param \FBMJMHIIODF $var
     * @return $this
     */
    public function setHoknnhdkmhp($var)
    {
        GPBUtil::checkMessage($var, \FBMJMHIIODF::class);
        $this->hoknnhdkmhp = $var;

        return $this;
    }

}

