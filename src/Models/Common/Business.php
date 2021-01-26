<?php

namespace Shibaji\Admin\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Shibaji\Admin\Models\Banking\Account;
use Shibaji\Admin\Models\Banking\Reconciliation;
use Shibaji\Admin\Models\Banking\Transation;
use Shibaji\Admin\Models\Sale\Invoice;
use Shibaji\Admin\Models\Setting\Country;
use Shibaji\Admin\Models\Setting\Currency;
use Shibaji\Admin\Models\Setting\Location;
use Shibaji\Admin\Models\Setting\PaymentMode;
use Shibaji\Admin\Models\Setting\Tax;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Business extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    // protected $fillable = ['business_name', 'business_type'];

    protected $guarded = [];

    protected $appends = ['cron_command'];

    public function getCronCommandAttribute(){
        return 'artisan schedule:run >> /dev/null 2>&1';
    }

    public function imgUrl(){
        return $this->getFirstMediaUrl('business');
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('business')->singleFile();
    }
    public function deleteFile(): void
    {
        $this->clearMediaCollection('business');
    }

    // Defaults
    public function location(){
        return $this->belongsTo(Location::class, 'default_location_id');
    }
    public function account(){
        return $this->belongsTo(Account::class, 'default_account_id');
    }
    public function currency(){
        return $this->belongsTo(Currency::class, 'default_currency_id');
    }
    public function tax(){
        return $this->belongsTo(Tax::class, 'default_tax_id');
    }
    public function payment_mode(){
        return $this->belongsTo(PaymentMode::class, 'default_payment_mode_id');
    }
    //End Defaults

    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
    public function revenues(){
        return $this->hasMany(Invoice::class);
    }
    public function customers(){
        return Contact::where('type', 'customer')->get();
    }
    public function vendors(){
        return Contact::where('type', 'vendor')->get();
    }
    public function countries(){
        return Country::all();
    }
    public function locations(){
        return $this->hasMany(Location::class);
    }
    public function items(){
        return $this->hasMany(Item::class);
    }
    public function taxes(){
        return $this->hasMany(Tax::class);
    }
    public function contacts(){
        return $this->hasMany(Contact::class);
    }
    public function accounts(){
        return $this->hasMany(Account::class);
    }
    public function currencies(){
        return $this->hasMany(Currency::class);
    }
    public function reconciliations(){
        return $this->hasMany(Reconciliation::class);
    }
    public function transations(){
        return $this->hasMany(Transation::class);
    }
    public function transfers(){
        return $this->hasMany(Transfer::class);
    }
    public function paymentModes(){
        return $this->hasMany(PaymentMode::class);
    }
}
