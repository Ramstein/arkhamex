<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Admin;

class SettingController extends Controller
{

    public function Settings()
    {
        $data['title']='General settings';
        $data['val']=Admin::first();
        return view('admin.settings.index', $data);
    }  

    public function SavingsUpdate(Request $request)
    {
        $data = Settings::findOrFail(1);
        $data->fill($request->all())->save();
        return back()->with('success', 'Update was Successful!');
    }

    public function AccountUpdate(Request $request)
    {
        $data = Admin::findOrFail(1);
        if($request->has('username')){
            $data->username=$request->username;
        }
        if($request->has('password')){
            $data->password=Hash::make($request->password);
        }
        $data->recovery_email=$request->recovery_email;
        $data->save();
        return back()->with('success', 'Update was Successful!');
    }      
       
    public function SettingsUpdate(Request $request)
    {
        $data = Settings::findOrFail(1);
        $data->site_name=$request->site_name;
        $data->livechat=$request->livechat;
        $data->welcome_message=$request->welcome_message;
        $data->dashboard_message=$request->dashboard_message;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->title=$request->title;
        $data->balance_reg=$request->bal;
        $data->min_withdrawal=$request->min_withdrawal;
        $data->email_template=$request->email_template;
        $data->withdraw_charge=$request->withdraw_charge;
        $data->transfer_charge=$request->transfer_charge;
        $data->site_desc=$request->site_desc;
        $data->address=$request->address;
        $data->duration=$request->duration;
        $data->period=$request->period; 
        $data->upgrade_fee=$request->upgrade_fee;
        $data->default_font=$request->default_font;
        $data->default_color=$request->default_color;
        $data->referral_type=$request->referral_type;
        $data->admin_url=$request->admin_url;
        if(empty($request->kyc)){
            $data->kyc=0;	
        }else{
            $data->kyc=$request->kyc;
        }         
        if(empty($request->kyc_restriction)){
            $data->kyc_restriction=0;	
        }else{
            $data->kyc_restriction=$request->kyc_restriction;
        }    
        if(empty($request->email_activation)){
            $data->email_verification=0;	
        }else{
            $data->email_verification=$request->email_activation;
        }             
        if(empty($request->email_notify)){
            $data->email_notify=0;	
        }else{
            $data->email_notify=$request->email_notify;
        }    
        if(empty($request->registration)){
            $data->registration=0;	
        }else{
            $data->registration=$request->registration;
        }           
        if(empty($request->referral)){
            $data->referral=0;	
        }else{
            $data->referral=$request->referral;
        }         
        if(empty($request->recaptcha)){
            $data->recaptcha=0;	
        }else{
            $data->recaptcha=$request->recaptcha;
        }         
        if(empty($request->language)){
            $data->language=0;	
        }else{
            $data->language=$request->language;
        }         
        if(empty($request->blog)){
            $data->blog=0;	
        }else{
            $data->blog=$request->blog;
        } 
        if(empty($request->services)){
            $data->services=0;	
        }else{
            $data->services=$request->services;
        }         
        if(empty($request->plan)){
            $data->plan=0;	
        }else{
            $data->plan=$request->plan;
        }        
        if(empty($request->review)){
            $data->review=0;	
        }else{
            $data->review=$request->review;
        }        
        if(empty($request->team)){
            $data->team=0;	
        }else{
            $data->team=$request->team;
        }        
        if(empty($request->stat)){
            $data->stat=0;	
        }else{
            $data->stat=$request->stat;
        }        
        if(empty($request->contact)){
            $data->contact=0;	
        }else{
            $data->contact=$request->contact;
        }        
        if(empty($request->faq)){
            $data->faq=0;	
        }else{
            $data->faq=$request->faq;
        }         
        if(empty($request->upgrade_status)){
            $data->upgrade_status=0;	
        }else{
            $data->upgrade_status=$request->upgrade_status;
        }           
        if(empty($request->transfer)){
            $data->transfer=0;	
        }else{
            $data->transfer=$request->transfer;
        }         
        if(empty($request->ns)){
            $data->ns=0;	
        }else{
            $data->ns=$request->ns;
        }        
        if(empty($request->p_inv)){
            $data->p_inv=0;	
        }else{
            $data->p_inv=$request->p_inv;
        }        
        if(empty($request->s_inv)){
            $data->s_inv=0;	
        }else{
            $data->s_inv=$request->s_inv;
        }        
        if(empty($request->savings)){
            $data->savings=0;	
        }else{
            $data->savings=$request->savings;
        }          
        if(empty($request->instant_approval)){
            $data->instant_approval=0;	
        }else{
            $data->instant_approval=$request->instant_approval;
        }           
        if(empty($request->language)){
            $data->language=0;	
        }else{
            $data->language=$request->language;
        }        
        $res=$data->save();
        if ($res) {
            return back()->with('success', 'Update was Successful!');
        } else {
            return back()->with('alert', 'An error occured');
        }
    }  
}
