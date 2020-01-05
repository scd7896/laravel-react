<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = \App\Article::with('user')->get();
        return view('articles.index', compact('articles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return __METHOD__ . '은 아티클 컬렉션을 추가하기 위한 폼을 담은 뷰를 반환';
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
        return __METHOD__ . '은 아티클 컬렉션을 사용자의 입력한 폼 데이터로 새로운 아티클 생성';
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
        return __METHOD__ . '은 아티클의 기본키를 가지고 그 데이터를 확인합니다'. $id;
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
        return __METHOD__ . '은 아티클 컬렉션을 수정 하기 위한 폼을 담은 뷰를 반환'. $id;
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
        return __METHOD__ . '은 아티클 컬렉션을 수정 하기 위한 메소드를 실행'. $id;
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
        return __METHOD__ . '은 아티클 컬렉션을 삭제하는 메소드'. $id;
    }
}
