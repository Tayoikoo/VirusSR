<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LFNFJHECMMH (7001)
 *
 * Generated from protobuf message <code>MonopolyEventLoadUpdateScNotify</code>
 */
class MonopolyEventLoadUpdateScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .FOKNLLKICEO kkmbddibiip = 3;</code>
     */
    private $kkmbddibiip;
    /**
     * Generated from protobuf field <code>repeated .FOKNLLKICEO inpeoidjgil = 1;</code>
     */
    private $inpeoidjgil;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\FOKNLLKICEO>|\Google\Protobuf\Internal\RepeatedField $kkmbddibiip
     *     @type array<\FOKNLLKICEO>|\Google\Protobuf\Internal\RepeatedField $inpeoidjgil
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .FOKNLLKICEO kkmbddibiip = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKkmbddibiip()
    {
        return $this->kkmbddibiip;
    }

    /**
     * Generated from protobuf field <code>repeated .FOKNLLKICEO kkmbddibiip = 3;</code>
     * @param array<\FOKNLLKICEO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKkmbddibiip($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FOKNLLKICEO::class);
        $this->kkmbddibiip = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .FOKNLLKICEO inpeoidjgil = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInpeoidjgil()
    {
        return $this->inpeoidjgil;
    }

    /**
     * Generated from protobuf field <code>repeated .FOKNLLKICEO inpeoidjgil = 1;</code>
     * @param array<\FOKNLLKICEO>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInpeoidjgil($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \FOKNLLKICEO::class);
        $this->inpeoidjgil = $arr;

        return $this;
    }

}

