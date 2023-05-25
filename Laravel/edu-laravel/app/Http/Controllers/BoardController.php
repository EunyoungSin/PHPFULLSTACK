<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ------------------
        // 쿼리 빌더
        // ------------------
        // select
        $result = DB::select('select * from categories');
        $no = '5';
        $result = DB::select(
            'select * from categories where no = :no' // where no = .$no로 하면 사용은 할 수 있으나 sql 인젝션이 발생함.
            , ['no' => $no]
        );

        // $result = DB::select(
        //     'select * from categories where no = ? and no = ?'
        //     , [$no, 7]
        // );

        $input = ['4', '7', '8']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만)
        
        // $result2 = DB::select(
            // 'SELECT b.bno, b.btitle, c.name
            // FROM categories AS c
            //     INNER JOIN boards AS b
            //         ON c.no = b.category
            //     WHERE c.no IN (?, ?, ?)
            //     ORDER BY b.bno ASC 
            //     LIMIT 5', $input);
        $result2 = DB::select(
            'SELECT b.bno, b.btitle, c.name
            FROM categories AS c, boards AS b
            WHERE c.no = b.category
                    AND c.no IN (?, ?, ?)
                ORDER BY b.bno ASC
                LIMIT 5', $input);

        // 작성일자, 수정일자 디폴트값으로 currenttimestamp를 넣어주면 인서트시 입력할 필요 없음.
        // $result3 = DB::insert(
        //     'INSERT INTO boards
        //         (category, btitle, bcontent, created_at, updated_at)
        //     VALUES(
        //         :category, :btitle, :bcontent, now(), now())' // now()는 라라벨 timezone, NOW()는 DB timezone. now('Asia/Seoul') 하면 한국시간
        //     , [
        //         'category' => '5'
        //         , 'btitle' => '제목'
        //         , 'bcontent' => '내용'
        //     ]
        // );

        // 방금 등록한 게시글의 제목 : test, 내용 : testtest
        // $result4 = DB::update(
            // 'UPDATE boards SET btitle = :btitle, bcontent = :bcontent, updated_at = :updated_at WHERE bno = :bno'
            // , [
            //     'btitle' => 'test'
            //     ,'bcontent' => 'testtest'
            //     ,'updated_at' => now('Asia/Seoul')
            //     ,'bno' => '1000'
            // ]
        // );

        // $result4 = DB::update(
        //     'update boards set btitle = ?, bcontent =? updated_at = now('Asia/Seoul') where bno = ?'
        //     ,['test', 'testtest', 1000]
        // );

        // delete
        // $result5 = DB::delete('DELETE FROM boards');
        $result5 = DB::delete('DELETE FROM boards WHERE bno IN( ?, ? )', [19,20]);
        
        // ---------------------
        // 쿼리 빌더 체이닝 (ORM을 사용하면 기본적으로 체이닝 기법을 사용함.)
        // ---------------------
        $no = '5';
        // $result = DB::table('categories')->where('no', '=', $no)->dd(); // TODO : 삭제 예정. 적고 CTRL+F로 TODO로 찾아서 지우기
        // ->dd(); 내 체이닝이 제대로 이루어져있는지 확인하는 메소드.
        // $result = DB::table('categories')->where('no', '=', $no)->get();
        
        // select * from categories where no = ? or no = ?
        $no1 = '5';
        $no2 = '8';
        // $result = DB::table('categories')->where('no', $no1)->orWhere('no', $no2)->dd(); // 같은 걸 비교할 땐 부등호(=) 생략 가능

        // select * from categories where no in (?, ?)
        // $result = DB::table('categories')->whereIn('no', [$no1, $no2])->get();

        // select * from categories where no in ($no1, $no2)
        // $result = DB::table('categories')->whereNotIn('no', [$no1, $no2])->get();

        // select id, no, name from categories
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')
        //     ->dd();
        
        // select id, no, name from categories order by name desc
        // $result = DB::table('categories')
        //     ->select('id', 'no', 'name')
        //     ->orderBy('name', 'desc')
        //     ->dd();
        
        // select * from categories where no = ? and no = ?
        // $result = DB::table('categories')->where('no', '=', $no1)->where('no', '=', $no2)->get();

        // *** 주의해서 사용(사용 안하는 걸 추천) *** whereRaw(). sql 공격에 취약함!
        // $result = DB::table('categories')->whereRaw('no = '.$no1);

        // first() : Limit 1과 비슷한 작동
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        // firstOrFail() : first() 같은 동작을 하는데, 실패시 결과가 예외 발생(엘로퀀트(=ORM 방식) 모델 객체에서만 사용 가능)
        // $result = Board::orderBy('bno', 'desc')->firstOrFail();

        // 집계 메소드
        // $result = DB::table('boards')->count(); // 결과의 레코드 수를 반환
        // $result = DB::table('boards')->max('bno'); // 해당 컬럼의 최대치를 반환

        // DB::beginTransaction(); // 트랜젝션 시작
        // DB::rollback(); // 롤백
        // DB::commit(); // 커밋


        // 카테고리가 활성화 되어있는 게시글의 카테고리별 갯수를 출력 해주세요.
        // 카테고리 번호, 카테고리명, 갯수
        $result = DB::table('categories as c')
            ->join('boards as b', 'c.no', '=', 'b.category')
            ->select('b.category', 'c.name', DB::raw('COUNT(*) as count'))
            ->where('c.active_flg', '1')
            ->groupBy('b.category', 'c.name') // 라라벨에서 체이닝 기능을 사용할 때는 groubBy를 쓸 때 보드와 카테고리 테이블 두개 다 묶어야함.
            ->get();

        return var_dump($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ///
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
