<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    public function show(){
        return view('order-form');
    }


    public function proceed(Request $request){

        $user = new User;
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'tel' => 'required|min:8|max:10',
        ]);
        $existUser=User::all()->where('name', '=', $request->input('name'))
            ->where('email','=', $request->input('email'))->first();
        //dd($existUser->name);
        if(isset($existUser)) {
            if ($existUser->name == $request->input('name')) {
                $user->id = $existUser->id;
            } else {
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->tel = $request->input('tel');

                $user->save();
            }
        }else{
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->tel = $request->input('tel');

            $user->save();
        }


        if(isset($_COOKIE['basket'])){

            $products=json_decode($_COOKIE['basket']);

            foreach ($products as $product){
                $order=new Order();
                $order->user_id=$user->id;
                $order->product_id=$product->id;
                $order->amount=$product->amount;
                $order->len=$product->len;
                $order->status='in work';
                $order->description='';
                $order->save();
                $request->id=$order->user_id;
            }
            $this->sendEmailReminder($request,null);
        }

        return Redirect::to('delivery')->with('message', 'Ваш заказ отправлен на обработку');
    }

    public function proceedlight(Request $request){
        $this->sendEmailReminder($request, null);
        return Redirect::to('delivery')->with('message', 'Ваш заказ отправлен на обработку') ;
    }

    public function sendEmailReminder(Request $request, $id){

        Mail::send('email', ['request' => $request], function ($mail) {
            //$mail->from('hello@app.com', 'Your Application');
            $mail->to('ump1305@mail.ru')->subject('New Order!');
        });
    }

}
