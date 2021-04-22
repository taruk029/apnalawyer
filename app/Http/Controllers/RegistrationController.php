<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Lawyer_category;
use App\User;
use App\City;
use App\Courts_city;
use App\High_court;
use App\State;
use App\Day;
use App\User_detail;
use App\Lawyer_court_type;
use App\Lawyer_court;
use App\Lawyer_available_day;
use App\Experience;
use Session;

class RegistrationController extends Controller
{
    public function index()
    {
    	$category      =    Category::get();
    	$state         =    State::orderBy('name', 'ASC')->where("is_active", 1)->get();
        $high_court    =    High_court::orderBy('name', 'ASC')->where("is_active", 1)->get();
        $days          =    Day::where("is_active", 1)->get();
        return view('front1.home', ['category'=>$category, 'state'=>$state, 'high_court'=>$high_court, 'days'=>$days]);
    }
    
    public function services()
    {
        $category      =    Category::get();
        
        return view('front1.services', ['category'=>$category]);
    }

    public function contact()
    {
        $category      =    Category::get();
        
        return view('front.contact', ['category'=>$category]);
    }

    public function lawyer_registration()
    {
        $category      =    Category::get();
        $state         =    State::orderBy('name', 'ASC')->where("is_active", 1)->get();
        $high_court    =    High_court::orderBy('name', 'ASC')->where("is_active", 1)->get();
        $days          =    Day::where("is_active", 1)->get();
        $experience    =    Experience::get();
        return view('front1.lawyer_registration', ['category'=>$category, 'state'=>$state, 'high_court'=>$high_court, 'days'=>$days, 'experience'=>$experience]);
    }        

    public function insert(Request $request)
    {
        $images_fileName ="";
        $image_url ="";
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $images_fileName = pathinfo($images->getClientOriginalName(), PATHINFO_FILENAME).date('Ymdhis').'.'.$images->getClientOriginalExtension();
            $images->move(base_path().'/public/lawyer_images/', $images_fileName);
            $image_url = url('/')."/public/lawyer_images/".$images_fileName;
        }

    	$user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name." ".$request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phones;
        $user->user_type = 1;
        $user->state_id = $request->state;
        $user->picture = $images_fileName;
        $user->image_url = $image_url;
        $user->is_active = 1;
        if($user->save())
        {
            $user_detail = new User_detail;
            $user_detail->user_id = $user->id;
            $user_detail->experience = $request->experience;
            $user_detail->registration_number = $request->registration_number;
            $user_detail->gender = $request->selected_gender;
            $user_detail->marital_status = $request->selected_marital;
            $user_detail->time_available_from = $request->time_available_from;
            $user_detail->time_available_to = $request->time_available_to;
            $user_detail->address = $request->address;
            $user_detail->is_online_active = $request->selected_online;
            $user_detail->save();

            if(!empty($request->court))
            {
                foreach($request->court as $row_court_type)  
                {
                    $lawyer_court_type = new Lawyer_court_type; 
                    $lawyer_court_type->user_id = $user->id;
                    $lawyer_court_type->court_id = $row_court_type;
                    $lawyer_court_type->is_active = 1;
                    $lawyer_court_type->save();

                    if($row_court_type==2)
                    {
                        if(!empty($request->high_court))
                        {
                            $lawyer_courts = new Lawyer_court; 
                            $lawyer_courts->user_id = $user->id;
                            $lawyer_courts->court_id = $request->high_court;
                            $lawyer_courts->court_type = 1;
                            $lawyer_courts->is_active = 1;
                            $lawyer_courts->save();
                        }
                    }
                    if($row_court_type==3)
                    {
                        if(!empty($request->district_court))
                        {
                            foreach($request->district_court as $row_district)  
                            {
                                $lawyer_courts_dis = new Lawyer_court; 
                                $lawyer_courts_dis->user_id = $user->id;
                                $lawyer_courts_dis->court_id = $row_district;
                                $lawyer_courts_dis->court_type = 2;
                                $lawyer_courts_dis->is_active = 1;
                                $lawyer_courts_dis->save();
                            }
                        }
                    }
                }
            }

            if(!empty($request->days_availability))
            {
                foreach($request->days_availability as $row_day)  
                {
                    $lawyer_available_day = new Lawyer_available_day; 
                    $lawyer_available_day->user_id = $user->id;
                    $lawyer_available_day->day_id = $row_day;
                    $lawyer_available_day->is_active = 1;
                    $lawyer_available_day->save();
                }
            }
            if(!empty($request->category_list))
            {
                foreach($request->category_list as $row_cat)  
                {
                    $lawyer_cat = new Lawyer_category; 
                    $lawyer_cat->user_id = $user->id;
                    $lawyer_cat->category_id = $row_cat;
                    $lawyer_cat->is_active = 1;
                    $lawyer_cat->save();
                }
            }
        }
        Session::flash('success', 'Lawyer details has been added successfully.');
        return redirect('/');
    }

    public function get_city(Request $request)
    {
         $sub = Courts_city::where('state_id',  $request->id)
            ->where("is_active", 1)
            ->select('id', 'city_name')
            ->orderBy('city_name', 'ASC')
            ->get();
            $data = array();
        for($i=0;$i<count($sub);$i++){
           $data[] = array('id'=>$sub[$i]->id,'name'=>$sub[$i]->city_name);
        }
        $output  = $data;
        echo json_encode($output);
    }

    public function save_query(Request $request)
    {
        $images_fileName ="";
        $image_url ="";
        if($request->hasFile('image'))
        {
            $images = $request->file('image');
            $images_fileName = pathinfo($images->getClientOriginalName(), PATHINFO_FILENAME).date('Ymdhis').'.'.$images->getClientOriginalExtension();
            $images->move(base_path().'/public/lawyer_images/', $images_fileName);
            $image_url = url('/')."/public/lawyer_images/".$images_fileName;
        }

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->name = $request->first_name." ".$request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phones;
        $user->user_type = 1;
        $user->state_id = $request->state;
        $user->picture = $images_fileName;
        $user->image_url = $image_url;
        $user->is_active = 1;
        if($user->save())
        {
            $user_detail = new User_detail;
            $user_detail->user_id = $user->id;
            $user_detail->experience = $request->experience;
            $user_detail->registration_number = $request->registration_number;
            $user_detail->gender = $request->selected_gender;
            $user_detail->marital_status = $request->selected_marital;
            $user_detail->time_available_from = $request->time_available_from;
            $user_detail->time_available_to = $request->time_available_to;
            $user_detail->address = $request->address;
            $user_detail->is_online_active = $request->selected_online;
            $user_detail->save();

            if(!empty($request->court))
            {
                foreach($request->court as $row_court_type)  
                {
                    $lawyer_court_type = new Lawyer_court_type; 
                    $lawyer_court_type->user_id = $user->id;
                    $lawyer_court_type->court_id = $row_court_type;
                    $lawyer_court_type->is_active = 1;
                    $lawyer_court_type->save();

                    if($row_court_type==2)
                    {
                        if(!empty($request->high_court))
                        {
                            $lawyer_courts = new Lawyer_court; 
                            $lawyer_courts->user_id = $user->id;
                            $lawyer_courts->court_id = $request->high_court;
                            $lawyer_courts->court_type = 1;
                            $lawyer_courts->is_active = 1;
                            $lawyer_courts->save();
                        }
                    }
                    if($row_court_type==3)
                    {
                        if(!empty($request->district_court))
                        {
                            foreach($request->district_court as $row_district)  
                            {
                                $lawyer_courts_dis = new Lawyer_court; 
                                $lawyer_courts_dis->user_id = $user->id;
                                $lawyer_courts_dis->court_id = $row_district;
                                $lawyer_courts_dis->court_type = 2;
                                $lawyer_courts_dis->is_active = 1;
                                $lawyer_courts_dis->save();
                            }
                        }
                    }
                }
            }

            if(!empty($request->days_availability))
            {
                foreach($request->days_availability as $row_day)  
                {
                    $lawyer_available_day = new Lawyer_available_day; 
                    $lawyer_available_day->user_id = $user->id;
                    $lawyer_available_day->day_id = $row_day;
                    $lawyer_available_day->is_active = 1;
                    $lawyer_available_day->save();
                }
            }
            if(!empty($request->category_list))
            {
                foreach($request->category_list as $row_cat)  
                {
                    $lawyer_cat = new Lawyer_category; 
                    $lawyer_cat->user_id = $user->id;
                    $lawyer_cat->category_id = $row_cat;
                    $lawyer_cat->is_active = 1;
                    $lawyer_cat->save();
                }
            }
        }
        Session::flash('success', 'Lawyer details has been added successfully.');
        return redirect('/');
    }
}
