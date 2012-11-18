<?php
/**
 * @package bbDKP
 * @link http://www.bbdkp.com
 * @author Sajaki@gmail.com
 * @copyright 2012 bbdkp
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 2.0
 */

namespace bbdkp;

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
	exit;
}
/**
 * 
 */
 class RaidType 
{
	private $dkpsys_name; 
	private $dkpsys_id;
	private $name; 
	private $color; 
	private $imagename; 
	private $value; 
	private $id; 
	private $status; 

	
	/**
	 * instantiates RaidType
	 * 
	 * @param int $id
	 */
	function __construct(int $id) 
	{
		$this->get_RaidType($id); 
	}
	
	/**
	 * builds a new object from database 
	 * @param int $id
	 */
	public function get_RaidType(int $id)
	{
		global $db;
		$sql = 'SELECT b.dkpsys_name, b.dkpsys_id, a.name, a.value, 
					a.id, a.color, a.imagename, a.status
						FROM ' . RAIDTYPE_TABLE . ' a, ' . DKPSYS_TABLE . " b
						WHERE a.id = " . (int) $id . " 
						AND b.dkpsys_id = a.dkpid";
		
		$result = $db->sql_query($sql);
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
		if (!$row)
		{
			trigger_error($user->lang['ERROR_INVALID_RAIDTYPE_PROVIDED']);
		}
		else
		{
			$this->dkpsys_name	 = $row['dkpsys_name'];
			$this->dkpsys_id	 = $row['dkpsys_id'];
			$this->name			 = $row['name'];
			$this->color		 = $row['color'];
			$this->imagename	 = $row['imagename'];
			$this->value		 = $row['value'];
			$this->id			 = $row['id'];
			$this->status		 = $row['status'];
		}
	}
	
	/**
	 * stores a new Raidtype 
	 * 
	 * @param int $this_dkp_id
	 * @param string $name
	 * @param string $imagename
	 * @param string $color
	 * @param float $value
	 */
	public function add_RaidType($dkp_id, $name, $imagename, $color, $value) 
	{
		global $user, $db;
		
		if (strlen($name) < 3)
		{
			trigger_error($user->lang['ERROR_INVALID_RAIDTYPE_PROVIDED'], E_USER_WARNING);
		}
		
		$result = $db->sql_query("SELECT count(*) as count from " . RAIDTYPE_TABLE .
				" WHERE UPPER(name) = '" . strtoupper($db->sql_escape($name))	."' ;");
		$row = $db->sql_fetchrow($result);
		$db->sql_freeresult($result);
			
		if($row['count'] > 0 )
		{
			trigger_error($user->lang['ERROR_RESERVED_RAIDTYPE'], E_USER_WARNING);
		}
		
		$query = $db->sql_build_array('INSERT', array(
				'dkpid'		=> $dkp_id,
				'name'		=> $name,
				'imagename'	=> $imagename,
				'color'		=> $color,
				'value'		=> $value,
				'added_by' 	=> $user->data['username'])
		);
		$db->sql_query('INSERT INTO ' . RAIDTYPE_TABLE . $query);
		
		/* get new key */
		$this->id = $db->sql_nextid();
			
		return $this->id;  
	}
	
	
}

?>