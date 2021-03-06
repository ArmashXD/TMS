<?php

namespace App\Models;
// use App\Traits\RecordSignature;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $heading
 * @property string $description
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Task extends Model
{
    // use RecordSignature;
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'heading', 'description', 'status', 'priority_id','created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }
}
