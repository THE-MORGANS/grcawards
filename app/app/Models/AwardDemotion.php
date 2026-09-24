<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardDemotion extends Model
{
    use HasFactory;

    protected $table = 'award_demotions';

    protected $fillable = ['award_id', 'nominee_id', 'reason', 'admin_id'];

    public function award()
    {
        return $this->belongsTo(Award::class, 'award_id');
    }

    public function nominee()
    {
        return $this->belongsTo(Nominee::class, 'nominee_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
