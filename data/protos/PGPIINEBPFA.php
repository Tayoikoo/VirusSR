<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PGPIINEBPFA</code>
 */
class PGPIINEBPFA extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .OJGLGPGDEPN CLCGIOHDGOH = 1;</code>
     */
    private $CLCGIOHDGOH;
    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     */
    protected $retcode = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\OJGLGPGDEPN>|\Google\Protobuf\Internal\RepeatedField $CLCGIOHDGOH
     *     @type int $retcode
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .OJGLGPGDEPN CLCGIOHDGOH = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCLCGIOHDGOH()
    {
        return $this->CLCGIOHDGOH;
    }

    /**
     * Generated from protobuf field <code>repeated .OJGLGPGDEPN CLCGIOHDGOH = 1;</code>
     * @param array<\OJGLGPGDEPN>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCLCGIOHDGOH($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OJGLGPGDEPN::class);
        $this->CLCGIOHDGOH = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

}
