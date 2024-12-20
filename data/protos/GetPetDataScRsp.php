<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MFCFMLDPJMF (7623)
 *
 * Generated from protobuf message <code>GetPetDataScRsp</code>
 */
class GetPetDataScRsp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     */
    protected $retcode = 0;
    /**
     * Generated from protobuf field <code>uint32 cur_pet_id = 3;</code>
     */
    protected $cur_pet_id = 0;
    /**
     * Generated from protobuf field <code>repeated uint32 pet_id_list = 1;</code>
     */
    private $pet_id_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $retcode
     *     @type int $cur_pet_id
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $pet_id_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @return int
     */
    public function getRetcode()
    {
        return $this->retcode;
    }

    /**
     * Generated from protobuf field <code>uint32 retcode = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setRetcode($var)
    {
        GPBUtil::checkUint32($var);
        $this->retcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_pet_id = 3;</code>
     * @return int
     */
    public function getCurPetId()
    {
        return $this->cur_pet_id;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_pet_id = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCurPetId($var)
    {
        GPBUtil::checkUint32($var);
        $this->cur_pet_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 pet_id_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPetIdList()
    {
        return $this->pet_id_list;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 pet_id_list = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPetIdList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->pet_id_list = $arr;

        return $this;
    }

}
