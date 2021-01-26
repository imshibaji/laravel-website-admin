<?php

namespace Shibaji\Admin\Observers;

use Shibaji\Admin\Models\Invoice;

class InvoiceObserver
{
    /**
     * Handle the Invoice "created" event.
     *
     * @param  \Shibaji\Admin\Models\Invoice  $invoice
     * @return void
     */
    public function created(Invoice $invoice)
    {
        //
    }

    /**
     * Handle the Invoice "updated" event.
     *
     * @param  \Shibaji\Admin\Models\Invoice  $invoice
     * @return void
     */
    public function updated(Invoice $invoice)
    {
        //
    }

    /**
     * Handle the Invoice "deleted" event.
     *
     * @param  \Shibaji\Admin\Models\Invoice  $invoice
     * @return void
     */
    public function deleted(Invoice $invoice)
    {
        //
    }

    /**
     * Handle the Invoice "restored" event.
     *
     * @param  \Shibaji\Admin\Models\Invoice  $invoice
     * @return void
     */
    public function restored(Invoice $invoice)
    {
        //
    }

    /**
     * Handle the Invoice "force deleted" event.
     *
     * @param  \Shibaji\Admin\Models\Invoice  $invoice
     * @return void
     */
    public function forceDeleted(Invoice $invoice)
    {
        //
    }
}
