<?php

namespace App\Controllers;
use App\Models\M_belajar;
use TCPDF;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function login()
	{
		return view('pages-login');
		echo view('header');
		echo view('footer');
	}

	public function aksi_login()
	{
		$a=$this->request->getPost('email');
		$b=$this->request->getPost('level');
		$Joyce = new M_belajar;
		$data = array (
			'username' => $a,
			'level' => $b,
		);

		$cek = $Joyce->getWhere('user', $data);

		if ($cek != null) {
			session()->set('id', $cek->id_user);
			session()->set('username', $cek->username);
			session()->set('level', $cek->level);

			return redirect()->to('home/dashboard');
		}else{
			return redirect()->to('home/login');
		}
	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('home/login');
	}

	public function dashboard()
	{	
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {

			echo view('header');
			echo view('menu');
			echo view('dashboard');
			echo view('footer');

		}else{
			return redirect()->to('home');
		}
	}

	public function user()
	{
		if (session()->get('level')==1) {

			$Joyce = new M_belajar;
			$where = ('id_user');
			$wendy['ngok']=$Joyce->tampil('user', $where);
			echo view('header');
			echo view('menu');
			echo view('user', $wendy);
			echo view('footer');

		}else if (session()->get('level')>0){
			return redirect()->to('home/error');
		}else{
			return redirect()->to('home');
		}
	}

	// public function hapus_user($id)
	// {
	// 	$Joyce = new M_belajar;
	// 	$wece = array('id_user' => $id );
	// 	$wendy['ngok']=$Joyce->hapus('user', $wece);
	// 	return redirect()->to('home/user');
	// }

	// public function edit_user($id)
	// {
	// 	$Joyce = new M_belajar;
	// 	$wece = array('id_user' => $id );
	// 	$wendy['ngok']=$Joyce->getWhere('user', $wece); 
	// 	echo view('header');
	// 	echo view('menu');
	// 	echo view('editu', $wendy);
	// 	echo view('footer');
	// }

	public function reset_user ($id)
	{
		$Joyce = new M_belajar;
		$wece = array('id_user' => $id);
		$data = array(
			"password"=>MD5('1111'),
		);

		$Joyce->edit('user', $data, $wece);
		return redirect()->to('home/user');
	}

	// public function simpan_user()
	// {
	// 	$Joyce = new M_belajar;
	// 	$a=$this->request->getPost('nama');
	// 	$b=$this->request->getPost('usn');
	// 	$c=$this->request->getPost('pw');
	// 	$d=$this->request->getPost('level');
	// 	$id=$this->request->getPost('id');
	// 	$Joyce = new M_belajar;
	// 	$wece = array('id_user' => $id );
	// 	$data = array(
	// 		"nama_user"=>$a,
	// 		"username"=>$b,
	// 		"password"=> MD5($c),
	// 		"level"=>$d,
	// 	);
		
	// 	$Joyce->edit('user', $data, $wece);
	// 	return redirect ()->to('home/user');
	// }

	// public function tambah_user()
	// {
	// 	$Joyce = new M_belajar;
	// 	$where = ('id_user');
	// 	$wendy['ngok']=$Joyce->tampil('user', $where);
	// 	echo view('header');
	// 	echo view('menu');
	// 	echo view('tuser', $wendy);
	// 	echo view('footer');
	// }

	// public function simpan_u()
	// {
	// 	$a=$this->request->getPost('nama');
	// 	$b=$this->request->getPost('usn');
	// 	$c=$this->request->getPost('pw');
	// 	$d=$this->request->getPost('level');
	// 	$data = array(
	// 		"nama_user"=>$a,
	// 		"username"=>$b,
	// 		"password"=> MD5($c),
	// 		"level"=>$d,
	// 	);
		
	// 	$Joyce = new M_belajar;
	// 	$Joyce->input('user', $data);
	// 	return redirect ()->to('home/user');
	// }

	public function costumer()
	{
		if (session()->get('level')==1 || session()->get('level')==2) {

			$Joyce = new M_belajar;
			$wendy['ngok']=$Joyce->getCostumer();
			echo view('header');
			echo view('menu');
			echo view('costumer', $wendy);
			echo view('footer');

		}else if (session()->get('level')>0){
			return redirect()->to('home/error');
		}else{
			return redirect()->to('home');
		}
	}

	public function hapus_costumer($id)
	{
		$Joyce = new M_belajar;
		$wece = array('id_user' => $id );
		$Joyce->hapus('costumer', $wece);
		$Joyce->hapus('user', $wece);
		return redirect()->to('home/costumer');
	}

	public function edit_costumer($id)
	{
		$Joyce= new M_belajar;
		$wece = array('costumer.id_user' => $id );
		$wendy['ngok']=$Joyce->joinw('costumer', 'user', 'costumer.id_user = user.id_user', $wece);
		echo view('header');
		echo view('menu');
		echo view('editc', $wendy); 
		echo view('footer');
	}

	public function simpan_costumer()
	{
		$model = new M_belajar();
		$where = array('id_user' => $this->request->getPost('idu') );
		$data = array(
			'username' =>$this->request->getPost('usn'),
			'password' =>$this->request->getPost('pw'),
			'level' =>$this->request->getPost('level'),
		);

		$model->edit('user', $data, $where);
		$where = array("username" => $this->request->getPost('usn'));
		$wendy = $model->getWhere('user', $where); 

		$Joyce = array('id_costumer' => $this->request->getPost('idc'));
		$data2 = array(
			'id_user' => $wendy->id_user,
			'nama_costumer'=>$this->request->getPost('nama'),
			'tempat_lahir'=> $this->request->getPost('tempat'),
			'tanggal_lahir'=> $this->request->getPost('tanggal'),
			'jenis_kelamin'=> $this->request->getPost('jenis'),
			'alamat'=> $this->request->getPost('alamat'),
			'no_hp'=> $this->request->getPost('no'),
		);

		$model->edit('costumer', $data2, $Joyce);
		return redirect()->to('/home/costumer');
	}

	public function tambah_costumer()
	{
		$Joyce = new M_belajar;
		$where = ('id_user');
		$wendy['ngok']=$Joyce->tampil('user', $where);
		echo view('header');
		echo view('menu');
		echo view('tcostumer', $wendy);
		echo view('footer');
	}

	public function simpan_c()
	{
		$a=$this->request->getPost('nama');
		$b=$this->request->getPost('tempat');
		$c=$this->request->getPost('tanggal');
		$d=$this->request->getPost('jenis');
		$e=$this->request->getPost('alamat');
		$f=$this->request->getPost('no');
		$g=$this->request->getPost('usn');
		$h=$this->request->getPost('pw');
		$i=$this->request->getPost('level');
		$Joyce = new M_belajar();
		$data = array(
			"username"=>$g,
			"password"=> MD5($h),
			"level"=>$i,
		);

		$Joyce->input('user', $data);
		$where = array(
			"username"=>$g,
		);

		$wendy = $Joyce->getWhere('user', $where);

		$data2 = array(
			"id_user"=>$wendy->id_user,
			"nama_costumer"=>$a,
			"tempat_lahir"=>$b,
			"tanggal_lahir"=>$c,
			"jenis_kelamin"=>$d,
			"alamat"=>$e,
			"no_hp"=>$f,
		);

		$Joyce->input('costumer', $data2);
		return redirect ()->to('home/costumer');
	}

	public function penjoki()
	{
		if (session()->get('level')==1 || session()->get('level')==2) {

			$Joyce = new M_belajar;
			$wendy['ngok']=$Joyce->getPenjoki();
			echo view('header');
			echo view('menu');
			echo view('penjoki', $wendy);
			echo view('footer');

		}else if (session()->get('level')>0){
			return redirect()->to('home/error');
		}else{
			return redirect()->to('home');
		}
	}

	public function hapus_penjoki($id)
	{
		$Joyce = new M_belajar;
		$wece = array('id_user' => $id );
		$Joyce->hapus('penjoki', $wece);
		$Joyce->hapus('user', $wece);
		return redirect()->to('home/penjoki');
	}

	public function edit_penjoki($id)
	{
		$Joyce= new M_belajar;
		$wece = array('penjoki.id_user' => $id );
		$wendy['ngok']=$Joyce->joinw('penjoki', 'user', 'penjoki.id_user = user.id_user', $wece);
		echo view('header');
		echo view('menu');
		echo view('editp', $wendy); 
		echo view('footer');
	}

	public function simpan_penjoki()
	{
		$model = new M_belajar();
		$where = array('id_user' => $this->request->getPost('idu') );
		$data = array(
			'username' =>$this->request->getPost('usn'),
			'password' =>$this->request->getPost('pw'),
			'level' =>$this->request->getPost('level'),
		);

		$model->edit('user', $data, $where);
		$where = array("username" => $this->request->getPost('usn'));
		$wendy = $model->getWhere('user', $where); 

		$Joyce = array('id_penjoki' => $this->request->getPost('idp'));
		$data2 = array(
			'id_user' => $wendy->id_user,
			'nama_penjoki'=>$this->request->getPost('nama'),
			'game_yg_dikuasai'=> $this->request->getPost('game'),
			'peringkat_yg_dikuasai'=> $this->request->getPost('peringkat'),
			'status_ketersediaan'=> $this->request->getPost('status'),
		);

		$model->edit('penjoki', $data2, $Joyce);
		return redirect()->to('/home/penjoki');
	}

	public function tambah_penjoki()
	{
		$Joyce = new M_belajar;
		$where = ('id_user');
		$wendy['ngok']=$Joyce->tampil('user', $where);
		echo view('header');
		echo view('menu');
		echo view('tpenjoki', $wendy);
		echo view('footer');
	}

	public function simpan_p()
	{
		$a=$this->request->getPost('nama');
		$b=$this->request->getPost('game');
		$c=$this->request->getPost('peringkat');
		$d=$this->request->getPost('status');
		$e=$this->request->getPost('usn');
		$f=$this->request->getPost('pw');
		$g=$this->request->getPost('level');
		$Joyce = new M_belajar();
		$data = array(
			"username"=>$e,
			"password"=>$f,
			"level"=>$g,
		);

		$Joyce->input('user', $data);
		$where = array(
			"username"=>$e,
		);

		$wendy = $Joyce->getWhere('user', $where);

		$data2 = array(
			"id_user"=>$wendy->id_user,
			"nama_penjoki"=>$a,
			"game_yg_dikuasai"=>$b,
			"peringkat_yg_dikuasai"=>$c,
			"status_ketersediaan"=>$d,
		);

		$Joyce->input('penjoki', $data2);
		return redirect ()->to('home/penjoki');
	}

	public function fiturchat()
	{
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {

			$Joyce = new M_belajar;
			$where = ('id_fiturchat');
			$wendy['ngok']=$Joyce->tampil('fitur_chat', $where);
			echo view('header');
			echo view('menu');
			echo view('fiturchat', $wendy);
			echo view('footer');

		}else if (session()->get('level')>0){
			return redirect()->to('home/error');
		}else{
			return redirect()->to('home');
		}
	}

	public function hapus_fiturchat($id)
	{
		$Joyce = new M_belajar;
		$wece = array('id_fiturchat' => $id );
		$wendy['ngok']=$Joyce->hapus('fitur_chat', $wece);
		return redirect()->to('home/fiturchat');
	}

	public function edit_fiturchat($id)
	{
		$Joyce = new M_belajar;
		$wece = array('id_fiturchat' => $id );
		$wendy['ngok']=$Joyce->getWhere('fitur_chat', $wece); 
		echo view('header');
		echo view('menu');
		echo view('editfc', $wendy);
		echo view('footer');
	}

	public function simpan_fiturchat()
	{
		$Joyce = new M_belajar;
		$a=$this->request->getPost('sender');
		$b=$this->request->getPost('isi');
		$c=$this->request->getPost('time');
		$id=$this->request->getPost('id');
		$Joyce = new M_belajar;
		$wece = array('id_fiturchat' => $id );
		$data = array(
			"sender_role"=>$a,
			"isi_pesan"=>$b,
			"timestamp"=>date('y-m-d h-m-s'),
		);
		
		$Joyce->edit('fitur_chat', $data, $wece);
		return redirect ()->to('home/fiturchat');
	}

	public function tambah_fiturchat()
	{
		$Joyce = new M_belajar;
		$where = ('id_fiturchat');
		$wendy['ngok']=$Joyce->tampil('fitur_chat', $where);
		echo view('header');
		echo view('menu');
		echo view('tfiturchat', $wendy);
		echo view('footer');
	}

	public function simpan_fc()
	{
		$a=$this->request->getPost('sender');
		$b=$this->request->getPost('isi');
		$c=$this->request->getPost('time');
		$data = array(
			"sender_role"=>$a,
			"isi_pesan"=>$b,
			"timestamp"=>date('y-m-d h-m-s'),
		);
		
		$Joyce = new M_belajar;
		$Joyce->input('fitur_chat', $data);
		return redirect ()->to('home/fiturchat');
	}

	public function order()
	{
		if (session()->get('level') == 1 || session()->get('level') == 2) {

        	$Joyce = new M_belajar;
			$wendy['ngok']=$Joyce->join2('order', 'costumer', 'penjoki', 'order.id_costumer=costumer.id_costumer', 'order.id_penjoki=penjoki.id_penjoki');
			echo view('header');
			echo view('menu');
			echo view('order', $wendy);
			echo view('footer');

        } else if (session()->get('level')>0) {
            return redirect()->to('home/error');
        } else {
            return redirect()->to('home');
        }
	}

	public function hapus_order($id)
	{
		$Joyce = new M_belajar;
		$wece = array('id_order' => $id );
		$wendy['ngok']=$Joyce->hapus('order', $wece);
		return redirect()->to('home/order');
	}

	public function edit_order($id)
	{
		$Joyce= new M_belajar;
		$wece = array('order.id_costumer' => $id );
		$wendy['ngok']=$Joyce->joinw('order', 'costumer', 'order.id_costumer=costumer.id_costumer', $wece);
		echo view('header');
		echo view('menu');
		echo view('edito', $wendy); 
		echo view('footer');
	}

	public function simpan_order()
	{
		$model = new M_belajar();
		$where = array('id_costumer' => $this->request->getPost('idc') );
		$data = array(
			'id_user'=> $this->request->getPost('idu'),
			'nama_costumer'=>$this->request->getPost('nama'),
			'tempat_lahir'=> $this->request->getPost('tempat'),
			'tanggal_lahir'=> $this->request->getPost('tanggal'),
			'jenis_kelamin'=> $this->request->getPost('jenis'),
			'alamat'=> $this->request->getPost('alamat'),
			'no_hp'=> $this->request->getPost('no'),
		);

		$model->edit('costumer', $data, $where);
		$where = array("nama_costumer" => $this->request->getPost('nama'));
		$wendy = $model->getWhere('costumer', $where); 

		$Joyce = array('id_costumer' => $this->request->getPost('idc'));
		$data2 = array(
			'id_costumer' => $wendy->id_costumer,
			'harga'=>$this->request->getPost('harga'),
			'status_order'=> $this->request->getPost('status'),
			'tanggal_order'=> $this->request->getPost('order'),
			'tanggal_selesai'=> $this->request->getPost('selesai'),
		);

		$model->edit('order', $data2, $Joyce);
		return redirect()->to('/home/order');
	}

	public function tambah_order()
	{
		$Joyce = new M_belajar;
		$where = ('id_costumer');
		$wendy['ngok']=$Joyce->tampil('costumer', $where);
		echo view('header');
		echo view('menu');
		echo view('torder', $wendy);
		echo view('footer');

	}

	public function simpan_o()
	{
		$a=$this->request->getPost('harga');
		$b=$this->request->getPost('status');
		$c=$this->request->getPost('order');
		$d=$this->request->getPost('selesai');
		$e=$this->request->getPost('idu');
		$f=$this->request->getPost('nama');
		$g=$this->request->getPost('tempat');
		$h=$this->request->getPost('tanggal');
		$i=$this->request->getPost('jenis');
		$j=$this->request->getPost('alamat');
		$k=$this->request->getPost('no');
		$Joyce = new M_belajar();
		$data = array(
			"id_user"=>$e,
			"nama_costumer"=>$f,
			"tempat_lahir"=>$g,
			"tanggal_lahir"=>$h,
			"jenis_kelamin"=>$i,
			"alamat"=>$j,
			"no_hp"=>$k,
		);

		$Joyce->input('costumer', $data);
		$where = array(
			"nama_costumer"=>$f,
		);

		$wendy = $Joyce->getWhere('costumer', $where);

		$data2 = array(
			"id_costumer"=>$wendy->id_costumer,
			"harga"=>$a,
			"status_order"=>$b,
			"tanggal_order"=>$c,
			"tanggal_selesai"=>$d,
		);

		$Joyce->input('order', $data2);
		return redirect ()->to('home/order');
	}

	public function lorder()
	{
		$Joyce = new M_belajar;
		$wendy['ngok']=$Joyce->join2('order', 'costumer', 'penjoki', 'order.id_costumer=costumer.id_costumer', 'order.id_penjoki=penjoki.id_penjoki');
		echo view('header');
		echo view('menu');
		echo view('lorder', $wendy);
		echo view('footer');
	}

	public function tampillo()
	{
		$Joyce = new M_belajar;
		$a=$this->request->getPost('awal');
		$b=$this->request->getPost('akhir');
		$wendy['ngok']=$Joyce->filter2('order', 'costumer', 'penjoki', 'order.id_costumer=costumer.id_costumer', 'order.id_penjoki=penjoki.id_penjoki', 'tanggal_order >=', 'tanggal_order <=', "$a", "$b");
		echo view ('tampillo', $wendy);
	}

	public function pdflo()
	{
		$Jocye = new M_belajar;
		$a = $this->request->getPost('awal'); 
		$b = $this->request->getPost('akhir'); 
		$wendy['ngok']=$Jocye->filter2('order', 'costumer', 'penjoki', 'order.id_costumer=costumer.id_costumer', 'order.id_penjoki=penjoki.id_penjoki', 'tanggal_order >=', 'tanggal_order <=', "$a", "$b");

		$html = view('pdflo', $wendy);

		$pdf = new TCPDF();
		$pdf->SetCreator('TCPDF');
		$pdf->SetAuthor('Nama Anda');
		$pdf->SetTitle('Laporan Order');
		$pdf->SetSubject('Laporan PDF');
		$pdf->SetKeywords('TCPDF, PDF, laporan, order');
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->Output('laporan_order.pdf', 'D');
	}

	public function excello()
	{
		$Joyce = new M_belajar;
		$a=$this->request->getPost('awal');
		$b=$this->request->getPost('akhir');
		$wendy['ngok']=$Joyce->filter2('order', 'costumer', 'penjoki', 'order.id_costumer=costumer.id_costumer', 'order.id_penjoki=penjoki.id_penjoki', 'tanggal_order >=', 'tanggal_order <=', "$a", "$b");
		echo view ('excello', $wendy);
	}

	public function rating()
	{
		if (session()->get('level')==1 || session()->get('level')==2 || session()->get('level')==3) {

			$Joyce = new M_belajar;
			$wendy['ngok']=$Joyce->join3('rating', 'costumer', 'penjoki', 'rating.id_costumer=costumer.id_costumer', 'rating.id_penjoki=penjoki.id_penjoki');
			echo view('header');
			echo view('menu');
			echo view('rating', $wendy);
			echo view('footer');

		}else if (session()->get('level')>0){
			return redirect()->to('home/error');
		}else{
			return redirect()->to('home');
		}
	}

	public function hapus_rating($id)
	{
		$Joyce = new M_belajar;
		$wece = array('id_order' => $id );
		$Joyce->hapus('rating', $wece);
		$Joyce->hapus('order', $wece);
		return redirect()->to('home/rating');
	}

	public function edit_rating($id)
	{
		$Joyce= new M_belajar;
		$wece = array('rating.id_order' => $id );
		$wendy['ngok']=$Joyce->joinw('rating', 'order', 'rating.id_order=order.id_order', $wece);
		echo view('header');
		echo view('menu');
		echo view('editr', $wendy); 
		echo view('footer');
	}

	public function simpan_rating()
	{
		$model = new M_belajar();
		$where = array('id_order' => $this->request->getPost('ido') );
		$data = array(
			'id_costumer' =>$this->request->getPost('idc'),
			'harga' =>$this->request->getPost('harga'),
			'status_order' =>$this->request->getPost('status'),
			'tanggal_order' =>$this->request->getPost('order'),
			'tanggal_selesai' =>$this->request->getPost('selesai'),
		);

		$model->edit('order', $data, $where);
		$where = array("harga" => $this->request->getPost('harga'));
		$wendy = $model->getWhere('order', $where); 

		$Joyce = array('id_rating' => $this->request->getPost('idr'));
		$data2 = array(
			'id_order' => $wendy->id_order,
			'rating'=>$this->request->getPost('rating'),
			'komentar'=> $this->request->getPost('komen'),
			'tanggal_rating'=> $this->request->getPost('tanggal'),
		);

		$model->edit('rating', $data2, $Joyce);
		return redirect()->to('/home/rating');
	}

	public function tambah_rating()
	{
		$Joyce = new M_belajar;
		$where = ('id_order');
		$wendy['ngok']=$Joyce->tampil('order', $where);
		echo view('header');
		echo view('menu');
		echo view('trating', $wendy);
		echo view('footer');
	}

	public function simpan_r()
	{
		$a=$this->request->getPost('rating');
		$b=$this->request->getPost('komen');
		$c=$this->request->getPost('tanggal');
		$d=$this->request->getPost('idc');
		$e=$this->request->getPost('harga');
		$f=$this->request->getPost('status');
		$g=$this->request->getPost('order');
		$h=$this->request->getPost('selesai');
		$Joyce = new M_belajar();
		$data = array(
			"id_costumer"=>$d,
			"harga"=>$e,
			"status_order"=>$f,
			"tanggal_order"=>$g,
			"tanggal_selesai"=>$h,
		);

		$Joyce->input('order', $data);
		$where = array(
			"harga"=>$e,
		);

		$wendy = $Joyce->getWhere('order', $where);

		$data2 = array(
			"id_order"=>$wendy->id_order,
			"rating"=>$a,
			"komentar"=>$b,
			"tanggal_rating"=>$c,
		);

		$Joyce->input('rating', $data2);
		return redirect ()->to('home/rating');
	}

	public function lrating()
	{
		$Joyce = new M_belajar;
		$wendy['ngok']=$Joyce->filter2('rating', 'costumer', 'penjoki', 'rating.id_costumer=costumer.id_costumer', 'rating.id_penjoki=penjoki.id_penjoki', 'tanggal_rating >=', 'tanggal_rating <=', "$a", "$b");
		echo view('header');
		echo view('menu');
		echo view('lrating', $wendy);
		echo view('footer');
	}

	public function tampillr()
	{
		$Joyce = new M_belajar;
		$a=$this->request->getPost('awal');
		$b=$this->request->getPost('akhir');
		$wendy['ngok']=$Joyce->filter2('rating', 'costumer', 'penjoki', 'rating.id_costumer=costumer.id_costumer', 'rating.id_penjoki=penjoki.id_penjoki', 'tanggal_rating >=', 'tanggal_rating <=', "$a", "$b");
		echo view ('tampillr', $wendy);
	}

	public function pdflr()
	{
		$Jocye = new M_belajar;
		$a = $this->request->getPost('awal'); 
		$b = $this->request->getPost('akhir'); 
		$wendy['ngok']=$Jocye->filter2('rating', 'costumer', 'penjoki', 'rating.id_costumer=costumer.id_costumer', 'rating.id_penjoki=penjoki.id_penjoki', 'tanggal_rating >=', 'tanggal_rating <=', "$a", "$b");

		$html = view('pdflr', $wendy);

		$pdf = new TCPDF();
		$pdf->SetCreator('TCPDF');
		$pdf->SetAuthor('Nama Anda');
		$pdf->SetTitle('Laporan Order');
		$pdf->SetSubject('Laporan PDF');
		$pdf->SetKeywords('TCPDF, PDF, laporan, order');
		$pdf->AddPage();
		$pdf->writeHTML($html, true, false, true, false, '');
		$pdf->Output('laporan_order.pdf', 'D');
	}

	public function excellr()
	{
		$Joyce = new M_belajar;
		$a=$this->request->getPost('awal');
		$b=$this->request->getPost('akhir');
		$wendy['ngok']=$Joyce->filter2('rating', 'costumer', 'penjoki', 'rating.id_costumer=costumer.id_costumer', 'rating.id_penjoki=penjoki.id_penjoki', 'tanggal_rating >=', 'tanggal_rating <=', "$a", "$b");
		echo view ('excello', $wendy);
	}
}