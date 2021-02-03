<?php

namespace Mcpuishor\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public function scopeGroup($query, $groupName)
    {
    	return $query->where("group", $groupName);
    }

    public function scopeSection($query, $sectionName)
    {
    	return $query->where("group", "like", "$sectionName.%");
    } 

}
