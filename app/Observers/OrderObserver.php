<?php

namespace App\Observers;

use App\Models\Order;
use Illuminate\Support\Facades\App;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Invoice;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        //
    }

    /**
     * Handle the Order "updated" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {

    }

    /**
     * Handle the Order "deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    public function saving(Order $order)
    {


    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }

    private function postInvoice(Order $order){

        try {
            $facilities = $order->Facilities;
            foreach ($facilities as $facility)
            {
                $subscription = $facility
                    ->pivot
                    ->where('status' , '!=' , 0)
                    ->orWhereNull('status');
                $subscriptionProducts = $subscription->products;
                $offerProducts = $subscription->Offer->products;
                $invoiceItems = array();
                foreach ($subscriptionProducts as $subProduct)
                {
                    foreach ($offerProducts as $offProduct)
                    {
                        if($subProduct->name == $offProduct['name'])
                        {
                            $pricePerUnit = ($offProduct['price'] / $offProduct['quantity'] );
                            $total = $pricePerUnit * $subProduct->quantity;
                            array_push($invoiceItems ,
                                (new InvoiceItem())
                                    ->title($subProduct->name)
                                    ->pricePerUnit($pricePerUnit)
                                    ->quantity($subProduct->quantity)
                                    ->discountByPercent(0)
                                    ->taxByPercent(0)
                                    ->units($subProduct->unit)
                                    ->subTotalPrice($total)
                            );
                        }
                    }
                }

                $supplier = $subscription->offer->supplier;
                $customer = new Buyer([
                    'name'          => $facility->name,
                    'custom_fields' => [
                        'email' => $facility->email,
                    ],
                ]);
                $client = new Party([
                    'name'          => $supplier->name,
                    'phone'         => $supplier->phone_number,
                ]);
                App::setLocale('ar');
                $invoice = new Invoice();
                $invoice = $invoice->filename('OR_' . $order->id .'_OF_' . $subscription->voted_for . '_CL_' . $facility->id )
                    ->buyer($customer)
                    ->seller($client)
                    ->currencyFormat('{VALUE} {SYMBOL}')
                    ->addItems($invoiceItems);
                $invoice->save('public');
                $subscription->update(['invoice' => $invoice->url()]);
            }
        }
        catch (Throwable $exception){
            return response()->json(['message' => $exception->getMessage()] , 500);
        }
        return response()->json(['message' => 'تم حفظ الفاتورة بنجاح']);
    }

}
