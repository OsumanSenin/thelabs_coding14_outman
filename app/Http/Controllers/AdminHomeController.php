<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Banner;
use App\Models\HomeContact;
use App\Models\ProfilTeam;
use App\Models\Ready;
use App\Models\ServiceHome;
use App\Models\Testimonial;
use App\Models\TitreService;
use App\Models\TitreSlogan;
use App\Models\TitreTeam;
use App\Models\TitreTestimonial;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $serviceHome = ServiceHome::all();
        $aboutContent = AboutContent::all();
        $titreTestimonial = TitreTestimonial::all();
        $testimonial = Testimonial::all();
        $titreService = TitreService::all();
        $titreTeam = TitreTeam::all();
        $profilTeam = ProfilTeam::all();
        $titreSlogan = TitreSlogan::all();
        $ready = Ready::all();
        $homeContact = HomeContact::all();
        return view("adminHome", compact("homeContact","ready","titreSlogan","titreTeam","banner", "serviceHome", "aboutContent", "titreTestimonial", "testimonial", "titreService", "profilTeam"));
    }
}
