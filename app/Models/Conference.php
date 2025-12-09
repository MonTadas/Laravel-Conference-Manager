<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Urodoz\Truncate\TruncateService;

class Conference extends Model
{
    /** @use HasFactory<\Database\Factories\ConferenceFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'start_dateTime',
        'end_dateTime',
        'content',
        'maxParticipantCount',
    ];

    /**
     * Summary of getSnippetAttribute
     * @return string
     */
    public function getSnippetAttribute(){
        return TruncateService::create()->truncate($this->content, 500);
    }
}
