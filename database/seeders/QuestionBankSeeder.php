<?php

namespace Database\Seeders;

use App\Models\questionBank;
use Illuminate\Database\Seeder;

class QuestionBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        questionBank::create(["question"=>"How many days do we have in a week?","answer"=>"7","level"=>"1"]);
        questionBank::create(["question"=>"How many colors do we have in a rainbow?","answer"=>"7","level"=>"1"]);
        questionBank::create(["question"=>"How many letters do we have in English alphabet?","answer"=>"26","level"=>"1"]);

        questionBank::create(["question"=>"How many days do we have in a week?","answer"=>"7","level"=>"2"]);
        questionBank::create(["question"=>"How many colors do we have in a rainbow?","answer"=>"7","level"=>"2"]);
        questionBank::create(["question"=>"How many letters do we have in English alphabet?","answer"=>"26","level"=>"2"]);

    }
}
