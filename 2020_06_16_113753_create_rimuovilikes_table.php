<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRimuovilikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("create trigger rimuovilikes
        before DELETE on likes
        for each row
        begin
        update post
             set num_like=num_like-1
            where old.idpost_id=post.id;
         end"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("drop trigger 'rimuovilikes'");
    }
}
