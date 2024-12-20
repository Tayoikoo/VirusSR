<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * EMMGLJEHEFA (636)
 *
 * Generated from protobuf message <code>PlayerSyncScNotify</code>
 */
class PlayerSyncScNotify extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 total_achievement_exp = 1884;</code>
     */
    protected $total_achievement_exp = 0;
    /**
     * Generated from protobuf field <code>.MissionEventSync mission_event_sync = 4;</code>
     */
    protected $mission_event_sync = null;
    /**
     * Generated from protobuf field <code>.PlayerBoardModuleSync playerboard_module_sync = 1345;</code>
     */
    protected $playerboard_module_sync = null;
    /**
     * Generated from protobuf field <code>repeated .WaitDelResource wait_del_resource_list = 1;</code>
     */
    private $wait_del_resource_list;
    /**
     * Generated from protobuf field <code>.MissionSync mission_sync = 15;</code>
     */
    protected $mission_sync = null;
    /**
     * Generated from protobuf field <code>repeated .Quest quest_list = 2;</code>
     */
    private $quest_list;
    /**
     * Generated from protobuf field <code>.BasicModuleSync basic_module_sync = 12;</code>
     */
    protected $basic_module_sync = null;
    /**
     * Generated from protobuf field <code>repeated .Relic relic_list = 8;</code>
     */
    private $relic_list;
    /**
     * Generated from protobuf field <code>repeated .OHELKHBEJKD pkolhmanhgc = 925;</code>
     */
    private $pkolhmanhgc;
    /**
     * Generated from protobuf field <code>repeated .Material material_list = 6;</code>
     */
    private $material_list;
    /**
     * Generated from protobuf field <code>repeated uint32 pepifccpcck = 964;</code>
     */
    private $pepifccpcck;
    /**
     * Generated from protobuf field <code>repeated .Material bplaencojnn = 276;</code>
     */
    private $bplaencojnn;
    /**
     * Generated from protobuf field <code>.PlayerBasicInfo basic_info = 13;</code>
     */
    protected $basic_info = null;
    /**
     * Generated from protobuf field <code>.ONHBBEPDFNH fmdddbenglk = 1335;</code>
     */
    protected $fmdddbenglk = null;
    /**
     * Generated from protobuf field <code>.AvatarSync avatar_sync = 14;</code>
     */
    protected $avatar_sync = null;
    /**
     * Generated from protobuf field <code>repeated uint32 molahmdfelj = 5;</code>
     */
    private $molahmdfelj;
    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarInfo multi_path_avatar_info_list = 1403;</code>
     */
    private $multi_path_avatar_info_list;
    /**
     * Generated from protobuf field <code>.CHAJMFIJFAH mkecdpdbjln = 562;</code>
     */
    protected $mkecdpdbjln = null;
    /**
     * Generated from protobuf field <code>.ItemList pijojmkggfm = 370;</code>
     */
    protected $pijojmkggfm = null;
    /**
     * Generated from protobuf field <code>repeated uint32 idkihljccmc = 7;</code>
     */
    private $idkihljccmc;
    /**
     * Generated from protobuf field <code>repeated .Equipment equipment_list = 10;</code>
     */
    private $equipment_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_achievement_exp
     *     @type \MissionEventSync $mission_event_sync
     *     @type \PlayerBoardModuleSync $playerboard_module_sync
     *     @type array<\WaitDelResource>|\Google\Protobuf\Internal\RepeatedField $wait_del_resource_list
     *     @type \MissionSync $mission_sync
     *     @type array<\Quest>|\Google\Protobuf\Internal\RepeatedField $quest_list
     *     @type \BasicModuleSync $basic_module_sync
     *     @type array<\Relic>|\Google\Protobuf\Internal\RepeatedField $relic_list
     *     @type array<\OHELKHBEJKD>|\Google\Protobuf\Internal\RepeatedField $pkolhmanhgc
     *     @type array<\Material>|\Google\Protobuf\Internal\RepeatedField $material_list
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $pepifccpcck
     *     @type array<\Material>|\Google\Protobuf\Internal\RepeatedField $bplaencojnn
     *     @type \PlayerBasicInfo $basic_info
     *     @type \ONHBBEPDFNH $fmdddbenglk
     *     @type \AvatarSync $avatar_sync
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $molahmdfelj
     *     @type array<\MultiPathAvatarInfo>|\Google\Protobuf\Internal\RepeatedField $multi_path_avatar_info_list
     *     @type \CHAJMFIJFAH $mkecdpdbjln
     *     @type \ItemList $pijojmkggfm
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $idkihljccmc
     *     @type array<\Equipment>|\Google\Protobuf\Internal\RepeatedField $equipment_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\StarRail::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 total_achievement_exp = 1884;</code>
     * @return int
     */
    public function getTotalAchievementExp()
    {
        return $this->total_achievement_exp;
    }

    /**
     * Generated from protobuf field <code>uint32 total_achievement_exp = 1884;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalAchievementExp($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_achievement_exp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MissionEventSync mission_event_sync = 4;</code>
     * @return \MissionEventSync|null
     */
    public function getMissionEventSync()
    {
        return $this->mission_event_sync;
    }

    public function hasMissionEventSync()
    {
        return isset($this->mission_event_sync);
    }

    public function clearMissionEventSync()
    {
        unset($this->mission_event_sync);
    }

    /**
     * Generated from protobuf field <code>.MissionEventSync mission_event_sync = 4;</code>
     * @param \MissionEventSync $var
     * @return $this
     */
    public function setMissionEventSync($var)
    {
        GPBUtil::checkMessage($var, \MissionEventSync::class);
        $this->mission_event_sync = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PlayerBoardModuleSync playerboard_module_sync = 1345;</code>
     * @return \PlayerBoardModuleSync|null
     */
    public function getPlayerboardModuleSync()
    {
        return $this->playerboard_module_sync;
    }

    public function hasPlayerboardModuleSync()
    {
        return isset($this->playerboard_module_sync);
    }

    public function clearPlayerboardModuleSync()
    {
        unset($this->playerboard_module_sync);
    }

    /**
     * Generated from protobuf field <code>.PlayerBoardModuleSync playerboard_module_sync = 1345;</code>
     * @param \PlayerBoardModuleSync $var
     * @return $this
     */
    public function setPlayerboardModuleSync($var)
    {
        GPBUtil::checkMessage($var, \PlayerBoardModuleSync::class);
        $this->playerboard_module_sync = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .WaitDelResource wait_del_resource_list = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWaitDelResourceList()
    {
        return $this->wait_del_resource_list;
    }

    /**
     * Generated from protobuf field <code>repeated .WaitDelResource wait_del_resource_list = 1;</code>
     * @param array<\WaitDelResource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWaitDelResourceList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \WaitDelResource::class);
        $this->wait_del_resource_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.MissionSync mission_sync = 15;</code>
     * @return \MissionSync|null
     */
    public function getMissionSync()
    {
        return $this->mission_sync;
    }

    public function hasMissionSync()
    {
        return isset($this->mission_sync);
    }

    public function clearMissionSync()
    {
        unset($this->mission_sync);
    }

    /**
     * Generated from protobuf field <code>.MissionSync mission_sync = 15;</code>
     * @param \MissionSync $var
     * @return $this
     */
    public function setMissionSync($var)
    {
        GPBUtil::checkMessage($var, \MissionSync::class);
        $this->mission_sync = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Quest quest_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuestList()
    {
        return $this->quest_list;
    }

    /**
     * Generated from protobuf field <code>repeated .Quest quest_list = 2;</code>
     * @param array<\Quest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuestList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Quest::class);
        $this->quest_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.BasicModuleSync basic_module_sync = 12;</code>
     * @return \BasicModuleSync|null
     */
    public function getBasicModuleSync()
    {
        return $this->basic_module_sync;
    }

    public function hasBasicModuleSync()
    {
        return isset($this->basic_module_sync);
    }

    public function clearBasicModuleSync()
    {
        unset($this->basic_module_sync);
    }

    /**
     * Generated from protobuf field <code>.BasicModuleSync basic_module_sync = 12;</code>
     * @param \BasicModuleSync $var
     * @return $this
     */
    public function setBasicModuleSync($var)
    {
        GPBUtil::checkMessage($var, \BasicModuleSync::class);
        $this->basic_module_sync = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Relic relic_list = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRelicList()
    {
        return $this->relic_list;
    }

    /**
     * Generated from protobuf field <code>repeated .Relic relic_list = 8;</code>
     * @param array<\Relic>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRelicList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Relic::class);
        $this->relic_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .OHELKHBEJKD pkolhmanhgc = 925;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPkolhmanhgc()
    {
        return $this->pkolhmanhgc;
    }

    /**
     * Generated from protobuf field <code>repeated .OHELKHBEJKD pkolhmanhgc = 925;</code>
     * @param array<\OHELKHBEJKD>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPkolhmanhgc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \OHELKHBEJKD::class);
        $this->pkolhmanhgc = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Material material_list = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMaterialList()
    {
        return $this->material_list;
    }

    /**
     * Generated from protobuf field <code>repeated .Material material_list = 6;</code>
     * @param array<\Material>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMaterialList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Material::class);
        $this->material_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 pepifccpcck = 964;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPepifccpcck()
    {
        return $this->pepifccpcck;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 pepifccpcck = 964;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPepifccpcck($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->pepifccpcck = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Material bplaencojnn = 276;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBplaencojnn()
    {
        return $this->bplaencojnn;
    }

    /**
     * Generated from protobuf field <code>repeated .Material bplaencojnn = 276;</code>
     * @param array<\Material>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBplaencojnn($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Material::class);
        $this->bplaencojnn = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PlayerBasicInfo basic_info = 13;</code>
     * @return \PlayerBasicInfo|null
     */
    public function getBasicInfo()
    {
        return $this->basic_info;
    }

    public function hasBasicInfo()
    {
        return isset($this->basic_info);
    }

    public function clearBasicInfo()
    {
        unset($this->basic_info);
    }

    /**
     * Generated from protobuf field <code>.PlayerBasicInfo basic_info = 13;</code>
     * @param \PlayerBasicInfo $var
     * @return $this
     */
    public function setBasicInfo($var)
    {
        GPBUtil::checkMessage($var, \PlayerBasicInfo::class);
        $this->basic_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ONHBBEPDFNH fmdddbenglk = 1335;</code>
     * @return \ONHBBEPDFNH|null
     */
    public function getFmdddbenglk()
    {
        return $this->fmdddbenglk;
    }

    public function hasFmdddbenglk()
    {
        return isset($this->fmdddbenglk);
    }

    public function clearFmdddbenglk()
    {
        unset($this->fmdddbenglk);
    }

    /**
     * Generated from protobuf field <code>.ONHBBEPDFNH fmdddbenglk = 1335;</code>
     * @param \ONHBBEPDFNH $var
     * @return $this
     */
    public function setFmdddbenglk($var)
    {
        GPBUtil::checkMessage($var, \ONHBBEPDFNH::class);
        $this->fmdddbenglk = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.AvatarSync avatar_sync = 14;</code>
     * @return \AvatarSync|null
     */
    public function getAvatarSync()
    {
        return $this->avatar_sync;
    }

    public function hasAvatarSync()
    {
        return isset($this->avatar_sync);
    }

    public function clearAvatarSync()
    {
        unset($this->avatar_sync);
    }

    /**
     * Generated from protobuf field <code>.AvatarSync avatar_sync = 14;</code>
     * @param \AvatarSync $var
     * @return $this
     */
    public function setAvatarSync($var)
    {
        GPBUtil::checkMessage($var, \AvatarSync::class);
        $this->avatar_sync = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 molahmdfelj = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMolahmdfelj()
    {
        return $this->molahmdfelj;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 molahmdfelj = 5;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMolahmdfelj($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->molahmdfelj = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarInfo multi_path_avatar_info_list = 1403;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMultiPathAvatarInfoList()
    {
        return $this->multi_path_avatar_info_list;
    }

    /**
     * Generated from protobuf field <code>repeated .MultiPathAvatarInfo multi_path_avatar_info_list = 1403;</code>
     * @param array<\MultiPathAvatarInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMultiPathAvatarInfoList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \MultiPathAvatarInfo::class);
        $this->multi_path_avatar_info_list = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CHAJMFIJFAH mkecdpdbjln = 562;</code>
     * @return \CHAJMFIJFAH|null
     */
    public function getMkecdpdbjln()
    {
        return $this->mkecdpdbjln;
    }

    public function hasMkecdpdbjln()
    {
        return isset($this->mkecdpdbjln);
    }

    public function clearMkecdpdbjln()
    {
        unset($this->mkecdpdbjln);
    }

    /**
     * Generated from protobuf field <code>.CHAJMFIJFAH mkecdpdbjln = 562;</code>
     * @param \CHAJMFIJFAH $var
     * @return $this
     */
    public function setMkecdpdbjln($var)
    {
        GPBUtil::checkMessage($var, \CHAJMFIJFAH::class);
        $this->mkecdpdbjln = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ItemList pijojmkggfm = 370;</code>
     * @return \ItemList|null
     */
    public function getPijojmkggfm()
    {
        return $this->pijojmkggfm;
    }

    public function hasPijojmkggfm()
    {
        return isset($this->pijojmkggfm);
    }

    public function clearPijojmkggfm()
    {
        unset($this->pijojmkggfm);
    }

    /**
     * Generated from protobuf field <code>.ItemList pijojmkggfm = 370;</code>
     * @param \ItemList $var
     * @return $this
     */
    public function setPijojmkggfm($var)
    {
        GPBUtil::checkMessage($var, \ItemList::class);
        $this->pijojmkggfm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 idkihljccmc = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdkihljccmc()
    {
        return $this->idkihljccmc;
    }

    /**
     * Generated from protobuf field <code>repeated uint32 idkihljccmc = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdkihljccmc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->idkihljccmc = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Equipment equipment_list = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEquipmentList()
    {
        return $this->equipment_list;
    }

    /**
     * Generated from protobuf field <code>repeated .Equipment equipment_list = 10;</code>
     * @param array<\Equipment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEquipmentList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Equipment::class);
        $this->equipment_list = $arr;

        return $this;
    }

}
