<?php

class AdminController extends BaseController {



	public function postVerifyLogin()
	{
		// print_r(Input::all());
		$rules = array('email' => 'required');
		$validator = Validator::make(Input::all(),$rules);
		if ($validator->fails()) {
			return Redirect::to('/')->withErrors($validator);
			
		}
		else{
			$userdata = array(
				'username' => Input::get('email'),
				'password'=>Input::get('password')
				);
			// print_r($userdata);
			if (Auth::attempt($userdata)) {
				# code...
				return Redirect::to('/home');
			}
			else{
				return Redirect::to('/')->with('loginError','Email or password not matched!');
			}
		}
	}

	public function getLogOut(){
		Auth::logout();
		return Redirect::to('/');
	}

	public function postSaveUser(){

		$user = new User;
		$user->username='shahin';
		$user->password=Hash::make('123');
		$user->save();
	}
	

	public function getCategory(){
		$categorys = Category::all();
		return View::make('pages.home')->with('category',$category);
	}
	public function postSaveCategory(){
		// print_r(Input::all());

		$categroyInput = new Category;
		$categroyInput->title=Input::get('title');
		$categroyInput->parent_id=0;
		$categroyInput->status=1;
		$categroyInput->creator_id=Input::get('userid');
		$categroyInput->created_at =date('Y-m-d H:i:s');
		$categroyInput->save();
		return Redirect::to('/category')->with('sucess','Category has been saved!');
	}

	public function getDeleteCategory($id){
		
		$delete = Category::find($id);
		$delete->delete();
		return Redirect::to('/category');
	}
public function postEditCategory(){
		// print_r(Input::all());

		$categroyInputUpdate = Category::find(Input::get('categoryid'));
		$categroyInputUpdate->title=Input::get('title');
		$categroyInputUpdate->parent_id=0;
		$categroyInputUpdate->status=1;
		$categroyInputUpdate->creator_id=Input::get('userid');
		$categroyInputUpdate->created_at =date('Y-m-d H:i:s');
		$categroyInputUpdate->save();
		return Redirect::to('/category')->with('sucess','Category has been saved!');
	}

	public function postSaveGallery(){
		// print_r(Input::all());
		$productItem = new Product;
		$productItem->category_id =Input::get('category_id');
		$productItem->title =Input::get('title');
	
		if (Input::hasFile('image'))
				{
		if (Input::file('image')->isValid())
		{
		$file = Input::file('image');
		$destinationPath = public_path().'/uploads_products_pic/';
		$filename =str_random(6) . '_' . $file->getClientOriginalName();;
		$uploadSuccess = $file->move($destinationPath, $filename);
		$productItem->image =$filename;
		}
		}
		
		$productItem->creator_id =Input::get('userid');
		$productItem->created_at =date('Y-m-d H:i:s');
		$productItem->status =1;
		$productItem->save();
		return Redirect::to('/gallery')->with('sucess','Image has been saved!');
	}

	public function getDeleteGallery($id){
		
		$delete = Product::find($id);
		$delete->delete();
		return Redirect::to('/gallery');
	}
	public function postEditProduct(){
		$productItem = Product::find(Input::get('productid'));
		$productItem->category_id =Input::get('category_id');
		$productItem->title =Input::get('title');
		

		if (Input::hasFile('image'))
		{
   
		if (Input::file('image')->isValid())
		{
		$file = Input::file('image');
		$destinationPath = public_path().'/uploads_products_pic/';
		$filename =str_random(6) . '_' . $file->getClientOriginalName();;
		$uploadSuccess = $file->move($destinationPath, $filename);
		$productItem->image =$filename;
		}
		}

		$productItem->creator_id =Input::get('userid');
		$productItem->created_at =date('Y-m-d H:i:s');
		$productItem->status =1;
		$productItem->save();
		return Redirect::to('/gallery')->with('sucess','Image has been saved!');
	}

	public function postSaveSlide(){
		// print_r(Input::all());

		$slider = new Slide;
		$slider->title=Input::get('title');
		if (Input::hasFile('image'))
		{
   
		if (Input::file('image')->isValid())
		{
		$file = Input::file('image');
		$destinationPath = public_path().'/uploads_slide_pic/';
		$filename =str_random(6) . '_' . $file->getClientOriginalName();;
		$uploadSuccess = $file->move($destinationPath, $filename);
		$slider->slider_image =$filename;
		}
		}
		$slider->status=1;
		$slider->creator_id=Input::get('userid');
		$slider->created_at =date('Y-m-d H:i:s');
		$slider->save();
		return Redirect::to('/slide')->with('sucess','Slide has been saved!');
	}

	public function getDeleteSlide($id){
		
		$delete = Slide::find($id);
		$delete->delete();
		return Redirect::to('/slide');
	}
public function postEditSlide(){
		// print_r(Input::all());

		$sliderInput = Slide::find(Input::get('sliderid'));
		$sliderInput->title=Input::get('title');
		if (Input::hasFile('image'))
		{
   
		if (Input::file('image')->isValid())
		{
		$file = Input::file('image');
		$destinationPath = public_path().'/uploads_slide_pic/';
		$filename =str_random(6) . '_' . $file->getClientOriginalName();;
		$uploadSuccess = $file->move($destinationPath, $filename);
		$sliderInput->slider_image =$filename;
		}
		}
		$sliderInput->status=1;
		$sliderInput->creator_id=Input::get('userid');
		$sliderInput->created_at =date('Y-m-d H:i:s');
		$sliderInput->save();
		return Redirect::to('/slide')->with('sucess','Slide has been Updated!');
	}


}
