<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Migration 파일 생성 : php artisan make:migration create_boards_table
    // Migration 실행(모든 Migration 파일의 up()메소드를 실행)  : php artisan migrate
    // Migration 리셋(모든 Migration 파일의 down()메소드를 실행) : php artisan migrate:reset. 테이블을 드랍하여 복구불가.
    // Migration 롤백(가장 마지막에 실행한 migration의 내용을 롤백) : php artisan migrate:rollback

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            // 글번호, 제목, 내용, 작성일, 수정일 삭제일자, 삭제여부
            $table->id('bno'); // big_int, pk, auto_increment
            $table->char('category', 1)->index(); // CHAR(1), DEFAULT '0', NOT NULL, index 추가
            $table->string('btitle', 100); // VARCHAR(100), NOT NULL. 마리아DB의 VARCHAR = 라라벨의 STR
            $table->string('bcontent', 4000); // VARCHAR(4000), NOT NULL
            $table->timestamps(); // created_at, updated_at를 생성, NULL 허용
            $table->timestamp('deleted_at')->nullable();
            $table->char('deleted_flg', 1)->default('0'); // CHAR(1), DEFAULT '0', NOT NULL
            // CHAR > ENUM > INT 순으로 속도가 빠름. 그래서 INT가 아닌 CHAR을 사용. CHAR 타입이라서 ''안에 0을 기입.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
};
