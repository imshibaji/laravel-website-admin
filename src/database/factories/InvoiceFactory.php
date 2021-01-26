<?php

namespace Shibaji\Admin\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Shibaji\Admin\Models\Sale\Invoice;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $statuses = ['draft', 'sent', 'viewed', 'partial', 'paid', 'cancelled'];

        return [
            'business_id' => business()->id,
            'invoice_number' => $this->faker->unique()->numerify('INV-#####'),
            'order_number' => $this->faker->numerify('######'),
            'status' => $this->faker->randomElement($statuses),
            'invoiced_at' => date('Y-m-d', time()),
            'due_at' => date('Y-m-d', time()),
            // 'amount' => $this->faker->numerify('###.##'),
            'currency_code' => 'INR' ?? $this->faker->currencyCode,
            'currency_rate' => 70,
            'category_id' => 1,
            'contact_id' => $this->faker->randomDigit(),
            'contact_name' => $this->faker->name
        ];
    }
}
