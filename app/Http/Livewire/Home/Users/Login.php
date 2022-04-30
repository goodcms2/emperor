<?php

namespace App\Http\Livewire\Home\Users;

use App\Models\Admin\Log;
use App\Models\Home\Token;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Login extends Component
{

    public User $user;
    public $mobile, $password;

    public function mount()
    {
        $this->user = new User;
    }

    protected $rules = [
        'mobile'    => 'required|ir_mobile',
        'password'    => 'required',
    ];

    public function LoginForm()
    {
        $this->validate();
        $user = User::where('mobile', $this->mobile)->first();

        if (isset($user)) {
            if ($user->mobile_verified_at == null) {
                $code = random_int(1000, 9999);
                if (isset($user->token->expired_at)) {
                    if ($user->token->expired_at > Carbon::now()) {
                        Token::create([
                            'user_id' => $user->id,
                            'code' => $code,
                            'type' => 'verify',
                            'expired_at' => Carbon::now()->addMinutes(3)
                        ]);

                        //TODO
                        // User::sendSms($code, $user->mobile);
                    }
                }else
                {
                    Token::create([
                        'user_id' => $user->id,
                        'code' => $code,
                        'type' => 'verify',
                        'expired_at' => Carbon::now()->addMinutes(3)
                    ]);
                    //ovvjcd95qay5i8d
                    //TODO
                    // User::sendSms($code, $user->mobile);
                }
                //TODO
                // Log::logWritter('sendSms','یک پیامک ارسال شد - '.$user->name);

                return to_route('verify.mobile', $user->id);
            }

            if (Hash::check($this->password, $user->password)) {
                Auth::loginUsingId($user->id);
                //TODO
                return to_route('admin.home');
            } else {
                $this->emit('toast', 'error', 'اطلاعات ورود نادرست است!');
            }
        } else {
            $this->emit('toast', 'error', 'شما در سایت ثبت نام نکرده اید!');
        }
    }

    public function render()
    {

        return view('livewire.home.users.login')->layout('layouts.auth');
    }
}