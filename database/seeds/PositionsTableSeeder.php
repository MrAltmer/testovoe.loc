<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    private $data = [
        'CEO' => 154000,
        'CFO' => 371548,
        'CTO ' => 126000,
        'CIO' => 156135,
        'Office manager' => 47188,
        'Purchasing Managers' => 65361,
        'Designer ' => 43519,
        'Logistics manager ' => 79440
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->positionFormat();
    }

    private function positionFormat()
    {
        foreach ($this->data as $key => $item) {
            \App\Model\Positions::query()->create([
                'position_name' => $key,
                'salary' => $item
            ]);
        }
    }
}
