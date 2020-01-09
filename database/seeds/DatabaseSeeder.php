<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name' => 'Uncategoried',
            'parent' => '0'
        ]);

        $cake1 = \App\Models\Category::create([
            'name' => 'Uncategoried',
            'parent' => '0'
        ]);
        \App\Models\Category::create([
            'name' => 'Child1_cake1',
            'parent' => $cake1->id
        ]);
        \App\Models\Category::create([
            'name' => 'Child1_cake2',
            'parent' => $cake1->id
        ]);
        \App\Models\Category::create([
            'name' => 'Child1_cake3',
            'parent' => $cake1->id
        ]);
        $cake2 = \App\Models\Category::create([
            'name' => 'Uncategoried',
            'parent' => '0'
        ]);
        \App\Models\Category::create([
            'name' => 'Child2_cake1',
            'parent' => $cake2->id
        ]);
        \App\Models\Category::create([
            'name' => 'Child2_cake2',
            'parent' => $cake2->id
        ]);
        \App\Models\Category::create([
            'name' => 'Child2_cake3',
            'parent' => $cake2->id
        ]);
    }
}
