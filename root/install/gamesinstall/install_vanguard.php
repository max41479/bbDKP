<?php
/**
 * bbdkp wow install data
 * @package bbDkp-installer
 * @copyright (c) 2009 bbDkp <http://code.google.com/p/bbdkp/>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id$
 * 
 */


/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

function install_vanguard()
{
    global  $db, $table_prefix, $umil, $user;
    
    // class : 
    $db->sql_query('TRUNCATE TABLE ' . $table_prefix . 'bbdkp_classes');
    $sql_ary = array();
    $sql_ary[] = array('class_id' => 0, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Unknown_small');
    $sql_ary[] = array('class_id' => 1, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Bard_small' );
    $sql_ary[] = array('class_id' => 2, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 50 , 'imagename' => 'vanguard_Berserker_small');
    $sql_ary[] = array('class_id' => 3, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Blood_Mage_small' );
    $sql_ary[] = array('class_id' => 4, 'class_armor_type' => 'PLATE' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Cleric_small' );
    $sql_ary[] = array('class_id' => 5, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Disciple_small' );
    $sql_ary[] = array('class_id' => 6, 'class_armor_type' => 'PLATE' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Dread_Knight_small' );
    $sql_ary[] = array('class_id' => 7, 'class_armor_type' => 'LEATHER' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Druid_small' );
    $sql_ary[] = array('class_id' => 8, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Monk_small' );
    $sql_ary[] = array('class_id' => 9, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Necromancer_small' );
    $sql_ary[] = array('class_id' => 10, 'class_armor_type' => 'PLATE' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Paladin_small' );
    $sql_ary[] = array('class_id' => 11, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Psionicist_small' );
    $sql_ary[] = array('class_id' => 12, 'class_armor_type' => 'MAIL' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Ranger_small' );
    $sql_ary[] = array('class_id' => 13, 'class_armor_type' => 'MAIL' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Rogue_small' );
    $sql_ary[] = array('class_id' => 14, 'class_armor_type' => 'CLOTH' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Sorcerer_small' );
    $sql_ary[] = array('class_id' => 15, 'class_armor_type' => 'PLATE' , 'class_min_level' => 1 , 'class_max_level'  => 50, 'imagename' => 'vanguard_Warrior_small' );
    $db->sql_multi_insert( $table_prefix . 'bbdkp_classes', $sql_ary);
   	unset ($sql_ary); 
    
   	// factions
    $db->sql_query('TRUNCATE TABLE ' . $table_prefix . 'bbdkp_factions');
    $sql_ary = array();
    $sql_ary[] = array('faction_id' => 1, 'faction_name' => 'Thestra' );
    $sql_ary[] = array('faction_id' => 2, 'faction_name' => 'Kojan' );
    $sql_ary[] = array('faction_id' => 3, 'faction_name' => 'Qalia' );
    $db->sql_multi_insert( $table_prefix . 'bbdkp_factions', $sql_ary);
    unset ($sql_ary); 
    
    // races
    $db->sql_query('TRUNCATE TABLE ' . $table_prefix . 'bbdkp_races');
    $sql_ary = array();
    $sql_ary[] = array('race_id' => 1, 'race_faction_id' => 1 ); //Thestran Human
    $sql_ary[] = array('race_id' => 2, 'race_faction_id' => 1 ); //Dwarf
    $sql_ary[] = array('race_id' => 3, 'race_faction_id' => 1 ); //Halfling
    $sql_ary[] = array('race_id' => 4, 'race_faction_id' => 1 ); //High Elf
    $sql_ary[] = array('race_id' => 5, 'race_faction_id' => 1 ); ///Vulmane
    $sql_ary[] = array('race_id' => 6, 'race_faction_id' => 1 ); //Varanjar
    $sql_ary[] = array('race_id' => 7, 'race_faction_id' => 1 ); //Lesser Giant
    $sql_ary[] = array('race_id' => 8, 'race_faction_id' => 2 ); //Kojani Human
    $sql_ary[] = array('race_id' => 9, 'race_faction_id' => 2 ); //Wood Elf
    $sql_ary[] = array('race_id' => 10, 'race_faction_id' => 2 ); //Half Elf
    $sql_ary[] = array('race_id' => 11, 'race_faction_id' => 2 ); //Orc
    $sql_ary[] = array('race_id' => 12, 'race_faction_id' => 2 ); //Goblin
    $sql_ary[] = array('race_id' => 13, 'race_faction_id' => 2 ); //Raki
    $sql_ary[] = array('race_id' => 14, 'race_faction_id' => 3 ); //Qaliathar
    $sql_ary[] = array('race_id' => 15, 'race_faction_id' => 3 ); //Gnome
    $sql_ary[] = array('race_id' => 16, 'race_faction_id' => 3 ); //Dark Elf
    $sql_ary[] = array('race_id' => 17, 'race_faction_id' => 3 ); //Kurashasa
    $sql_ary[] = array('race_id' => 18, 'race_faction_id' => 3 ); //Mordebi Human
    $sql_ary[] = array('race_id' => 19, 'race_faction_id' => 3 ); //Varanthari
    $db->sql_multi_insert( $table_prefix . 'bbdkp_races', $sql_ary);

    // dkp system bbeqdkp_dkpsystem 
    $db->sql_query('TRUNCATE TABLE ' . $table_prefix . 'bbdkp_dkpsystem');
	$sql_ary = array();
	$sql_ary[] = array('dkpsys_id' => 1 , 'dkpsys_name' => 'Default' , 'dkpsys_status' => 'Y', 'dkpsys_addedby' =>  'admin' , 'dkpsys_default' =>  'Y' ) ;
	$db->sql_multi_insert( $table_prefix . 'bbdkp_dkpsystem', $sql_ary);
		
	$sql_ary = array ();
	$sql_ary[] = array( 'id' => 1 , 'imagename' =>  'dummyzone' , 'game' =>  'vanguard' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '' ,  'showzone' =>  1);
	$db->sql_multi_insert ( $table_prefix . 'bbdkp_zonetable', $sql_ary );
	unset ( $sql_ary );

	$sql_ary[] = array('id' => 1 ,  'imagename' =>  'dummyboss' , 'game' =>  'vanguard' , 'zoneid' =>  1 , 'type' =>  'npc'  , 'webid' =>  '' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
	$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );

	unset ( $sql_ary );
	$sql_ary[] = array( 'id' => 1 , 'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Dummy Zone' ,  'name_short' =>  'Dummy Zone' );
	$sql_ary[] = array( 'id' => 2 , 'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Dummy Boss' ,  'name_short' =>  'Dummy Boss' );
	$sql_ary[] = array( 'id' => 3 , 'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Unknown' ,  'name_short' =>  'Unknown' );
	$sql_ary[] = array( 'id' => 4 , 'attribute_id' => 2, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Bard' ,  'name_short' =>  'Bard' );
	$sql_ary[] = array( 'id' => 5 , 'attribute_id' => 3, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Berserker' ,  'name_short' =>  'Berserker' );
	$sql_ary[] = array( 'id' => 6 , 'attribute_id' => 4, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Blood Mage' ,  'name_short' =>  'Blood Mage' );
	$sql_ary[] = array( 'id' => 7 , 'attribute_id' => 5, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Cleric' ,  'name_short' =>  'Cleric' );
	$sql_ary[] = array( 'id' => 8 , 'attribute_id' => 6, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Disciple' ,  'name_short' =>  'Disciple' );
	$sql_ary[] = array( 'id' => 9 , 'attribute_id' => 7, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Dread Knight' ,  'name_short' =>  'Dread Knight' );
	$sql_ary[] = array( 'id' => 10 , 'attribute_id' => 8, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Druid' ,  'name_short' =>  'Druid' );
	$sql_ary[] = array( 'id' => 11 , 'attribute_id' => 9, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Monk' ,  'name_short' =>  'Monk' );
	$sql_ary[] = array( 'id' => 12 , 'attribute_id' => 10, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Necromancer' ,  'name_short' =>  'Necromancer' );
	$sql_ary[] = array( 'id' => 13 , 'attribute_id' => 11, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Paladin' ,  'name_short' =>  'Paladin' );
	$sql_ary[] = array( 'id' => 14 , 'attribute_id' => 12, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Psionicist' ,  'name_short' =>  'Psionicist' );
	$sql_ary[] = array( 'id' => 15 , 'attribute_id' => 13, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Ranger' ,  'name_short' =>  'Ranger' );
	$sql_ary[] = array( 'id' => 16 , 'attribute_id' => 14, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Rogue' ,  'name_short' =>  'Rogue' );
	$sql_ary[] = array( 'id' => 17 , 'attribute_id' => 15, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Sorcerer' ,  'name_short' =>  'Sorcerer' );
	$sql_ary[] = array( 'id' => 18 , 'attribute_id' => 16, 'language' =>  'en' , 'attribute' =>  'class' , 'name' =>  'Warrior' ,  'name_short' =>  'Warrior' );
	$sql_ary[] = array( 'id' => 19 , 'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Thestran Human' ,  'name_short' =>  'Thestran Human' );
	$sql_ary[] = array( 'id' => 20 , 'attribute_id' => 2, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Dwarf' ,  'name_short' =>  'Dwarf' );
	$sql_ary[] = array( 'id' => 21 , 'attribute_id' => 3, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Halfling' ,  'name_short' =>  'Halfling' );
	$sql_ary[] = array( 'id' => 22 , 'attribute_id' => 4, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'High Elf' ,  'name_short' =>  'High Elf' );
	$sql_ary[] = array( 'id' => 23 , 'attribute_id' => 5, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Vulmane' ,  'name_short' =>  'Vulmane' );
	$sql_ary[] = array( 'id' => 24 , 'attribute_id' => 6, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Varanjar' ,  'name_short' =>  'Varanjar' );
	$sql_ary[] = array( 'id' => 25 , 'attribute_id' => 7, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Lesser Giant' ,  'name_short' =>  'Lesser Giant' );
	$sql_ary[] = array( 'id' => 26 , 'attribute_id' => 8, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Kojani Human' ,  'name_short' =>  'Kojani Human' );
	$sql_ary[] = array( 'id' => 27 , 'attribute_id' => 9, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Wood Elf' ,  'name_short' =>  'Wood Elf' );
	$sql_ary[] = array( 'id' => 28 , 'attribute_id' => 10, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Half Elf' ,  'name_short' =>  'Half Elf' );
	$sql_ary[] = array( 'id' => 29 , 'attribute_id' => 11, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Orc' ,  'name_short' =>  'Orc' );
	$sql_ary[] = array( 'id' => 30 , 'attribute_id' => 12, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Goblin' ,  'name_short' =>  'Goblin' );
	$sql_ary[] = array( 'id' => 31 , 'attribute_id' => 13, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Raki' ,  'name_short' =>  'Raki' );
	$sql_ary[] = array( 'id' => 32 , 'attribute_id' => 14, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Qaliathar' ,  'name_short' =>  'Qaliathar' );
	$sql_ary[] = array( 'id' => 33 , 'attribute_id' => 15, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Gnome' ,  'name_short' =>  'Gnome' );
	$sql_ary[] = array( 'id' => 34 , 'attribute_id' => 16, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Dark Elf' ,  'name_short' =>  'Dark Elf' );
	$sql_ary[] = array( 'id' => 35 , 'attribute_id' => 17, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Kurashasa' ,  'name_short' =>  'Kurashasa' );
	$sql_ary[] = array( 'id' => 36 , 'attribute_id' => 18, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Mordebi Human' ,  'name_short' =>  'Mordebi Human' );
	$sql_ary[] = array( 'id' => 37 , 'attribute_id' => 19, 'language' =>  'en' , 'attribute' =>  'race' , 'name' =>  'Varanthari' ,  'name_short' =>  'Varanthari' );
	$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
	unset ( $sql_ary );
		
}



?>