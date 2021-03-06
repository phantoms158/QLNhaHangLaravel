<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/admin', function () {

	return view('admin/index');
});
Route::get('/maindata', 'maincontroller@getalldata');
Route::get('admin/socket', 'SocketController@index');
Route::post('admin/sendmessage', 'SocketController@sendMessage');
Route::get('admin/sendmessage', 'SocketController@sendMessage');

Route::group(['prefix' => 'admin'], function () {
	Route::get('/maindata', 'maincontroller@getalldata');
	Route::group(['prefix' => 'thongke'], function () {
		Route::get('thongkedoanhthu', 'DoanhThuController@getThongKeDoanhThu');
		Route::get('thongkenguyenlieu', 'DoanhThuController@getThongKeNguyenLieu');
		Route::get('thongbao', 'DoanhThuController@getThongBao');
	});

	Route::group(['prefix' => 'quanlyban'], function () {
		Route::get('/', 'BanAnController@getDanhSachBanAn');
		Route::get('getList', 'BanAnController@getList');
		Route::post('thembanan', 'BanAnController@postThemBanAn');
		Route::get('suabanan', 'BanAnController@getSuaBanAn');
		Route::post('suabanan', 'BanAnController@postSuaBanAn');
		Route::get('xoabanan', 'BanAnController@getXoaBanAn');
	});
	Route::group(['prefix' => 'quanlykhachhang'], function () {
		Route::get('/', 'BanAnController@getDanhSachBanAn');
		Route::get('getList', 'BanAnController@getList');
		Route::post('thembanan', 'BanAnController@postThemBanAn');
		Route::get('suabanan', 'BanAnController@getSuaBanAn');
		Route::post('suabanan', 'BanAnController@postSuaBanAn');
		Route::get('xoabanan', 'BanAnController@getXoaBanAn');
	});

	Route::group(['prefix' => 'quanlyloaimonan'], function () {
		Route::get('/', 'LoaiMonAnController@getView');
		Route::get('getList', 'LoaiMonAnController@getList');
		Route::post('themloaimonan', 'LoaiMonAnController@postThemLoaiMonAn');
		Route::get('sualoaimonan/{MaLoai}', 'LoaiMonAnController@getSuaLoaiMonAn');
		Route::post('sualoaimonan/{MaLoai}', 'LoaiMonAnController@postSuaLoaiMonAn');
		Route::get('xoaloaimonan/{MaLoai}', 'LoaiMonAnController@getXoaLoaiMonAn');
	});

	Route::group(['prefix' => 'quanlymonan'], function () {
		Route::get('/', 'MonAnController@getView');
		Route::get('getList', 'MonAnController@getList');
		Route::get('getListLoai/{MaLoai}', 'MonAnController@getListLoai');
		Route::post('themmonan', 'MonAnController@postThemMonAn');
		Route::get('suamonan/{MaMonAn}', 'MonAnController@getSuaMonAn');
		Route::post('suamonan/{MaMonAn}', 'MonAnController@postSuaMonAn');
		Route::get('xoamonan/{MaMonAn}', 'MonAnController@getXoaMonAn');
	});

	Route::group(['prefix' => 'quanlynguyenlieu'], function () {
		Route::get('/', 'NguyenLieuController@getView');
		Route::get('getList', 'NguyenLieuController@getList');
		Route::post('themnguyenlieu', 'NguyenLieuController@postThemNguyenLieu');
		Route::get('suanguyenlieu/{MaNguyenLieu}', 'NguyenLieuController@getSuaNguyenLieu');
		Route::post('suanguyenlieu/{MaNguyenLieu}', 'NguyenLieuController@postSuaNguyenLieu');
		Route::get('xoanguyenlieu/{MaNguyenLieu}', 'NguyenLieuController@getXoaNguyenLieu');
	});
	Route::group(['prefix' => 'quanlykygui'], function () {
		Route::get('/', 'KyGuiController@getView');
		Route::get('getList', 'KyGuiController@getList');
		Route::post('themkygui', 'KyGuiController@postThemKyGui');
		Route::get('suakygui/{MaKyGui}', 'KyGuiController@getSuaKyGui');
		Route::post('suakygui/{MaKyGui}', 'KyGuiController@postSuaKyGui');
		Route::get('xoakygui/{MaKyGui}', 'KyGuiController@getXoaKyGui');
	});
	Route::group(['prefix' => 'khuyenmai'], function () {
		Route::get('danhsachkhuyenmai', 'KhuyenMaiController@getDanhSachKhuyenMai');
		Route::get('themkhuyenmai', 'KhuyenMaiController@getThemKhuyenMai');
		Route::post('themkhuyenmai', 'KhuyenMaiController@postThemKhuyenMai');
		Route::get('suakhuyenmai', 'KhuyenMaiController@getSuaKhuyenMai');
		Route::post('suakhuyenmai', 'KhuyenMaiController@postSuaKhuyenMai');
		Route::get('xoakhuyenmai', 'KhuyenMaiController@getXoaKhuyenMai');
	});
	Route::group(['prefix' => 'quanlyorder'], function () {
		Route::get('danhsachorder', 'OrderController@getDanhSachOrder');
		Route::get('themorder', 'OrderController@getThemOrder');
		Route::post('themorder', 'OrderController@postThemOrder');
		Route::get('suaorder', 'OrderController@getSuaOrder');
		Route::post('suaorder', 'OrderController@postSuaOrder');
		Route::get('xoaorder', 'OrderController@getXoaOrder');
	});
	Route::group(['prefix' => 'quanlynhanvien'], function () {
		Route::get('/', 'NhanVienController@getView');
		Route::get('getList', 'NhanVienController@getList');
		Route::post('themnhanvien', 'NhanVienController@postThemNhanVien');
		Route::get('suanhanvien/{MaNhanVien}', 'NhanVienController@getSuaNhanVien');
		Route::post('suanhanvien/{MaNhanVien}', 'NhanVienController@postSuaNhanVien');
		Route::get('xoanhanvien/{MaNhanVien}', 'NhanVienController@getXoaNhanVien');
	});

});
