<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>PKFIDPGFEJK</code>
 */
class PKFIDPGFEJK extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .AKPDFLPIKBM docpbfdcehp = 6;</code>
     */
    private $docpbfdcehp;
    /**
     * Generated from protobuf field <code>uint32 group_id = 4;</code>
     */
    protected $group_id = 0;
    /**
     * Generated from protobuf field <code>bool lmkogfbbofb = 9;</code>
     */
    protected $lmkogfbbofb = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\AKPDFLPIKBM>|\Google\Protobuf\Internal\RepeatedField $docpbfdcehp
     *     @type int $group_id
     *     @type bool $lmkogfbbofb
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .AKPDFLPIKBM docpbfdcehp = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocpbfdcehp()
    {
        return $this->docpbfdcehp;
    }

    /**
     * Generated from protobuf field <code>repeated .AKPDFLPIKBM docpbfdcehp = 6;</code>
     * @param array<\AKPDFLPIKBM>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocpbfdcehp($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \AKPDFLPIKBM::class);
        $this->docpbfdcehp = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 4;</code>
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Generated from protobuf field <code>uint32 group_id = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupId($var)
    {
        GPBUtil::checkUint32($var);
        $this->group_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool lmkogfbbofb = 9;</code>
     * @return bool
     */
    public function getLmkogfbbofb()
    {
        return $this->lmkogfbbofb;
    }

    /**
     * Generated from protobuf field <code>bool lmkogfbbofb = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setLmkogfbbofb($var)
    {
        GPBUtil::checkBool($var);
        $this->lmkogfbbofb = $var;

        return $this;
    }

}
