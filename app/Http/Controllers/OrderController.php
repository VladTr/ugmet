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

    //сохранение заказа в базе данных и отправка уведомления по почте
    public function proceed(Request $request){
        $user = new User;
        //валидация полей ввода
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'tel' => 'required|min:8|max:10',
        ]);

        //проверка наличия пользователя в базе
        $existUser=User::all()->where('name', '=', $request->input('name'))
            ->where('email','=', $request->input('email'))->first();
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

        //проверка наличия заказа в корзине
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

    // оформление заказа путем отправки служебного сообщения на почту
    public function proceedlight(Request $request){
        $this->sendEmailReminder($request, null);
        return Redirect::to('delivery')->with('message', 'Ваш заказ отправлен на обработку') ;
    }


    // метод отправки сообщения на почту
    public function sendEmailReminder(Request $request, $id){
        Mail::send('email', ['request' => $request], function ($mail) {
            //$mail->from('hello@app.com', 'Your Application');
            $mail->to('ump1305@mail.ru')->subject('New Order!');
        });
    }

}
