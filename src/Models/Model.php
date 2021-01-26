<?php

namespace App\Abstracts;


use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class Model extends Eloquent
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $casts = [
        'enabled' => 'boolean',
    ];

    /**
     * Global business relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function business()
    {
        return $this->belongsTo('Shibaji\Admin\Models\Common\Business');
    }

    /**
     * Scope to only include company data.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $business_id
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBusinessId($query, $business_id)
    {
        return $query->where($this->table . '.business_id', '=', $business_id);
    }

    /**
     * Scope to only include active models.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeEnabled($query)
    {
        return $query->where('enabled', 1);
    }

    /**
     * Scope to only include passive models.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDisabled($query)
    {
        return $query->where('enabled', 0);
    }

    /**
     * Scope to only include reconciled models.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeReconciled($query, $value = 1)
    {
        return $query->where('reconciled', $value);
    }

    public function scopeAccount($query, $accounts)
    {
        if (empty($accounts)) {
            return $query;
        }

        return $query->whereIn('account_id', (array) $accounts);
    }

    public function scopeContact($query, $contacts)
    {
        if (empty($contacts)) {
            return $query;
        }

        return $query->whereIn('contact_id', (array) $contacts);
    }
}
