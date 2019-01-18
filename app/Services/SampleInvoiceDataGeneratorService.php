<?php

namespace App\Services;

use App\Models\Client;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Invoice;
use App\Models\InvoiceItem;

class SampleInvoiceDataGeneratorService
{

    public static function getSampleClient() {
        $client = new Client();

        $client->name = 'Sample Client';
        $client->address1 = '10 Main St.';
        $client->city = 'New York';
        $client->state = 'NY';
        $client->postal_code = '10000';
        $client->work_phone = '(212) 555-0000';
        $client->work_email = 'sample@example.com';
        $client->balance = 100;
        $client->vat_number = '';
        $client->id_number = '';

        return $client;
    }

    public static function getSampleInvoice() {
        $invoice = new Invoice();

        $invoice->invoice_number = '0000';
        $invoice->invoice_date = Utils::fromSqlDate(date('Y-m-d'));
        $invoice->amount = $invoice->balance = 100;

        return $invoice;
    }

    public static function getSampleContact() {
        $contact = new Contact();

        $contact->first_name = 'Test';
        $contact->last_name = 'Contact';
        $contact->email = 'contact@gmail.com';

        return $contact;
    }

    public static function getSampleInvoiceItem() {
        $invoiceItem = new InvoiceItem();

        $invoiceItem->cost = 100;
        $invoiceItem->qty = 1;
        $invoiceItem->notes = 'Notes';
        $invoiceItem->product_key = 'Item';
        $invoiceItem->discount = 10;
        $invoiceItem->tax_name1 = 'Tax';
        $invoiceItem->tax_rate1 = 10;

        return $invoiceItem;
    }

    public static function getSampleDocument() {
        $document = new Document();

        $document->base64 = 'data:image/jpeg;base64,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';

        return $document;
    }
}
