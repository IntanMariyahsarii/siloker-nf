<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        $this->load->helper('url');
    }

    public function load()
    {
        $page = array(
            "head" => $this->load->view('template/head', false, true),
            "header" => $this->load->view('template/header', false, true),
            "headerAdmin" => $this->load->view('template/headerAdmin', false, true),
            "footer" => $this->load->view('template/footer', false, true),
            "main_js" => $this->load->view('template/main_js', false, true)
        );

        return $page;
    }

    public function index()
    {
        $list["lowongan"] = $this->db->query("SELECT lowongan.*, mitra.*, lowongan.id as id_lowongan FROM lowongan JOIN mitra ON lowongan.mitra_id = mitra.id")
            ->result();
        $list["mitra"] = $this->db->get("mitra")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/index', $list, true)
        );

        $this->load->view('template/default_template', $data);
    }

    public function about()
    {
        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/about', null, true)
        );

        $this->load->view('template/default_template', $data);
    }

    public function lowonganKerja()
    {
        $list["lowongan"] = $this->db->query("SELECT  lowongan.*, mitra.*, lowongan.id as id_lowongan FROM lowongan JOIN mitra ON lowongan.mitra_id = mitra.id")
            ->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/lowonganKerja', $list, true)
        );

        $this->load->view('template/default_template', $data);
    }

    public function berita()
    {
        $list["berita"] = $this->db->query("SELECT * FROM berita")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/berita', $list, true)
        );

        $this->load->view('template/default_template', $data);
    }

	public function detailBerita($beritaId)
	{
		$list["berita"] = $this->db->query("SELECT * FROM berita WHERE id_berita = $beritaId")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/detailBerita', $list, true)
        );

        $this->load->view('template/default_template', $data);
	}

    public function isiLoker()
    {
        $list["keahlian"] = $this->db->get("keahlian")->result();
        $list["mitra"] = $this->db->get("mitra")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/isiLoker', $list, true)
        );

        $this->load->view('template/default_template', $data);
    }

    public function daftarMitra()
    {
        $list["mitra"] = $this->db->get("mitra")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/daftarMitra', $list, true)
        );

        $this->load->view('template/default_template', $data);
    }

    public function formMitra()
    {

        $list["bidangUsaha"] = $this->db->get("bidang_usaha")->result();
        $list["sektorUsaha"] = $this->db->get("sektor_usaha")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/formMitra', $list, true)
        );

        $this->load->view('template/default_template', $data);
    }

    public function createMitra()
    {
        $nama = $this->input->post("nama");
        $telpon = $this->input->post("telpon");
        $email = $this->input->post("email");
        $alamatWeb = $this->input->post("alamatWeb");
        $alamatKantor = $this->input->post("alamatKantor");
        $sektorUsaha = $this->input->post("sektorUsaha");
        $bidangUsaha = $this->input->post("bidangUsaha");
        $kontak = $this->input->post("kontak");
        $logo = "";

        if (!empty($_FILES['logo']['name'])) {

            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'jpg|jpeg|png|gif';
            $config['overwrite']            = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $data = $this->upload->data();
                $logo = $data['file_name'];
            }
        }

        $data = array(
            'nama' => $nama,
            'logo' => $logo,
            'kontak' => $kontak,
            'alamat' => $alamatKantor,
            'email' => $email,
            'web' => $alamatWeb,
            'telpon' => $telpon,
            'bidang_usaha_id' => $bidangUsaha,
            'sektor_usaha_id' => $sektorUsaha
        );

        $this->db->insert('mitra', $data);

        $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
        redirect('dashboard/formMitra');
    }
	

    public function createLoker()
    {
        $mitra = $this->input->post("mitra");
        $deskripsi = $this->input->post("deskripsi");
        $tanggal = $this->input->post("tanggal");
        $email = $this->input->post("email");
        $kategori = $this->input->post("kategori");


        $data = array(
            'mitra_id' => $mitra,
            'email' => $email,
            'deskripsi_pekerjaan' => $deskripsi,
            'tanggal_akhir' => $tanggal
        );

        $this->db->insert('lowongan', $data);

        $lowonganId = $this->db->insert_id();

        foreach ($kategori as $kategori) {
            $data = array(
                'lowongan_id' => $lowonganId,
                'keahlian_id' => $kategori,
            );

            $this->db->insert('lowongan_keahlian', $data);
        }

        $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
        redirect('dashboard/isiLoker');
    }

    public function detailLowongan($lokerId)
    {
        $list["loker"] = $this->db->query("SELECT * FROM lowongan JOIN mitra ON lowongan.mitra_id = mitra.id WHERE lowongan.id = $lokerId")
            ->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/detailLowongan', $list, true)
        );

        $this->load->view('template/default_template', $data);
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function postLogin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        if ($username != "admin") {
            $this->session->set_flashdata('gagal', 'Username yang anda masukan salah!');
            redirect('dashboard/login');
        }

        if ($password != "123") {
            $this->session->set_flashdata('gagal', 'Password yang anda masukan salah!');
            redirect('dashboard/login');
        }

        redirect('dashboard/kelolaLoker');
    }

    public function logout()
    {
        redirect('dashboard/index');
    }

    // Admin

    public function kelolaLoker()
    {
        $list["loker"] = $this->db->query("SELECT lowongan.*, mitra.*, lowongan.id as loker_id FROM lowongan JOIN mitra ON lowongan.mitra_id = mitra.id")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/kelolaLoker', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function detailKelolaLoker($lokerId)
    {
        $list["loker"] = $this->db->query("SELECT lowongan.*, mitra.*, lowongan.id as loker_id FROM lowongan JOIN mitra ON lowongan.mitra_id = mitra.id WHERE lowongan.id = $lokerId")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/detailKelolaLoker', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function editKelolaLoker($lokerId)
    {
        $list["loker"] = $this->db->query("SELECT * FROM lowongan WHERE id = $lokerId")->result();
        $list["lokerKeahlian"] = $this->db->query("SELECT * FROM lowongan_keahlian WHERE lowongan_id = $lokerId")->result();
        $list["keahlian"] = $this->db->get("keahlian")->result();
        $list["mitra"] = $this->db->get("mitra")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/editKelolaLoker', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function updateKelolaLoker()
    {
        $lokerId = $this->input->post("lokerId");
        $mitra = $this->input->post("mitra");
        $deskripsi = $this->input->post("deskripsi");
        $tanggal = $this->input->post("tanggal");
        $email = $this->input->post("email");
        $kategori = $this->input->post("kategori");


        $data = array(
            'mitra_id' => $mitra,
            'email' => $email,
            'deskripsi_pekerjaan' => $deskripsi,
            'tanggal_akhir' => $tanggal
        );

        $this->db->where('id', $lokerId);
        $this->db->update('lowongan', $data);

        // foreach ($kategori as $kategori) {
        //     $data = array(
        //         'lowongan_id' => $lokerId,
        //         'keahlian_id' => $kategori,
        //     );

        //     $this->db->insert('lowongan_keahlian', $data);
        // }

        $this->session->set_flashdata('success', 'Data Berhasil diedit');
        redirect('dashboard/editKelolaLoker/' . $lokerId);
    }

    public function deleteKelolaLoker($lokerId)
    {
        $this->db->delete('lowongan_keahlian', array('lowongan_id' => $lokerId));
        $this->db->delete('lowongan', array('id' => $lokerId));
        redirect('dashboard/kelolaLoker');
    }

    public function kelolaMitra()
    {
        $list["mitra"] = $this->db->query("SELECT * FROM mitra")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/kelolaMitra', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function detailKelolaMitra($mitraId)
    {
        $list["mitra"] = $this->db->query("SELECT * FROM mitra WHERE id = $mitraId")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/detailKelolaMitra', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

	public function detailMitra($mitraId)
	{
		$list["mitra"] = $this->db->query("SELECT * FROM mitra WHERE id = $mitraId")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('user/detailMitra', $list, true)
        );

        $this->load->view('template/default_template', $data);
	}

    public function editKelolaMitra($mitraId)
    {
        $list["mitra"] = $this->db->query("SELECT * FROM mitra WHERE id = $mitraId")->result();
        $list["bidangUsaha"] = $this->db->get("bidang_usaha")->result();
        $list["sektorUsaha"] = $this->db->get("sektor_usaha")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/editKelolaMitra', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function updateKelolaMitra()
    {
        $mitraId = $this->input->post("mitraId");
        $nama = $this->input->post("nama");
        $telpon = $this->input->post("telpon");
        $email = $this->input->post("email");
        $alamatWeb = $this->input->post("alamatWeb");
        $alamatKantor = $this->input->post("alamatKantor");
        $sektorUsaha = $this->input->post("sektorUsaha");
        $bidangUsaha = $this->input->post("bidangUsaha");
        $kontak = $this->input->post("kontak");
        $logoLama = $this->input->post("logoLama");

        if (!empty($_FILES['logo']['name'])) {

            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'jpg|jpeg|png|gif';
            $config['overwrite']            = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $data = $this->upload->data();
                $logo = $data['file_name'];
            }
        } else {
            $logo = $logoLama;
        }

        $data = array(
            'nama' => $nama,
            'logo' => $logo,
            'kontak' => $kontak,
            'alamat' => $alamatKantor,
            'email' => $email,
            'web' => $alamatWeb,
            'telpon' => $telpon,
            'bidang_usaha_id' => $bidangUsaha,
            'sektor_usaha_id' => $sektorUsaha
        );

        $this->db->where('id', $mitraId);
        $this->db->update('mitra', $data);

        $this->session->set_flashdata('success', 'Data Berhasil diedit');
        redirect('dashboard/editKelolaMitra/' . $mitraId);
    }

    public function deleteKelolaMitra($mitraId)
    {
        $this->db->delete('mitra', array('id' => $mitraId));
        redirect('dashboard/kelolaMitra');
    }

    public function kelolaBerita()
    {
        $list["berita"] = $this->db->query("SELECT * FROM berita")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/kelolaBerita', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function formKelolaBerita()
    {
        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/formKelolaBerita', false, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function createKelolaBerita()
    {
		$judul = $this->input->post("judul");
        $tanggal = $this->input->post("tanggal");
        $deskripsi = $this->input->post("deskripsi");
        $foto = "";

        if (!empty($_FILES['foto']['name'])) {

            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'jpg|jpeg|png|gif';
            $config['overwrite']            = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $data = $this->upload->data();
                $foto = $data['file_name'];
            }
        }

        $data = array(
			'judul' => $judul,
            'foto' => $foto,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal
        );

        $this->db->insert('berita', $data);

        $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
        redirect('dashboard/formKelolaBerita');
    }

    public function editkelolaBerita($beritaId)
    {
        $list["berita"] = $this->db->query("SELECT * FROM berita WHERE id_berita = $beritaId")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/editkelolaBerita', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function updateKelolaBerita()
    {
        $beritaId = $this->input->post("beritaId");
        $tanggal = $this->input->post("tanggal");
		$judul = $this->input->post("judul");
        $deskripsi = $this->input->post("deskripsi");
        $fotoLama = $this->input->post("fotoLama");

        if (!empty($_FILES['foto']['name'])) {

            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'jpg|jpeg|png|gif';
            $config['overwrite']            = true;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $data = $this->upload->data();
                $foto = $data['file_name'];
            }
        } else {
            $foto = $fotoLama;
        }

        $data = array(
            'foto' => $foto,
			'judul' => $judul,
            'deskripsi' => $deskripsi,
            'tanggal' => $tanggal
        );

        $this->db->where('id_berita', $beritaId);
        $this->db->update('berita', $data);

        $this->session->set_flashdata('success', 'Data Berhasil diedit');
        redirect('dashboard/editkelolaBerita/' . $beritaId);
    }

    public function detailKelolaBerita($beritaId)
    {
        $list["berita"] = $this->db->query("SELECT * FROM berita WHERE id_berita = $beritaId")->result();

        $data = array(
            "page" => $this->load(),
            "content" => $this->load->view('admin/detailKelolaBerita', $list, true)
        );

        $this->load->view('template/admin_template', $data);
    }

    public function deleteKelolaBerita($beritaId)
    {
        $this->db->delete('berita', array('id_berita' => $beritaId));
        redirect('dashboard/kelolaBerita');
    }
}
