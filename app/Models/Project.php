<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'title' => 'array',
        'role' => 'array',
        'description' => 'array',
        'problem' => 'array',
        'solution' => 'array',
        'outcome' => 'array',
        'tech_stack' => 'array',
    ];

    /**
     * Get the title for the current locale.
     */
    public function getTitleAttribute($value)
    {
        $locale = app()->getLocale();
        return json_decode($value, true)[$locale] ?? json_decode($value, true)['en'] ?? '';
    }
    
    // Helper to get localized attribute
    public function getLocalized($attribute)
    {
        $data = $this->$attribute;
        // If it's already an array (due to casting), use it directly
        if (is_array($data)) {
            return $data[app()->getLocale()] ?? $data['en'] ?? '';
        }
        // Fallback if not cast
        $decoded = json_decode($data, true);
        return $decoded[app()->getLocale()] ?? $decoded['en'] ?? '';
    }
}
