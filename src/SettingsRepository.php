<?php 
namespace Mcpuishor\Settings;
use Mcpuishor\Settings\Setting;

class SettingsRepository {
	private $setting;

	private $group;
	private $name;

	public function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}

	public function getSection($sectionName)
	{
		return $this->setting
				->section($sectionName)
				->get();
	}

	public function getGroup($groupName)
	{
		return $this->setting
				->group($groupName)
				->get();
	}

	public function group($groupName)
	{
		$this->group = $groupName;
		return $this;
	}

	public function get($settingName) : string
	{
		return $this->setting
				->group($this->group)
				->where("name", $settingName)
				->firstOrFail()
				->value;
	}

	public function set($settingName, $value)
	{
		return $this->setting->group($this->group)
					->where("name", $settingName)
					->update([
						"value" => $value
					]);
	}

	public function delete($settingName)
	{
		return $this->setting
				->group($this->group)
				->delete($settingName);
	}

	public static function create($attributeCollections)
	{
		return Setting::create($attributeCollections);
	}

	public static function createMany(array $attributeCollections = array())
	{
	    return array_map('self::create', $attributeCollections);
	}
}