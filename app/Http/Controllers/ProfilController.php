<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
        {
                $data = [
                            "nama" => "Mirza Fahmi",
                                        "nim" => "4124034",
                                                    "prodi" => "Sistem Informasi",
                                                                "semester" => "4",
                                                                            "keahlian" => ["HTML", "CSS", "PHP", "Laravel"]
                                                                                    ];

                                                                                            return view('profil', $data);
                                                                                                }

                                                                                                    public function show($nim)
                                                                                                        {
                                                                                                                return "Profil mahasiswa dengan NIM: " . $nim;
                                                                                                                    }
                                                                                                                    }