<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: StarRail.proto

/**
 * MMPBIENFEPH
 *
 * Protobuf type <code>CmdBattleCollegeType</code>
 */
class CmdBattleCollegeType
{
    /**
     * Generated from protobuf enum <code>CmdBattleCollegeTypeNone = 0;</code>
     */
    const CmdBattleCollegeTypeNone = 0;
    /**
     * Generated from protobuf enum <code>CmdBattleCollegeDataChangeScNotify = 5784;</code>
     */
    const CmdBattleCollegeDataChangeScNotify = 5784;
    /**
     * Generated from protobuf enum <code>CmdStartBattleCollegeCsReq = 5727;</code>
     */
    const CmdStartBattleCollegeCsReq = 5727;
    /**
     * Generated from protobuf enum <code>CmdGetBattleCollegeDataCsReq = 5736;</code>
     */
    const CmdGetBattleCollegeDataCsReq = 5736;
    /**
     * Generated from protobuf enum <code>CmdGetBattleCollegeDataScRsp = 5795;</code>
     */
    const CmdGetBattleCollegeDataScRsp = 5795;
    /**
     * Generated from protobuf enum <code>CmdStartBattleCollegeScRsp = 5767;</code>
     */
    const CmdStartBattleCollegeScRsp = 5767;

    private static $valueToName = [
        self::CmdBattleCollegeTypeNone => 'CmdBattleCollegeTypeNone',
        self::CmdBattleCollegeDataChangeScNotify => 'CmdBattleCollegeDataChangeScNotify',
        self::CmdStartBattleCollegeCsReq => 'CmdStartBattleCollegeCsReq',
        self::CmdGetBattleCollegeDataCsReq => 'CmdGetBattleCollegeDataCsReq',
        self::CmdGetBattleCollegeDataScRsp => 'CmdGetBattleCollegeDataScRsp',
        self::CmdStartBattleCollegeScRsp => 'CmdStartBattleCollegeScRsp',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

