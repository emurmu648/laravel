<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Service;

class ServiceController extends Controller
{
    public function addService(){
        return view('admin.service.add-service');
    }

    public function createService(Request $request){
        $this->validate($request,[
            'service_name' => 'required',
            'service_description' => 'required|max:2000',
            'service_image' => 'required|max:2048',
            'status' => 'required'
        ]);

        $service_img = $request->file('service_image');
        if ($service_img) {
            $img_name = uniqid().'-'.date('dmy');
            $img_ext = strtolower($service_img->getClientOriginalExtension());
            $full_img = $img_name.'.'.$img_ext;
            $upload_path = './Image/service/';
            $url = $upload_path.$full_img;
            $service_img->move($upload_path,$full_img);
        }

        $service = new Service();
        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        $service->service_image = $url;
        $service->status = $request->status;
        $service->save();

        Toastr::success('Service info created', 'Success', ["closeButton" => true, "progressBar"=>true]);
        return redirect()->back();
    }

    public function manageService(){
        return view('admin.service.manage-service',[
            'services'=>Service::latest()->paginate(3)
        ]);
    }

    public function editService($id){
        return view('admin.service.edit-service',[
            'services'=>Service::find($id)
        ]);
    }

    public function updateService(Request $request){
        $this->validate($request,[
            'service_description' => 'required|max:2000',
            'service_image' => 'required|max:2048',
        ]);
        $service = Service::find($request->id);


        $service_img = $request->file('service_image');
        if ($service_img) {
            if (file_exists($service->service_image)) {
                unlink($service->service_image);
            }
            $img_name = uniqid().'-'.date('dmy');
            $img_ext = strtolower($service_img->getClientOriginalExtension());
            $full_img = $img_name.'.'.$img_ext;
            $upload_path = './Image/service/';
            $url = $upload_path.$full_img;
            $service_img->move($upload_path,$full_img);
        }

        $service->service_name = $request->service_name;
        $service->service_description = $request->service_description;
        if (isset($service_img)) {
            $service->service_image = $url;
        }
        $service->status = $request->status;
        $service->save();

        Toastr::success('Service info updated', 'Success', ["closeButton" => true, "progressBar"=>true]);
        return redirect()->route('service.manage');
    }

    public function deleteService($id){
        $service = Service::find($id);
        if (file_exists($service->service_image)){
            unlink($service->service_image);
        }
        $service->delete();

        Toastr::success('Service info deleted', 'Success', ["closeButton" => true, "progressBar"=>true]);
        return redirect()->back();
    }

}
